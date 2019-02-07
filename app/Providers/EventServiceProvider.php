<?php

namespace App\Providers;

use Cubitworx\Laravel\Mail\Listeners\LogMailSent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSending;

class EventServiceProvider extends ServiceProvider {
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		MessageSending::class => [
			LogMailSent::class,
		],
		Registered::class => [
			SendEmailVerificationNotification::class,
		],
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot() {
		parent::boot();

		//
	}
}
