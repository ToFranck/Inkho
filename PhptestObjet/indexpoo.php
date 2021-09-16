<?php

//crée la classe
// class Employe{

    //donne des var (des proprietes)
    // public $nom;
    // public $prenom;
    // public $age;
    
    //je lui crée une function ( une function en inte est une methode)
    // public function presentation(){

        //j'affiche ce que je souhaite la afficher une phrase avec un this pour bien specifier
//         var_dump("hey, je suis $this->prenom $this->nom et j'ai $this->age ans");
//     }

    
// }

//Je crée plusieurs employes 
// $employe1 = new Employe();
// $employe1 ->prenom ="Franck";
// $employe1->nom ="Tolosano";
// $employe1->age =23;


// $employe2 = new Employe();
// $employe2 ->prenom ="Jean";
// $employe2->nom ="To";
// $employe2->age =25;


//j'appl la function bien definie au dessus 
//$employe1->presentation();





//---------------construction avec deja des champ oblgtoir cote php ->


//crée la classe
class Employe{

    //donne des var (des proprietes)
    public $nom;
    public $prenom;
    private $age;
    
    //le constructeur se construit a chaques appls
    public function __construct($prenom, $nom, $age){

        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->age =$age; //ou protected
        
    }

    //je rends publique mes proprietes/modifiable (mais que de l'exterieur)
    public function setAge($age){

        $this->age = $age;
    }

    public function getAge(){

        return $this->age;

    }



    //je lui crée une function ( une function en inte est une methode)
    public function presentation(){

        //j'affiche ce que je souhaite la afficher une phrase avec un this pour bien specifier
        var_dump("hey, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }

    
}






class Patron extends Employe{

    //donne des var (des proprietes)
    
    public $voiture;
    
    //le constructeur se construit a chaques appls
    public function __construct($prenom, $nom, $age, $voiture){

        parent::__construct($prenom,$nom,$age);
        $this->voiture = $voiture;
        
    }

    //je lui crée une function ( une function en inte est une methode)

    public function rouler(){

        var_dump("Bonjour je roule avec ma $this->voiture !");
    }
    
}

//Je crée plusieurs employes 
$employe1 = new Employe("Franck", "Tolosano",23);

$employe2 = new Employe("Jean","To",25);

$patron = new Patron("Franco","Do",55,"Mercedes");


//j'appl la function bien definie au dessus 
$employe1->presentation();
// $employe2->presentation();
$patron->presentation();
$patron->rouler();