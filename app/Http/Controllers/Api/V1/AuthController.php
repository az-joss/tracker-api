<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\LoginRequest;
use App\Http\Requests\V1\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\UnauthorizedException;
use Tracker\Auth\AuthServiceContract;

class AuthController extends Controller
{
    /**
     * @var \Tracker\Auth\AuthServiceContract
     */
    private $authService;

    /**
     * AuthController constructor.
     *
     * @param \Tracker\Auth\AuthServiceContract $authService
     */
    public function __construct(
        AuthServiceContract $authService
    ) {
        $this->authService = $authService;
    }

    /**
     * Register an user
     *
     * @param \App\Http\Requests\V1\Auth\RegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $token = $this->authService->register($request->validated());

        return response()->json([
            'access_token' => $token
        ]);
    }

    /**
     * Login an user
     *
     * @param \App\Http\Requests\V1\Auth\LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $token = $this->authService->login($request->validated());

        return response()->json([
            'access_token' => $token
        ]);
    }

}
