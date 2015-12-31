<?php

namespace LoopbackSDKPHP;

use LoopbackSDKPHP\Client\Exceptions\AuthException;
use GuzzleHttp\Client as GuzzleClient;
use Psr\Http\Message\RequestInterface;

/**
 * Class Auth
 * @package LoopbackSDKPHP\Client
 */
class Auth
{
    /**
     * @var string
     */
    protected $host;

    /**
     * @var array
     */
    protected $accessToken;

    /**
     * @var string
     */
    protected $endPoint;

    /**
     * @var string
     */
    protected $credentials;

    /**
     * Auth constructor.
     * @param string $host
     * @param string $endPoint
     * @param array $credentials
     * $param array $clientOptions
     */
    public function __construct($host, $endPoint, $credentials, $clientOptions = array())
    {
        $this->host = $host;
        $this->endPoint = $endPoint;
        $this->credentials = $credentials;
        $this->clientOptions = $clientOptions;
    }

    public function getAccessToken()
    {
        // lazy load
        if (!isset($this->accessToken)) {

            $args = array_merge(['verify' => !getenv('LOOPBACKSDKPHP_TESTING')], $this->clientOptions);

            $guzzle = new GuzzleClient($args);

            $response = $guzzle->request('POST', $this->host . $this->endPoint, ['json'=> $this->credentials ]);

            if ($response->getStatusCode() !== 200) {
                throw AuthException::make($response);
            }

            $this->accessToken = json_decode($response->getBody()->getContents(), true);
        }

        return $this->accessToken;
    }

    public function authMiddleware()
    {
        $accessToken = $this->getAccessToken();
        return function (callable $handler) use ($accessToken) {
            return function (RequestInterface $request, array $options) use ($handler, $accessToken) {
              $request = $request->withHeader('Authorization', $accessToken['id']);
                return $handler($request, $options);
            };
        };
    }
}
