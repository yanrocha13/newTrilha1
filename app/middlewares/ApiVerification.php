<?php
declare(strict_types=1);

namespace App\middlewares;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class ApiVerification implements IMiddleware
{
    public function handle(Request $request) : void
    {
        // Do authentication
        $request->authenticated = true;
    }

}