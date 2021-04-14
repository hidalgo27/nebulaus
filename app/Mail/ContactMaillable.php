<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMaillable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	public string $textsubject;
	public string $textmessage;
    public function __construct(string $subject, string $message)
    {
        //
        $this->textsubject=$subject;
	$this->textmessage=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
		->subject("Formulario de contacto- " . config(key:"app.name"))
		->markdown(
    }
}