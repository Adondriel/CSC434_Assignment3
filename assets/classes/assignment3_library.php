<?php
    function generateRandomTwoDimArray(){
        $twodimArray = array();       
        for ($x = 0; $x <= 10; $x++) {
            $availPokemonTypes = array("blastoise","vulpix");
            $chosenPokemonType = $availPokemonTypes[mt_rand(0,1)];
            $myPokemon;
            if ($chosenPokemonType == "blastoise"){
                $myPokemon = new Blastoise();
            }elseif($chosenPokemonType == "vulpix"){
                $myPokemon = new Vulpix();            
            }
            $myPokemon->chooseRandomAttack();
            $twodimArray[] = $myPokemon;
        }
        for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$twodimArray[$row][$col]."</li>";
  }
  echo "</ul>";
}
    }

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
        public $bubble = "Bubble";
        public $waterPulse = "Water Pulse";
        public $hydroPump = "Hydro Pump";
        public $withdraw = "Withdraw";
        
        public $moves = array("Bubble", "waterPulse", "hydroPump", "withdraw");
        function __construct(){
            $this->set_damage(83);
            $this->set_maxHealth(790);
            $this->set_currentHealth(790);
            $this->set_experience(10.15);
            $this->set_name("Blastoise");
            $this->set_attacks($moves);
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
            $this->set_damage(41);
            $this->set_maxHealth(380);
            $this->set_currentHealth(380);
            $this->set_experience(5.15);
            $this->set_name("Vulpix");
            $this->set_attacks($moves);
        }
    }
?>