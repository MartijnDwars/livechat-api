<?php

namespace Gufy\LivechatApi\Models;

use Gufy\LivechatApi\LivechatApi;
use GuzzleHttp\Client;

abstract class Base implements \ArrayAccess
{
    protected $api_url = 'https://api.livechatinc.com/';
    protected $user;
    protected $api_key;
    public $data = [];
    protected $baseUrl = '';
    public function __construct($user = '', $api_key = '')
    {
        if (func_num_args() == 0) {
            $instance = LivechatApi::getInstance();
            $user = $instance->getUser();
            $api_key = $instance->getApiKey();
        }
        $this->user = $user;
        $this->api_key = $api_key;
    }

    public function buildUrl($path)
    {
        return $this->baseUrl.$path;
    }

    public function request($method, $url, $data = [])
    {
        try {
            $client = new Client([
                'base_url' => $this->api_url,
                'defaults' => [
                    'auth' => [
                        $this->user,
                        $this->api_key,
                    ],
                    'headers' => [
                        'X-API-Version' => 2,
                    ],
                ],
            ]);
            if ($method == 'GET') {
                $data = ['query' => $data];
            } else {
                $data = ['body' => $data];
            }
            $request = $client->createRequest($method, $this->buildUrl($url), $data);
            $response = $client->send($request);

            return $response->json();
        } catch (\Exception $e) {
            throw new Exception(json_decode((string) $e->getResponse()->getBody(), 1));
        }
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value)
    {
        return $this->data[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }
    
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }
}
