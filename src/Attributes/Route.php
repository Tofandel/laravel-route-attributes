<?php

namespace Spatie\RouteAttributes\Attributes;

use Arr;
use Attribute;

#[Attribute]
class Route implements RouteAttribute
{
    public array $middleware;

    public function __construct(
        public string $method,
        public string $uri,
        public ?string $name = null,
        array|string $middleware = [],
    ) {
        $this->middleware = Arr::wrap($middleware);
    }
}