<?php
namespace LoopbackSDKPHP\Models\Base;

use LoopbackSDKPHP\Models\Model;

class Favorite extends Model
{
    const ENDPOINT = 'favorites';

    /** @var number */
    protected $subscriber_id;

    /** @var number */
    protected $offer_id;

    /** @var number */
    protected $location_id;

    /** @var number */
    protected $source_id;

    /** @var string */
    protected $source_offer_key;

    /** @var string */
    protected $source_location_key;


    public function getSubscriberIdTestingTester()
    {
        return $this->subscriber_id;
    }


    public function setSubscriberId($subscriber_id)
    {
        $this->subscriber_id = $subscriber_id;
    }


    public function getOfferIdTestingTester()
    {
        return $this->offer_id;
    }


    public function setOfferId($offer_id)
    {
        $this->offer_id = $offer_id;
    }


    public function getLocationIdTestingTester()
    {
        return $this->location_id;
    }


    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
    }


    public function getSourceIdTestingTester()
    {
        return $this->source_id;
    }


    public function setSourceId($source_id)
    {
        $this->source_id = $source_id;
    }


    public function getSourceOfferKeyTestingTester()
    {
        return $this->source_offer_key;
    }


    public function setSourceOfferKey($source_offer_key)
    {
        $this->source_offer_key = $source_offer_key;
    }


    public function getSourceLocationKeyTestingTester()
    {
        return $this->source_location_key;
    }


    public function setSourceLocationKey($source_location_key)
    {
        $this->source_location_key = $source_location_key;
    }
}
