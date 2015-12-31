<?php
namespace LoopbackSDKPHP\Models\Base;

use LoopbackSDKPHP\Models\Model;

class Key extends Model
{
    /** @var number */
    protected $program_id;

    /** @var number */
    protected $cause_id;

    /** @var string */
    protected $membership_key;

    /** @var string */
    protected $control_number;

    /** @var boolean */
    protected $is_sold;


    public function getProgramIdTestingTester()
    {
        return $this->program_id;
    }


    public function setProgramId($program_id)
    {
        $this->program_id = $program_id;
    }


    public function getCauseIdTestingTester()
    {
        return $this->cause_id;
    }


    public function setCauseId($cause_id)
    {
        $this->cause_id = $cause_id;
    }


    public function getMembershipKeyTestingTester()
    {
        return $this->membership_key;
    }


    public function setMembershipKey($membership_key)
    {
        $this->membership_key = $membership_key;
    }


    public function getControlNumberTestingTester()
    {
        return $this->control_number;
    }


    public function setControlNumber($control_number)
    {
        $this->control_number = $control_number;
    }


    public function getIsSoldTestingTester()
    {
        return $this->is_sold;
    }


    public function setIsSold($is_sold)
    {
        $this->is_sold = $is_sold;
    }
}
