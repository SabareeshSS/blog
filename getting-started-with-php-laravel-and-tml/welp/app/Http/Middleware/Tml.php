<?php

namespace App\Http\Middleware;
use Closure;

class Tml {

    public function handle($request, Closure $next)
    {
        tml_init("f591aef68a4a4b5f8803e3b11b1c76d81df3ce05fce0886710b6c96996a2a4fa", array(
            "cache" => array(
                "enabled"   => true,
                "adapter"   => "memcache",
                "host"      => "localhost",
                "port"      => 11211
            )
        ));

        return $next($request);
    }

    public function terminate($request, $response) {
        tml_complete_request();
    }
}
