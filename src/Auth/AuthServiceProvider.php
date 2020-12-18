<?php

namespace Tracker\Auth;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as BaseAuthServiceProviderAlias;

class AuthServiceProvider extends BaseAuthServiceProviderAlias
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->app->singleton(AuthServiceContract::class, LaravelAuthService::class);
    }

}
