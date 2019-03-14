<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConsultantMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
			$this
			->from([['email'=>'hylton@cubitworx.com', 'name'=>'Hylton Walters']])
			->to([['email' => config('mail.to.name'), 'name'=> config('mail.to.name')]])
			->subject('test')
			->markdown('emails.consultant');

			return $this;
    }
}
