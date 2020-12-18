<?php

namespace Tracker\Auth;

use Illuminate\Auth\AuthenticationException;

class CredentialsInvalidException extends AuthenticationException
{
    /**
     * @var string
     */
    protected $message = 'Credentials are invalid.';
}
