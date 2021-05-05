<?php

namespace Spatie\DisableFloc\Tests;

use Illuminate\Support\Facades\Route;

class DisableFlocTest extends TestCase
{
    /** @test */
    public function it_will_add_the_floc_header()
    {
        Route::get('test', fn () => 'Computer says no, Google');

        $this
            ->get('test')
            ->assertSuccessful()
            ->assertHeader('Permissions-Policy', 'interest-cohort=()');
    }
}
