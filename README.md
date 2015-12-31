# Loopback SDK PHP

A SDK for interfacing a Loopback Application with PHP.
Some of the code is borrowed from touhonoob of Crowsdom. Thanks pal!

## Instructions

1. First copy loopback.dist.json to loopback.json and customize accordingly
1. Specify models with cooresponding modelName and endPoint
1. Generate the config files 
```shell
$ bin/loopback-sdk-php generate:config:all
```
1. Generate the model files
```shell
$ bin/loopback-sdk-php generate:class:all
```
## Example

```php

require("vendor/autoload.php");

$apiHost = "https://api.company.com/api/";
$authEndPoint = "users/login";
$authCredentials = [
  'email' => 'joseph.persie@company.com',
  'password' => '1sdfe4r43r'
];

try {

  $loopbackPhpSdk = new \LoopbackSDKPHP\LoopbackSDKPHP(
    $apiHost,
    $authEndPoint,
    $authCredentials,
    null,
    ['debug' => true]
  );

  $apiClient = $loopbackPhpSdk->getClient();

  $Subscriber = new \LoopbackSDKPHP\Models\Base\Subscriber($apiClient, 4);
}
catch(Exception $e) {
  var_dump($e->getMessage());
}
```
