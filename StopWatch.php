<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 24/01/2019
 * Time: 15:14
 */

class StopWatch
{
    private $startTime;
    private $endTime;

    function __construct()
    {
        return $this->startTime = date('h:i:s');
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @return false|string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    function resetTime()
    {
        return $this->startTime = date('h:i:s');
    }

    function endTime()
    {
        return $this->endTime = date('h:i:s');
    }
    function getElapsedTime(){
        return strtotime($this->endTime) - strtotime($this->startTime);
    }

}