<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailOuvidoria extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome,  $email, $mensagem, $colaborador)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
        $this->colaborador = $colaborador;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('rh@afs.com.br')
            ->to('rh@afs.com.br')
            ->subject('Ouvidoria site Araujo Fontes')
            ->html(
                '<center>
                    Segue os dados de contato.
                    <br><br>
                    <b>Nome: </b>'.$this->nome.'
                    <br><br>
                    <b>E-mail: </b>'.$this->email.'
                    <br><br>
                    <b>Mensagem: </b>'.$this->mensagem.'
                    <br><br>
                    <b>Tipo de contato: </b>'.$this->colaborador.'
                </center>'
            );
    }
}
