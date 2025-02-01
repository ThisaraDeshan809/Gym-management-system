<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Payment;
use App\Mail\PackageExpiryReminder;
use Illuminate\Support\Facades\Mail;

class SendPackageExpiryNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Payment $payment)
    {
        //
    }

    public function handle(): void
    {
        if ($this->payment->user) {
            Mail::to($this->payment->user->email)
                ->send(new PackageExpiryReminder($this->payment));
        }
    }
}
