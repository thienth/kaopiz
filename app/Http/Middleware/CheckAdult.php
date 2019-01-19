<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdult
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
        // neu data gui len ma co tuoi < 18 | o co du lieu thi k cho vao

        if(!$request->age || ($request->age >= 14 & $request->age < 18)){
            return redirect()->back()->with('errMsg', "Bạn không đủ tuổi!");
        }
        if($request->age < 14){
            return redirect()->back()->with('errMsg', "Đề nghị cháu về đi học bài đi!");
        }
        return $next($request);
    }
}
