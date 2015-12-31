<?php

namespace LoopbackSDKPHP;

use LoopbackSDKPHP\Client\Client;

class LoopbackSDKPHP
{
    /**
     * @var string
     */
    protected $apiHost;

    /**
     * @var string
     */
    protected $apiVersion;

    /**
     * @var Client
     */
    protected $apiClient;

    /**
     * @var Auth
     */
    protected $auth;

    /**
     * LoopbackSDKPHP constructor.
     * @param string $authHost
     * @param string $authEndPoint
     * @param array $authCredentials
     * @param string $apiHost
     * @param string $apiVersion
     */
    public function __construct(
        $apiHost,
        $authEndPoint,
        $authCredentials,
        $apiVersion = null,
        $apiOptions = array()
    ) {
        $this->apiHost = $apiHost;
        $this->authEndPoint = $authEndPoint;
        $this->authCredentials = $authCredentials;
        $this->apiVersion = $apiVersion;
        $this->apiOptions = $apiOptions;

        $this->auth = new Auth($this->apiHost, $this->authEndPoint, $this->authCredentials, $this->apiOptions);
        $this->apiClient = new Client($this->auth, $this->apiHost, $this->apiVersion, $this->apiOptions);
    }

    public function getClient() {
      return $this->apiClient;
    }
}
