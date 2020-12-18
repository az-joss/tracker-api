<?php

namespace Tracker\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LaravelAuthService implements AuthServiceContract
{
    /**
     * @var string
     */
    private string $userModel = User::class;

    /**
     * @inheritDoc
     */
    public function register(array $userData): string
    {
        $user = new $this->userModel($userData);
        $user->access_token = $this->issueToken();
        $user->saveOrFail();

        return $user->access_token;
    }

    /**
     * @inheritDoc
     */
    public function login(array $credentials): string
    {
        if ($user = Auth::guard('api')->user()) {
            return $user->access_token;
        }

        $password = $credentials['password'];
        unset($credentials['password']);

        $user = $this->userModel::where($credentials)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            throw new CredentialsInvalidException();
        }

        $user->access_token = $this->issueToken();
        $user->saveOrFail();

        return $user->access_token;
    }

    /**
     * Creates new token
     *
     * @return string
     */
    private function issueToken(): string
    {
        return Hash::make(\Carbon\Carbon::now()->timestamp);
    }
}
