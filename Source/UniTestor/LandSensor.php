<?php

namespace UniTestor {

class LandSensor {

    public function getNeededEnergy ( Vector $vector ) {

        return $vector->getLength() * ($a = mt_rand(15, 25) / 100);
    }
}

}
