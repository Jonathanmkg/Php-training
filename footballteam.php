<?php

class Footballteam {
    private string $name;
    private string $coach;
    private string $city;
    
    public function __construct($name, $coach, $city){
        $this->name = $name;
        $this->coach = $coach;
        $this->city = $city;
    }    

    public function getName() {
        return $this->name;
    }

    public function getCoach() {
        return $this->coach;
    }

    public function getCity() {
        return $this->city;
    }
}