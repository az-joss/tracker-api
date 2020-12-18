<?php


namespace Tracker\Auth;


interface AuthServiceContract
{
    /**
     * @param array $userData
     * @return string Access token
     */
    public function register(array $userData): string;

    /**
     * @param array $credentials
     * @return string Access token
     */
    public function login(array $credentials): string;
}
