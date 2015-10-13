<?php

namespace App\Http\Middleware;
use Closure;

class Tml {

    public function handle($request, Closure $next) {
        tml_init(array(
            "key" => "76e8b8c5b412f65584ccb10ff596f954c6a6b9e1a2823690a9ce95ef63ae86cd",
            "token" => "f591aef68a4a4b5f8803e3b11b1c76d81df3ce05fce0886710b6c96996a2a4fa",
            "cache" => array(
                "enabled"   => false,
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
