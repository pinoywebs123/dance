<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PassNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $message;
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $message, $token)
    {
        $this->email = $email;
        $this->message = $message;
        $this->token = $token;
    }

    public function build()
    {
        return $this->markdown('emails.pass')->with('email', $this->email)->with('message', $this->message)->with('token', $this->token);
    }
}
