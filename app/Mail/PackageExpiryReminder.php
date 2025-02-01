<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Payment;

class PackageExpiryReminder extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public Payment $payment)
    {
        //
    }

    public function build(): self
    {
        return $this->subject('Your Package is Expiring Soon')
                    ->view('emails.package_expiry_reminder');
    }
}
