<?php declare(strict_types=1);

namespace Acme;

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', function() {
    return 'Hello world';
});