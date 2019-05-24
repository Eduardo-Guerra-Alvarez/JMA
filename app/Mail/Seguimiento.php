<?php

namespace App\Mail;

use App\Trabajador;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Seguimiento extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $trabajador;
    public $obra;

    public function __construct($trabajador, $obra)
    {
        $this->trabajador = $trabajador;//Trabajador::where('email',$trabajadorMail);
        $this->obra = $obra;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.seguimiento');
    }
}
