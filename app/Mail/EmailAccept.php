<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailAccept extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tim)
    {
        $this->tim = $tim;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user_tim = $this->tim;
        return $this->subject('Konfirmasi Pendaftaran - UEL 2022')->view('mail.EmailAccept', compact('user_tim'));
    }
}
