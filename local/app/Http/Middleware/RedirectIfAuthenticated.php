<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class RedirectIfAuthenticated {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// if resendEmail and activateAccount action clicked ignore redirect
		if ($this->auth->check() 
			&& $request->route()->getActionName() != "App\Http\Controllers\Auth\AuthController@resendEmail"
			&& $request->route()->getActionName() != "App\Http\Controllers\Auth\AuthController@activateAccount")
		{
			return new RedirectResponse(url('/user/home'));
		}

		return $next($request);
	}

}
