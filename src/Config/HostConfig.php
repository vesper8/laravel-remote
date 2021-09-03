<?php

namespace Spatie\Remote\Config;

class HostConfig
{
    public function __construct(
        string $host,
        int $port,
        string $user,
        string $path
    ) {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->path = $path;
    }
}
