<?php

namespace LoopbackSDKPHP\Client;

abstract class API
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * API constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

}