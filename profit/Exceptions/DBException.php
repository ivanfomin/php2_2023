<?php

namespace Exceptions;

class DBException extends \Exception
{
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }


}