<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mailing;
use App\Reciever;

class SendMailing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mailing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the mail to the recievers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $mail = Mailing::find(6);

        $recievers = Reciever::all();

        $recievers->each(function ($reciever) use ($mail) {
            $reciever->sendMailing($mail);
        });
    }
}
