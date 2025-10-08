<?php

namespace App\Jobs;

use App\Models\Payment;
use App\Models\PricePackage;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CheckPaymentExpiration implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        try {
            DB::beginTransaction();
            $payments = Payment::where('payment_status', 'paid')
                ->where('is_expired', 0)
                ->get();

            foreach ($payments as $payment) {
                $shouldExpire = $this->shouldExpire($payment);

                if ($shouldExpire) {
                    $payment->is_expired = 1;
                    $payment->save();

                    $user = User::find($payment->user_id);
                    if ($user) {
                        $user->is_registered = 0;
                        $user->save();
                    }
                }
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Payment expiration job failed: ' . $e->getMessage());
        }
    }

    /**
     * Add your expiration logic here
     * For example, check if payment is older than package duration
     */
    private function shouldExpire(Payment $payment): bool
    {
        $package = PricePackage::find($payment->package_id);
        if ($package) {
            $expirationDays = $package->duration;
        } else {
            $expirationDays = 1;
        }
        return $payment->payment_date->addMonths($expirationDays)->isPast();
    }
}
