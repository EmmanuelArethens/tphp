<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author arethens
 */
class Personnage {

    protected $vie;
    protected $defense;
    protected $nom;
    protected $force;

    function __construct(int $vie, 
            int $defense, 
            string $nom, 
            int $force) {
        $this->vie = $vie;
        $this->defense = $defense;
        $this->nom = $nom;
        $this->force = $force;
    }

    public function defendre() {
        $this->defense += 2;
    }

    public function attaquer(Personnage $victime) {
        $degats = $this->force - $victime->defense;
         if($this->force <= $victime->defense){
            $degats = 1;
        }
        $victime->vie -= $degats;
       
    }
   
    public function genererHTML():string {
        return '<ul>'
            . '<li>Nom : ' . $this->nom . '</li>'
            . '<li>Vie : ' . $this->vie . '</li>'
            . '<li>Force : ' . $this->force . '</li>'
            . '<li>Défense : ' . $this->defense . '</li>'
            . '</ul>';
    }

}


