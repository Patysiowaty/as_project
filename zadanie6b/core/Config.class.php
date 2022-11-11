<?php

namespace core;
const Protocol = 'http://';

class Config
{
    private string $rootPath;
    private string $serverName;
    private string $serverURL;
    private string $appRoot;
    private string $appURL;
    private string $appSrc;
    private string $actionURL;

    public function __construct(string $serverName, string $appRoot)
    {
        $this->rootPath = dirname(__FILE__) . '/..';
        $this->serverName = $serverName;
        $this->serverURL = Protocol . $serverName;
        $this->appRoot = $appRoot;
        $this->appURL = $this->serverURL . '/as_project' . $this->appRoot;
        $this->appSrc = $this->rootPath . '/app';
        $this->actionURL = $this->appURL . '/ctrl.php?action=';
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

    public function getAppSrc(): string
    {
        return $this->appSrc;
    }

    public function getActionURL(): string
    {
        return $this->actionURL;
    }
}
