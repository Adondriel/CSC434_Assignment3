<?php
/**
    Pokemon class, the main class. This contains the shared vars, that all pokemon share.
    These classes are just here for historical reference, these should not be graded unless you really want to... for some reason.
    Please grade using the Amazon_lib.php instead.
    Author: Adam Pine
*/
    class Pokemon {
        //Integers
        private $damage;
        private $maxHealth;
        private $currentHealth;
        //Float
        private $experience;
        //String
        private $name;
        //Imaginary Attack Datatype, but just going to use strings instead of making all the different attack objects.
        private $currentAttack;
        //Array
        private $attacks;
        
        //Get the damage of the pokemon.
        function getDamage(){
            return $this->damage;
        }
        
        //Get the max hp of the pokemon.
        function getMaxHealth(){
            return $this->maxHealth;
        }
        
        //Get the current health of the pokemon.
        function getCurrentHealth(){
            return $this->currentHealth;
        }
        
        //Get the experience of the pokemon.
        function getExperience(){
            return $this->experience;   
        }
        
        //Get the name of the pokemon.
        function getName(){
            return $this->name;
        }
        
        //Get the current attack of the Pokemon.
        function getCurrentAttack(){
            return $this->currentAttack;
        }
        
        //Get the list of possible attacks of the Pokemon.
        function getAttacks(){
            return $this->attacks;
        }
        
        //Set the dmg of the pokemon. ints only.
        function setDamage($dmg){
            if (gettype($dmg) == "integer"){
                $this->damage = $dmg;
                return true;
            }
            return false;
        }

        //set the max hp of the pokemon. ints only
        function setMaxHealth($value){
            if (gettype($value) == "integer"){
                $this->maxHealth = $value;
                return true;
            }else{
                return false;
            }
        }
        
        //set the current hp of the pokemon, ints only.
        function setCurrentHealth($value){
            if (gettype($value) == "integer"){
                $this->currentHealth = $value;
                return true;
            }else{
                return false;
            }
        }
        
        //set the exp of the pokemon, doubles only.
        function setExperience($value){
            if (gettype($value) == "double"){
                $this->experience = $value;
                return true;
            }else{
                return false;
            }
        }
        
        //set the name of the pokemon, strings only.
        function setName($value){
            if (gettype($value) == "string"){
                $this->name = $value;
                return true;
            }else{
                return false;
            }
        }
        
        //set the curr atk, strings only.
        function setCurrentAttack($value){
            if (gettype($value) == "string"){
                $this->currentAttack = $value;
                return true;
            }else{
                return false;
            }            
        }
        
        //set the list of atks for the pokemon, array only.
        function setAttacks($value){
            if (gettype($value) == "array"){
                $this->attacks = $value;
                return true;
            }else{
                return false;
            }  
        }
        
        //Choose a random attack from Attacks, be sure to set the list of attacks first, or else it will not do anything.
        function chooseRandomAttack(){
            $randIndex = mt_rand(0,3);
            if (isset($this->attacks)){
                $this->currentAttack = $this->attacks[$randIndex];
                return true;
            }else{
                return false;
            }
        }
        
        //randomize the values of the different things for this pokemon.
        function randomizeValues(){            
            //Random HP value, as integer.
            $randHP = mt_rand(0,$this->maxHealth);
            //range of 0.0 to 100.0
            $max = 100.0;
            $min = 0.0;
            $range = $max-$min;
            //get random float val.
            $num = $min + $range * mt_rand(0, 32767)/32767;    
            //round float to 2 decimals
            $randEXP = round($num, 2);
            
            
            $this->currentHealth = $randHP;
            $this->experience = $randEXP;
        }
    }

/*
Blastoise Class, extends pokemon, has "attacks" which change based on the pokemon. 
These attacks are not changeable by anyone, they are set values (which is why I felt it didn't fit with the rubric.)
*/
    class Blastoise extends Pokemon{
        //Attacks specific to Blastoise.
        //Instead of creating the entire "attacks" object hierarchy,
        //I am just using strings to represent the objects that each of these attacks represents, just consider these strings to be "attack" objects.
        //such that "Bubble" extends "Attack". 
        private $bubble = "Bubble";
        private $waterPulse = "Water Pulse";
        private $hydroPump = "Hydro Pump";
        private $withdraw = "Withdraw";
        
        private $moves = array("Bubble", "waterPulse", "hydroPump", "withdraw");
        //init the values specific to this pokemon.
        function __construct(){
            $this->setDamage(83);
            $this->setMaxHealth(790);
            $this->setCurrentHealth(790);
            $this->setExperience(10.15);
            $this->setName("Blastoise");
            $this->setAttacks($this->moves);
        }        
    }

/*
Vulpix Class, extends pokemon, has "attacks" which change based on the pokemon. 
These attacks are not changeable by anyone, they are set values (which is why I felt it didn't fit with the rubric.)
*/
    class Vulpix extends Pokemon{
        //Attacks Specific to Vulpix.
        private $ember = "Ember";
        private $fireSpin = "Fire Spin";
        private $willOWisp = "Will O Wisp";
        private $inferno = "Inferno";
        
        private $moves = array("Ember", "Fire Spin", "Will O Wisp", "Inferno");
        //init the values specific to this pokemon.
        function __construct(){
            $this->setDamage(41);
            $this->setMaxHealth(380);
            $this->setCurrentHealth(380);
            $this->setExperience(5.15);
            $this->setName("Vulpix");
            $this->setAttacks($this->moves);
        }
    }
?>