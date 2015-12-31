<?php
namespace LoopbackSDKPHP\Base\Models;

use LoopbackSDKPHP\Models\Model;

class Subscriber extends Model
{
    /** @var string */
    public $first_name;

    /** @var string */
    public $last_name;

    /** @var string */
    public $address;

    /** @var string */
    public $city;

    /** @var string */
    public $state;

    /** @var string */
    public $zip;

    /** @var string */
    public $geocode;

    /** @var array */
    public $devices;

    /** @var number */
    public $total_savings;
}
