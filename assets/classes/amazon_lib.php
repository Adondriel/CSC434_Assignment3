<?php
    class Item {
        //Strings
        $condition;
        $name;
        
        //floats
        $price;
        
        //Integers
        $stock;
        
        //array
        $tags = array();
       
        
        function getCondition(){
            return $this->condition;
        }
        
        function getName(){
            return $this->name;
        }
        
        function getPrice(){
            return $this->price;
        }
        
        function getStock(){
            return $this->stock;
        }
        
        function getTags(){
            return $this->tags;
        }
        //strings
        function setCondition($value){
            if (gettype($value) == "string"){
                $this->condition = $value;
                return true;
            }
            return false;
        }
        function setName($value){
            if (gettype($value) == "string"){
                $this->name = $value;
                return true;
            }
            return false;
        }
        //float(double)
        function setPrice($value){
            if (gettype($value) == "double"){
                $this->price = $value;
                return true;
            }
            return false;
        }
        //integer
        function setStock($value){
            if (gettype($value) == "integer"){
                $this->stock = $value;
                return true;
            }
            return false;
        }
        //arrays
        function setTags($value){
            if (gettype($value) == "array"){
                $this->tags = $value;
                return true;
            }
            return false;
        }
        //all tags should be strings
        function addTag($value){
            if (gettype($value) == "string"){
                $this->tags[] = $value;
                return true;
            }
            return false;
        }
        /**
            Randomize parent vars, such as:
            Condition, Price, Stock
        */
        function RandomizeParentVars(){
            
        }
    }

    class TV extends Item{
        //specific to TV.
        private $screenSize;
        private $resolution;
        private $manufacturer;
        
        /*
            Initialize vars like:
            Name, Tags
        */
        function __construct(){

            
        }
    }

    class Computer extends Item{
        //all strings specific to Computer
        private $ram;
        private $cpuManu;
        private $gcard;
        private $manufacturer;
        /*
            Initialize vars like:
            Name, Tags
        */
        function __construct(){
            $this->setName("Computer");
            $this->addTag("Computer");
            $this->addTag("Technology");
        }
        
        /*
            Randomize the variables for this specific object:
            Ram, cpumanu, gcard, and manufacturer.
        */
        function randomizeVariables(){
            $ramAmts = array("2gb", "4gb", "6gb", "8gb", "12gb", "16gb", "32gb", "64gb");
            $cpuOpts = array("AMD", "Intel i3", "Intel i5", "Intel i7");
            $gCardOpts = array("GTX 770", "GTX 980TI", "AMD Something or other", "GTX 1060", "GTX 1070", "GTX 1080");
            $manufOpts = array("HP", "Lenovo", "Dell", "Razer", "LG");
            //set the ram to random option.
            $randRam = $ramAmts[mt_rand(0,7)];
            $this->setRam($randRam);
            //set the CPU to random option.
            $randCpu = $cpuOpts[mt_rand(0,3)];
            $this->setCPUManu($randCpu);
            //set the gcard to random option.
            $randGCard = $gCardOpts[mt_rand(0,5)];
            $this->setGCard($randGCard);
            //Set the manufacturer to random manufacturer.
            $randManuf = $manufOpts[mt_rand(0,4)];
            $this->setManufacturer($randManuf);          
            
        }
        
        function getRam(){
            return $this->ram;
        }
        
        function getCPUManu(){
            return $this->cpuManu;
        }
        
        function getGCard(){
            return $this->gcard;
        }
        
        function getManufacturer(){
            return $this->manufacturer;   
        }
        
        function setRam($value){
            if (gettype($value) == "string"){
                $this->ram = $value;
                return true;
            }
            return false;
        }
        
        function setCPUManu($value){
            if (gettype($value) == "string"){
                $this->cpuManu = $value;
                return true;
            }
            return false; 
        }
        
        function setGCard($value){
            if (gettype($value) == "string"){
                $this->gcard = $value;
                return true;
            }
            return false;        
        }
        
        function setManufacturer($value){
            if (gettype($value) == "string"){
                $this->manufacturer = $value;
                return true;
            }
            return false;          
        }
    }
?>