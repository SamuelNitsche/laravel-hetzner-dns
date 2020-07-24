<?php

namespace SamuelNitsche\LaravelHetznerDns;

use Illuminate\Support\Facades\Http;
use SamuelNitsche\LaravelHetznerDns\Exceptions\MissingApiKeyException;

class HetznerApi
{
    protected $apiKey;

    public $baseUrl = "https://dns.hetzner.com/api/v1";


    public function __construct(string $apiKey = null)
    {
        $this->apiKey = config('laravel-hetzner-dns.key', $apiKey);
    }

    public function getAllRecords()
    {
        $data = $this->request('get', 'records')['records'];

        return collect($data)->mapInto(Record::class);
    }

    public function getRecord($record)
    {
        if ($record instanceof Record) {
            $record = $record->getId();
        }

        $data = $this->request('get', "records/{$record}")['record'];

        return new Record($data);
    }

    protected function request(string $method, string $endpoint, array $headers = [])
    {
        throw_unless($this->apiKey, MissingApiKeyException::class);

        return Http::withHeaders([
            'Auth-API-Token' => $this->apiKey,
        ])->$method("{$this->baseUrl}/{$endpoint}")->json();
    }
}
