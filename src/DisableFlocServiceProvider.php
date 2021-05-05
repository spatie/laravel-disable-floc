<?php

namespace Spatie\DisableFloc;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class DisableFlocServiceProvider extends ServiceProvider
{
    public function boot()
    {
       $this->app->make(Kernel::class)->prependMiddlewareToGroup('web', DisableFloc::class);
    }
}
