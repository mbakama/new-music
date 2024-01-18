<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $to = 'recipient@example.com';
        $subject = 'Test Email';
        $message = 'This is a test email from Laravel.';

        Mail::raw($message, function ($mail) use ($to, $subject) {
            $mail->to($to)->subject($subject);
        });

        $this->info('Test email sent successfully.');
    }
}
