<?php

namespace App\Console\Commands;

use App\Jobs\CheckPaymentExpiration;
use Illuminate\Console\Command;

class CheckPaymentExpirationCommand extends Command
{
    protected $signature = 'payments:check-expiration';
    protected $description = 'Check and update expired payments';

    public function handle()
    {
        $this->info('Dispatching payment expiration check job...');
        CheckPaymentExpiration::dispatch();
        $this->info('Payment expiration check job dispatched successfully.');

        return Command::SUCCESS;
    }
}
