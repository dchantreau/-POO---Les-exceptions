
<?php

require_once 'Vehicle.php';

class Car extends Vehicle
    {
    private bool $hasParkBrake;

    public function getParkBrake(){
        return $this->parkBrake;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake === true){
            throw new Exception("Ma voiture ne démarre pas");
        }
        return "La voiture peut rouler.";
    }
}