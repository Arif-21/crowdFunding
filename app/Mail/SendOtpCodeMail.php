<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\User;

class SendOtpCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user, $pesan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $pesan)
    {
        $this->user = $user;
            $this->pesan = $pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.otp_code')
                    ->with([
                        'user' => $this->user,
                        'pesan' => $this->pesan,
                    ]);
    }
}