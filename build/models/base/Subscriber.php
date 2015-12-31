<?php
namespace LoopbackSDKPHP\Models\Base;

use LoopbackSDKPHP\Models\Model;

class Subscriber extends Model
{
    const ENDPOINT = 'subscribers';

    /** @var string */
    protected $first_name;

    /** @var string */
    protected $last_name;

    /** @var string */
    protected $address;

    /** @var string */
    protected $city;

    /** @var string */
    protected $state;

    /** @var string */
    protected $zip;

    /** @var string */
    protected $geocode;

    /** @var array */
    protected $devices;

    /** @var number */
    protected $total_savings;


    public function getFirstNameTestingTester()
    {
        return $this->first_name;
    }


    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }


    public function getLastNameTestingTester()
    {
        return $this->last_name;
    }


    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }


    public function getAddressTestingTester()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function getCityTestingTester()
    {
        return $this->city;
    }


    public function setCity($city)
    {
        $this->city = $city;
    }


    public function getStateTestingTester()
    {
        return $this->state;
    }


    public function setState($state)
    {
        $this->state = $state;
    }


    public function getZipTestingTester()
    {
        return $this->zip;
    }


    public function setZip($zip)
    {
        $this->zip = $zip;
    }


    public function getGeocodeTestingTester()
    {
        return $this->geocode;
    }


    public function setGeocode($geocode)
    {
        $this->geocode = $geocode;
    }


    public function getDevicesTestingTester()
    {
        return $this->devices;
    }


    public function setDevices($devices)
    {
        $this->devices = $devices;
    }


    public function getTotalSavingsTestingTester()
    {
        return $this->total_savings;
    }


    public function setTotalSavings($total_savings)
    {
        $this->total_savings = $total_savings;
    }
}
