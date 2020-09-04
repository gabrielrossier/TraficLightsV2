<?php
class TrafficLight
{

    public $red;
    public $yellow;
    public $green;


    function setState($state)
    {
        switch ($state) {
            case 0:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
                break;
            case 1:
                $this->red = true;
                $this->yellow = true;
                $this->green = false;
                break;
            case 2:
                $this->red = false;
                $this->yellow = false;
                $this->green = true;
                break;
            case 3:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                break;
            default:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
        }
    }
    public function nextState($state)
    {
        return ($state + 1) % 4;
    }
}

?>