<?php

declare(strict_types=1);

namespace OpenFeature\Providers\Flagd\config;

class Config implements IConfig
{
    private string $host;
    private int $port;
    private string $protocol;
    private bool $secure;

    public function __construct(?string $host = null, ?int $port = null, ?string $protocol = null, ?bool $secure = null)
    {
        $this->host = $host ?? Defaults::DEFAULT_HOST;
        $this->port = $port ?? Defaults::DEFAULT_PORT;
        $this->protocol = $protocol ?? Defaults::DEFAULT_PROTOCOL;
        $this->secure = $secure ?? Defaults::DEFAULT_SECURE;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function isSecure(): bool
    {
        return $this->secure;
    }
}
