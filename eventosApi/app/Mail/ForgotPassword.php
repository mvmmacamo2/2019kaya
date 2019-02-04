<?php

namespace App\Mail;

use App\Token;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    protected $token, $request, $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Token $token, Request $request)
    {
        $this->user = $token->user;
        $this->token = $token;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = $this->request->input('url');
        return $this->from('kaya@kaya.com')
            ->view('mails.forgot-password')
            ->with('token', $this->token)
            ->with('url', $url)
            ->with('user', $this->user);
        //return $this->view('view.name');
    }
}
