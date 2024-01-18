<?php

//! Traccia 1!!

 class Continent {
    public $nameContinent;
    public function __construct($continent){
        $this->nameContinent = $continent;
    }
    public function getMyCurrentLocation(){
        return "Mi trovo in {$this->nameContinent}";
    }
}

class Country extends Continent {

public $nameCountry;

public function __construct($continent, $country){
    parent::__construct($continent);
    $this->nameCountry = $country;
}
    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation() . " , {$this->nameCountry}";
    }
}

class Region extends Country {
public $nameRegion;
public function __construct($continent, $country, $region){
    parent::__construct($continent, $country);
    $this->nameRegion = $region;
}
public function getMyCurrentLocation(){
    return parent::getMyCurrentLocation(). " , {$this->nameRegion}";
}
}

class Province extends Region{
    public $nameProvince;
    public function __construct($continent, $country, $region, $province){
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation(). " , {$this->nameProvince}";
    }
}

class City extends Province{
    public $nameCity;
    public function __construct($continent, $country, $region, $province, $city){
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation(). " , {$this->nameCity}";
    }
}


class Street extends City{
    public $nameStreet;
    public function __construct($continent, $country, $region, $province, $city, $street){
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }
    public function getMyCurrentLocation(){
        return parent::getMyCurrentLocation(). " , {$this->nameStreet}";
    }
}
 
$MyLocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");


echo $MyLocation->getMyCurrentLocation();
 

//! TRACCIA 2

class Vertebrates {
    
    public function __construct(){
        $this->getAnimal();
    }
    protected function getAnimal(){
        echo "Sono un animale vertebrato \n";
    }
}

Class WarmBlooded extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->getWarmBlooded();
    }
    protected function getWarmBlooded(){
        echo "Sono un animale a sangue caldo \n";
    }
}

Class ColdBlooded extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->getColdBlooded();
    }
    protected function getColdBlooded(){
    echo "Sono un animale a sangue freddo \n";
    }
}

Class Mammals extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->getMammals();
    }
    protected function getMammals(){
        echo "Roar \n";
    }
}
Class Birds extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->getBirds();
    }
    protected function getBirds(){
        echo "Pew-pew \n";
    }
}

Class Fish extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        $this->getFish();
    }
    protected function getFish(){
        echo "Splash\n";
    }
}

Class Reptiles extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        $this->getReptiles();
    }
    protected function getReptiles(){
        echo "SsssSsSSsss \n";
    }
}
Class Amphibians extends ColdBlooded{
    public function __construct(){
        parent::__construct();
        $this->getAmphibians();
    }
    protected function getAmphibians(){
        echo "Gra-gra \n";
}
}

$magikarp = new Mammals();
