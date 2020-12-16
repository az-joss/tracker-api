<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\LoginRequest;
use App\Http\Requests\V1\Auth\RegisterRequest;

class AuthController extends Controller
{
    /**
     * Register an user
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        //
    }

    /**
     * Login an user
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
       //
    }

}
