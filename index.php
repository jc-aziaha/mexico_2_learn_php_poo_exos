<?php


    // -----------------------------------------Exercice 3---------------------------------------- 
        interface Nageur
        {
            public function nager(): string;
        }

        interface Voleur
        {
            public function voler(): string;
        }

        class SuperHero implements Nageur, Voleur
        {
            public function nager(): string
            {
                return "Je sais nager.";
            }
            
            public function voler(): string
            {
                return "Je sais voler.";
            }
        }


        $superMan  = new SuperHero();
        $superGirl = new SuperHero();
        

        echo $superMan->nager();
        echo "<br/>";
        echo $superGirl->voler();







    // -----------------------------------------Exercice 2---------------------------------------- 
        // interface Vehicule
        // {
        //     public function demarrer(): string;

        //     public function arreter(): string;
        // }

        // class Voiture implements Vehicule
        // {
        //     public function demarrer(): string
        //     {
        //         return "La voiture démarre.";
        //     }

        //     public function arreter(): string
        //     {
        //         return "La voiture s'arrête.";
        //     }
        // }

        // class Moto implements Vehicule
        // {
        //     public function demarrer(): string
        //     {
        //         return "La moto démarre.";
        //     }
            
        //     public function arreter(): string
        //     {
        //         return "La moto s'arrête.";
        //     }
        // }

        // $voiture = new Voiture();
        // $moto    = new Moto();

        // echo $voiture->demarrer();
        // echo "<br/>";
        // echo $moto->arreter();







    // -----------------------------------------Exercice 1---------------------------------------- 
    // abstract class Forme
    // {
    //     abstract public function calculerSurface(): int|float;
    // }

    // class Cercle extends Forme
    // {
    //     public int|float $rayon;

    //     public function __construct(int|float $rayon)
    //     {
    //         $this->rayon = $rayon;
    //     }

    //     public function calculerSurface(): int|float
    //     {
    //         // return 3.14 * ($this->rayon * $this->rayon);
    //         return pi() * pow($this->rayon, 2); 
    //     }
    // }

    // class Rectangle extends Forme
    // {

    //     private int|float $longueur;
    //     private int|float $largeur;

    //     public function __construct(int|float $longueur, int|float $largeur)
    //     {
    //         $this->longueur = $longueur;
    //         $this->largeur  = $largeur;
    //     }

    //     public function calculerSurface(): int|float
    //     {
    //         return $this->longueur * $this->largeur;
    //     }
    // }

    // $cercle = new Cercle(2);
    // echo $cercle->calculerSurface();

    // echo "<br/>";

    // $rectangle = new Rectangle(4, 10);
    // echo $rectangle->calculerSurface();