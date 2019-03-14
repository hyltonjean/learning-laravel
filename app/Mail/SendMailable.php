<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable implements ShouldQueue {
use Queueable, SerializesModels;


	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {

		$this
			->from([['email'=>'hylton@cubitworx.com', 'name'=>'Hylton Walters']])
			->to([['email'=>Input::get('email'), 'name'=>Input::get('name')]])
			->subject('test')
			->markdown('emails.user');

		return $this;
	}
}
