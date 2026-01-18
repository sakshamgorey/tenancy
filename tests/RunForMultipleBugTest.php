<?php

declare(strict_types=1);

namespace Stancl\Tenancy\Tests;

use Stancl\Tenancy\Exceptions\TenantCouldNotBeIdentifiedById;

class RunForMultipleBugTest extends TestCase
{
    public function test_the_correct_id_is_passed_to_the_exception_when_a_tenant_is_not_found_in_runForMultiple()
    {
        $this->expectException(TenantCouldNotBeIdentifiedById::class);
        $this->expectExceptionMessage('Tenant could not be identified with tenant_id: non-existent');

        tenancy()->runForMultiple(['non-existent'], function () {
            //
        });
    }
}
