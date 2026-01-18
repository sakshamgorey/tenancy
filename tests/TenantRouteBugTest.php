<?php

declare(strict_types=1);

namespace Stancl\Tenancy\Tests;

use Illuminate\Support\Facades\Route;

class TenantRouteBugTest extends TestCase
{
    public function test_tenant_route_helper_works_with_relative_urls()
    {
        Route::get('/foo', function () {
            return 'bar';
        })->name('foo');

        $domain = 'my-domain.localhost';

        // This should not throw an error and should return the correct relative URL
        $url = tenant_route($domain, 'foo', [], false);

        $this->assertSame('my-domain.localhost/foo', $url);
    }
}
