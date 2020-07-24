<?php

namespace SamuelNitsche\LaravelHetznerDns\Tests;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use SamuelNitsche\LaravelHetznerDns\Zone;
use SamuelNitsche\LaravelHetznerDns\Record;
use SamuelNitsche\LaravelHetznerDns\HetznerApi;
use SamuelNitsche\LaravelHetznerDns\Exceptions\MissingApiKeyException;

class HetznerApiTest extends TestCase
{
    /** @test */
    public function it_throws_an_exception_if_no_api_key_is_set()
    {
        $this->expectException(MissingApiKeyException::class);

        $client = (new HetznerApi)->getAllRecords();
    }

    /** @test */
    public function it_returns_a_collection_of_records()
    {
    	Http::fake(function () {
    		return [
	    		"records" => [
				    [
				        "type" => "A",
				        "id" => "string",
				        "created" => "2020-07-24T07:56:45Z",
				        "modified" => "2020-07-24T07:56:45Z",
				        "zone_id" => "string",
				        "name" => "string",
				        "value" => "string",
				        "ttl" => 0
				    ]
				],
			];
    	});

    	$records = (new HetznerApi('foobar'))->getAllRecords();

    	$this->assertInstanceOf(Collection::class, $records);
    	$this->assertInstanceOf(Record::class, $records->first());
    }

    /** @test */
    public function it_returns_a_single_record()
    {
        Http::fake(function () {
            return [
                "record" => [
                    "type" => "A",
                    "id" => "string",
                    "created" => "2020-07-24T07:56:45Z",
                    "modified" => "2020-07-24T07:56:45Z",
                    "zone_id" => "string",
                    "name" => "string",
                    "value" => "string",
                    "ttl" => 0
                ],
            ];
        });

        $record = (new HetznerApi('foobar'))->getRecord('foo');

        $this->assertInstanceOf(Record::class, $record);
    }

    /** @test */
    public function it_returns_a_collection_of_zones()
    {
        Http::fake(function () {
            return [
                "zones" => [
                    [
                        "id" => "string",
                        "created" => "2020-07-24T07:56:45Z",
                        "modified" => "2020-07-24T07:56:45Z",
                        "legacy_dns_host" => "string",
                        "legacy_ns" => [],
                        "name" => "string",
                        "ns" => [],
                        "owner" => "string",
                        "paused" => true,
                        "permission" => "string",
                        "project" => "string",
                        "registrar" => "string",
                        "status" => "verified",
                        "ttl" => 0,
                        "verified" => "2020-07-24T07:56:45Z",
                        "records_count" => 0,
                        "is_secondary_dns" => true,
                        "txt_verification" => []
                    ]
                ],
            ];
        });

        $zones = (new HetznerApi('foobar'))->getAllZones();

        $this->assertInstanceOf(Collection::class, $zones);
        $this->assertInstanceOf(Zone::class, $zones->first());
    }

    /** @test */
    public function it_returns_a_single_zone()
    {
        Http::fake(function () {
            return [
                "zone" => [
                    "id" => "string",
                    "created" => "2020-07-24T07:56:45Z",
                    "modified" => "2020-07-24T07:56:45Z",
                    "legacy_dns_host" => "string",
                    "legacy_ns" => [],
                    "name" => "string",
                    "ns" => [],
                    "owner" => "string",
                    "paused" => true,
                    "permission" => "string",
                    "project" => "string",
                    "registrar" => "string",
                    "status" => "verified",
                    "ttl" => 0,
                    "verified" => "2020-07-24T07:56:45Z",
                    "records_count" => 0,
                    "is_secondary_dns" => true,
                    "txt_verification" => []
                ]
            ];
        });

        $zone = (new HetznerApi('foobar'))->getZone('foo');

        $this->assertInstanceOf(Zone::class, $zone);
    }
}
