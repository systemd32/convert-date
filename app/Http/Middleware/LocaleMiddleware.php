<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */


    public function handle($request, Closure $next)
    {
        // Lấy locale từ URL (phần {locale})
        $locale = $request->segment(1);

        // Kiểm tra nếu locale hợp lệ thì đặt ngôn ngữ
        if (in_array($locale, config('app.locales'))) {
            App::setLocale($locale);
        } else {
            // Nếu không hợp lệ, chuyển hướng về ngôn ngữ mặc định
            return redirect('/en/', 301);
        }
        return $next($request);
    }
}
