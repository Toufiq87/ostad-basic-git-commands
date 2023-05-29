<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Proceed with registration logic
    // ...
}
Route::get('/home', function () {
  return redirect('/dashboard');
});
php artisan make:middleware LogRequests
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle($request, Closure $next)
    {
        Log::info('Request: ' . $request->method() . ' ' . $request->url());

        return $next($request);
    }
}
protected $middleware = [
  // Other middleware...
  \App\Http\Middleware\LogRequests::class,
];
php artisan make:middleware AuthMiddleware
