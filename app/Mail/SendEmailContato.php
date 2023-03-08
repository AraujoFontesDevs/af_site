<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailContato extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome,  $email, $mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('bh@afs.com.br')
            ->to('bh@afs.com.br')
            ->subject('Contato pelo site Araujo Fontes')
            ->html(
                '<center>
                    Segue os dados de contato.
                    <br><br>
                    <b>Nome: </b>'.$this->nome.'
                    <br><br>
                    <b>E-mail: </b>'.$this->email.'
                    <br><br>
                    <b>Mensagem: </b>'.$this->mensagem.'
                </center>'
            );
    }
}
