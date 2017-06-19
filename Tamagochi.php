<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tamagochi
 *
 * @author arethens
 */
class Tamagochi {
    private $faim;
    private $sommeil;
    private $hygiene;
    private $joie;
    
    public function manger(){
        $this->faim-=10;
    }
    
    public function GAMING(){
        $this->joie+=9999999999;
    }
    
    public function Tripledouche(){
        $this->hygiene+=10;
    }
    
    public function dormir(){
        $this->sommeil-=10;
    }
    
   

}
    ?>

