<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Soigneur
 *
 * @author arethens
 */
class Soigneur extends Personnage {
    private $bandage =10;
      
    public function heal(Personnage $cible) {
        $cible->vie += 10;
    }
}
