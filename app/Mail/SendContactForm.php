<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $tnombre;
    public $temail;
    public $twhatsaap;
    public $tmensaje;

    public function __construct(string $nombre, string $email,string $whatsaap,string $mensaje)
    {
        //
        $this->tnombre=$nombre;
        $this->temail=$email;
        $this->twhatsaap=$whatsaap;
        $this->tmensaje=$mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject("FORMULARIO DE CONTACTO")
            ->markdown('email.messageContact');
    }
}
