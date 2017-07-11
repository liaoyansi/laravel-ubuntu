<?php

namespace App\Http\Middleware;

use \Closure;
class Activity{


    public function handle($request, Closure $next){
        return $next($request);

        //return $result;
        //echo '我是后置操作';
    }
}