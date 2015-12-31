<?php

namespace LoopbackSDKPHP\Client;

use LoopbackSDKPHP\Auth;
use LoopbackSDKPHP\LoopbackSDKPHP;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;

/**
 * Class Client
 * @package LoopbackSDKPHP\Client
 */
class Client
{

    /**
     * @var string
     */
    protected $host;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var Auth
     */
    protected $auth;

    /**
     * Client constructor.
     * @param string $host
     * @param string $version
     * @param array $guzzleOptions
     */
    public function __construct(
        Auth $auth,
        $host,
        $version = LoopbackSDKPHP::DEFAULT_API_VERSION,
        array $guzzleOptions = []
    ) {
      
        $this->auth = $auth;
        $this->host = $host;
        $this->version = $version;

        $stack = HandlerStack::create();
        $stack->push($auth->authMiddleware());
        $stack->push(static::versionMiddleware($version));

        $args = array_merge([
          'base_uri' => $host,
          'handler' => $stack
        ], $guzzleOptions);

        $this->guzzle = new \GuzzleHttp\Client($args);
    }

    /**
     * @return \GuzzleHttp\Client
     */
    public function getGuzzle()
    {
        return $this->guzzle;
    }

    public static function versionMiddleware($version)
    {
        return function (callable $handler) use ($version) {
            return function (RequestInterface $request, array $options) use ($handler, $version) {
                $prefix = $version ? "/$version" : '';
                $uri = $request->getUri();
                $uri = $uri->withPath($prefix . $uri->getPath());
                $request = $request->withUri($uri);
                return $handler($request, $options);
            };
        };
    }

}
