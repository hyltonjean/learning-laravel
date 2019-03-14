<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable {
use Queueable, SerializesModels;

	// public $user;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct() {
		// $this->user = $user;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {

		// $this
		// ->from([['email'=>config('mail.from.address'), 'name'=>config('mail.from.name')]])
		// ->to([
		// 	['email'=>config('mail.to.address'), 'name'=>config('mail.to.name')],
		// 	['email'=> Input::get('email'), 'name'=> Input::get('name')]
		// ])
		// return $this->markdown('emails.user');

		$this
			->from([['email'=>'hylton@cubitworx.com', 'name'=>'Hylton Walters']])
			->to([['email'=>'client@test.com', 'name'=>'Client']])
			->subject('Test')
			->markdown('emails.user');
			// ->with(['application' => $this->user]);

		return $this;


	}
}
