<?php

namespace SamuelNitsche\LaravelHetznerDns;

use Illuminate\Support\Carbon;

class Zone
{
    protected $id;

    protected $name;

    protected $ttl;

    protected $registrar;

    protected $legacyDnsHost;

    protected $legacyNs;

    protected $ns;

    protected $created;

    protected $modified;

    protected $project;

    protected $owner;

    protected $permission;

    protected $status;

    protected $verifiedAt;

    protected $paused;

    protected $isSecondaryDns;

    protected $txtVerification;

    protected $recordCount;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->ttl = $data['ttl'] ?? null;
        $this->registrar = $data['registrar'];
        $this->legacyDnsHost = $data['legacy_dns_host'];
        $this->legacyNs = $data['legacy_ns'];
        $this->ns = $data['ns'];
        $this->created = $data['created'];
        $this->modified = $data['modified'];
        $this->project = $data['project'];
        $this->owner = $data['owner'];
        $this->permission = $data['permission'];
        $this->status = $data['status'];
        $this->verifiedAt = $data['verified'];
        $this->paused = $data['paused'];
        $this->isSecondaryDns = $data['is_secondary_dns'];
        $this->txtVerification = $data['txt_verification'];
        $this->recordCount = $data['records_count'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTtl()
    {
        return $this->ttl;
    }

    public function getRegistrar()
    {
        return $this->registrar;
    }

    public function getLegacyDnsHost()
    {
        return $this->legacyDnsHost;
    }

    public function getLegacyNameservers()
    {
        return $this->legacyNs;
    }

    public function getNameservers()
    {
        return $this->ns;
    }

    public function getCreated()
    {
        return Carbon::parse($this->created);
    }

    public function getModified()
    {
        return Carbon::parse($this->modified);
    }

    public function getProject()
    {
        return $this->project;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function getPermission()
    {
        return $this->permission;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getVerifiedAt()
    {
        return Carbon::parse($this->verifiedAt);
    }

    public function isPaused()
    {
        return $this->paused;
    }

    public function isSecondaryDns()
    {
        return $this->isSecondaryDns;
    }

    public function getTxtVerification()
    {
        return $this->txtVerification;
    }

    public function getRecordCount()
    {
        return $this->recordCount;
    }
}
