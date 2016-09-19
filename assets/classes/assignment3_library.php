<?php
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
        
        function getDamage(){
            return $this->damage;
        }
        
        function getMaxHealth(){
            return $this->maxHealth;
        }
        
        function getCurrentHealth(){
            return $this->currentHealth;
        }
        
        function getExperience(){
            return $this->experience;   
        }
        
        function getName(){
            return $this->name;
        }
        
        function getCurrentAttack(){
            return $this->currentAttack;
        }
        
        function getAttacks(){
            return $this->attacks;
        }
        
        function setDamage($dmg){
            if (gettype($dmg) == "integer"){
                $this->damage = $dmg;
                return true;
            }
            return false;
        }

        function setMaxHealth($value){
            if (gettype($value) == "integer"){
                $this->maxHealth = $value;
                return true;
            }else{
                return false;
            }
        }
        
        function setCurrentHealth($value){
            if (gettype($value) == "integer"){
                $this->currentHealth = $value;
                return true;
            }else{
                return false;
            }
        }
        
        function setExperience($value){
            if (gettype($value) == "double"){
                $this->experience = $value;
                return true;
            }else{
                return false;
            }
        }
        
        function setName($value){
            if (gettype($value) == "string"){
                $this->name = $value;
                return true;
            }else{
                return false;
            }
        }
        
        function setCurrentAttack($value){
            if (gettype($value) == "string"){
                $this->currentAttack = $value;
                return true;
            }else{
                return false;
            }            
        }
        
        function setAttacks($value){
            if (gettype($value) == "array"){
                $this->attacks = $value;
                return true;
            }else{
                return false;
            }  
        }
        
        function chooseRandomAttack(){
            $randIndex = mt_rand(0,3);
            if (isset($this->attacks)){
                $this->currentAttack = $this->attacks[$randIndex];
                return true;
            }else{
                return false;
            }
        }
        
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

    class Blastoise extends Pokemon{
        //Attacks specific to Blastoise.
        //Instead of creating the entire "attacks" object hierarchy,
        //I am just using strings to represent the objects that each of these attacks represents, just consider these strings to be "attack" objects.
        //such that "Bubble" extends "Attack". 
        public $bubble = "Bubble";
        public $waterPulse = "Water Pulse";
        public $hydroPump = "Hydro Pump";
        public $withdraw = "Withdraw";
        
        public $moves = array("Bubble", "waterPulse", "hydroPump", "withdraw");
        function __construct(){
            $this->setDamage(83);
            $this->setMaxHealth(790);
            $this->setCurrentHealth(790);
            $this->setExperience(10.15);
            $this->setName("Blastoise");
            $this->setAttacks($this->moves);
        }        
    }

    class Vulpix extends Pokemon{
        //Attacks Specific to Vulpix.
        private $ember = "Ember";
        private $fireSpin = "Fire Spin";
        private $willOWisp = "Will O Wisp";
        private $inferno = "Inferno";
        
        public $moves = array("Ember", "Fire Spin", "Will O Wisp", "Inferno");
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