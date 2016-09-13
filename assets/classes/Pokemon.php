<?php
    function 

    abstract class Pokemon {
        //Integers
        $damage;
        $maxHealth;
        $currentHealth;
        //Float
        $experience;
        //String
        $name;
        //Imaginary Attack Datatype, but just going to use strings instead of making all the different attack objects.
        $currentAttack;
        //Array
        $attacks;
        
        function get_damage(){
            return $damage;
        }
        
        function get_maxHealth(){
            return $maxHealth;
        }
        
        function get_currentHealth(){
            return $currentHealth;
        }
        
        function get_experience(){
            return $experience;   
        }
        
        function get_name(){
            return $name;
        }
        
        function get_currentAttack(){
            return $currentAttack;
        }
        
        function get_attacks(){
            return $attacks;
        }
        
        function set_damage($dmg){
            if (gettype($dmg) == "integer"){
                $damage = $dmg;
                return true;
            }
            return false;
        }

        function set_maxHealth($value){
            if (gettype($value) == "integer"){
                $maxHealth = $value;
                return true;
            }else{
                return false;
            }
        }
        
        function set_currentHealth($value){
            if (gettype($value) == "integer"){
                $currentHealth = $value;
                return true;
            }else{
                return false;
            }
        }
        
        function set_experience($value){
            if (gettype($value) == "double"){
                $experience = value;
                return true;
            }else{
                return false;
            }
        }
        
        function set_name($value){
            if (gettype($value) == "string"){
                $name = $value;
                return true;
            }else{
                return false;
            }
        }
        
        function set_currentAttack($value){
            if (gettype($value) == "string"){
                $currentAttack = $value;
                return true;
            }else{
                return false;
            }            
        }
        
        function set_attacks($value){
            if (gettype($value) == "array"){
                $attacks = $value;
                return true;
            }else{
                return false;
            }  
        }
        
        function chooseRandomAttack(){
            $randIndex = mt_rand(0,3);
            if (gettype($attacks) == "array"){
                $currentAttack = $attacks[$randIndex];
                return true;
            }else{
                return false;
            }
        }
    }

    class Blastoise extends Pokemon{
        //Attacks specific to Blastoise.
        $bubble = "Bubble";
        $waterPulse = "Water Pulse";
        $hydroPump = "Hydro Pump";
        $withdraw = "Withdraw";
        
        $moves = array($bubble, $waterPulse, $hydroPump, $withdraw);
        function __construct(){
            set_damage(83);
            set_maxHealth(790);
            set_currentHealth(790);
            set_experience(10.15);
            set_name("Blastoise");
            set_attacks($moves);
        }        
    }

    class Vulpix extends Pokemon{
        //Attacks Specific to Vulpix.
        $ember = "Ember";
        $fireSpin = "Fire Spin";
        $willOWisp = "Will O Wisp";
        $inferno = "Inferno";
        
        $moves = array($ember, $fireSpin, $willOWisp, $inferno);
        function __construct(){
            set_damage(41);
            set_maxHealth(380);
            set_currentHealth(380);
            set_experience(5.15);
            set_name("Vulpix");
            set_attacks($moves);
        }
    }
?>