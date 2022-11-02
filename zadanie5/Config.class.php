<?php

const Protocol = 'http://';

class Config
{
    private string $rootPath;
    private string $serverName;
    private string $serverURL;
    private string $appRoot;
    private string $appURL;

    public function __construct(string $serverName, string $appRoot)
    {
        $this->rootPath = dirname(__FILE__);
        $this->serverName = $serverName;
        $this->serverURL = Protocol . $serverName;
        $this->appRoot = $appRoot;
        $this->appURL = $this->serverURL . '/as_project' .$this->appRoot;
    }

    public function getRootPath(): string
    {
        return $this->rootPath;
    }

    public function getServerName(): string
    {
        return $this->serverName;
    }

    public function getServerURL(): string
    {
        return $this->serverURL;
    }

    public function getAppRoot(): string
    {
        return $this->appRoot;
    }

    public function getAppURL(): string
    {
        return $this->appURL;
    }
}
