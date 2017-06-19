<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of care
 *
 * @author arethens
 */
class Care {
    private $taille;
    private $couleur;
    
    function __construct($taille, $couleur) {
        $this->taille = $taille;
        $this->couleur = $couleur;
    }
    function getTaille() {
        return $this->taille;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
public function superficie(){
    echo $this->taille*$this->taille.'px^2';
    
}

  public function afficher():string {
        $style = 'width:' . $this->taille . 'px;'
                . 'height:' . $this->taille . 'px;'
                . 'background-color:' . $this->couleur;
        
          return '<div style="' . $style . '"></div>'; }

}
