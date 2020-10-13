<?php

namespace App\Http\Middleware;

use Closure;
use App\Products;

class CheckIfCanPost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Products::firstOrFail()['title']==0){
            return redirect()->route('storeproducts')
        };
        return response('you are not allowed to post! <a href="/">repost<a/>');
    }
}
