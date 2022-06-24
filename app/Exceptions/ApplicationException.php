<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class ApplicationException extends Exception
{
    abstract public function status(): int;
    abstract public function help(): int;
    abstract public function error(): int;

    public function render(Request $request): Response
    {
        $error = new Error($this->help(), $this->error());
        return response($error->toArray(), $this->status());
    }
}
