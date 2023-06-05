<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
php artisan make:migration create_posts_table





























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
