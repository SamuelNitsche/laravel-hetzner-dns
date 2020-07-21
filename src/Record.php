<?php

namespace SamuelNitsche\LaravelHetznerDns;

use Illuminate\Support\Carbon;

class Record
{
    protected $id;
    protected $type;
    protected $name;
    protected $value;
    protected $zoneId;
    protected $created;
    protected $modified;
    protected $ttl;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->type = $data['type'];
        $this->name = $data['name'];
        $this->value = $data['value'];
        $this->zoneId = $data['zone_id'];
        $this->created = $data['created'];
        $this->modified = $data['modified'];
        $this->ttl = $data['ttl'] ?? null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getZoneId()
    {
        return $this->zoneId;
    }

    public function getCreatedAt()
    {
        return Carbon::parse($this->created);
    }

    public function getUpdatedAt()
    {
        return Carbon::parse($this->modified);
    }

    public function getTtl()
    {
        return $this->ttl;
    }
}
