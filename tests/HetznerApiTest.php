<?php

namespace SamuelNitsche\LaravelHetznerDns\Tests;

use SamuelNitsche\LaravelHetznerDns\Exceptions\MissingApiKeyException;
use SamuelNitsche\LaravelHetznerDns\HetznerApi;

class HetznerApiTest extends TestCase
{
    /** @test */
    public function it_throws_an_exception_if_no_api_key_is_set()
    {
        $this->expectException(MissingApiKeyException::class);

        $client = (new HetznerApi)->getAllRecords();
    }
}
