<?php
/**
    Author: Adam Pine
    This file contains the code for Amazon Item library.
    Contains Item (highest class), and: 
    TV, and Computer, which extend Item.    
*/
    class Item {
        //Strings
        private $condition;
        //name of the item
        private $name;
        //manufacturer of the item.
        private $manufacturer;

        //floats
        //the price of the item
        private $price;
        
        //Integers
        //how many of the items are in stock
        private $stock;
        
        //array
        //the tags for the item.
        private $tags = array();
       
        //Gets the value for Condition.
        function getCondition(){
            return $this->condition;
        }
        //Get the manufacturer
        function getManufacturer(){
            return $this->manufacturer;   
        }
        //Get the name of the item
        function getName(){
            return $this->name;
        }
        //get the price of the item.
        function getPrice(){
            return $this->price;
        }
        //get the amount of the item left in stock.
        function getStock(){
            return $this->stock;
        }
        //get the tags for this item.
        function getTags(){
            return $this->tags;
        }
        //strings
        //set the condition, strings only.
        function setCondition($value){
            if (gettype($value) == "string"){
                $this->condition = $value;
                return true;
            }
            return false;
        }
        //set the name, strings only.
        function setName($value){
            if (gettype($value) == "string"){
                $this->name = $value;
                return true;
            }
            return false;
        }
        //Set the manufacturer, strings only.
        function setManufacturer($value){
            if (gettype($value) == "string"){
                $this->manufacturer = $value;
                return true;
            }
            return false;
        }
        //float(double)
        //set the price, float/double only.
        function setPrice($value){
            if (gettype($value) == "double"){
                $this->price = $value;
                return true;
            }
            return false;
        }
        //integer
        //set the stock, ints only.
        function setStock($value){
            if (gettype($value) == "integer"){
                $this->stock = $value;
                return true;
            }
            return false;
        }
        //arrays
        //set tags, array only.
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
            $condOpts = array("Used", "Well Used", "Barely Used", "Rarely Used", "Like New", "Brand New");
            //set the condition to random option.
            $this->setCondition($condOpts[mt_rand(0,5)]);
            
            $max = 100.0;
            $min = 0.0;
            $range = $max-$min;
            //get random float val.
            $num = $min + $range * mt_rand(0, 32767)/32767;    
            //set the price
            $this->setPrice(round($num,2));
            
            //Set Stock
            $this->setStock(mt_rand(0,9999));
        }
    }







    /*
        TV class, extends Item, has special things like ScreenSize, and Resolution.
    */
    class TV extends Item{
        //specific to TV.
        private $screenSize;
        private $resolution;        
        /*
            Initialize vars like:
            Name, Tags
        */
        function __construct(){
            //setup the vars for this specific item type.
            $this->setName("TV");
            $this->addTag("Television");
            $this->addTag("TV");
            $this->addTag("Electronics");
            //randomize the randomizable vars.
            $this->randomizeVariables();
        }
        /*
            Randomize the variables for this specific object:
            screenSize, Reso, Manuf
        */
        function randomizeVariables(){
            $ssOpts = array("20\"", "24\"", "32\"", "50\"");
            $resoOpts = array("1024x768", "1266x768", "1920x1080", "3440x1440");
            $manufOpts = array("Vizio", "LG", "Other TV Brand");
            //set the screensize to random option.
            $randScreenSize = $ssOpts[mt_rand(0,3)];
            $this->setScreenSize($randScreenSize);
            //set the Resolution to random option.
            $randReso = $resoOpts[mt_rand(0,3)];
            $this->setResolution($randReso);
            //Set the manufacturer to random manufacturer.
            $randManuf = $manufOpts[mt_rand(0,2)];
            $this->setManufacturer($randManuf);          
            
        }
        //get the size of the screen.
        function getScreenSize(){
            return $this->screenSize;
        }
        //get the resolution of the screen.
        function getResolution(){
            return $this->resolution;
        }
        //set the screen size, must be a string.
        function setScreenSize($value){
            if (gettype($value) == "string"){
                $this->screenSize = $value;
                return true;
            }
            return false;
        }
        //set the resolution, must be a string.
        function setResolution($value){
            if (gettype($value) == "string"){
                $this->resolution = $value;
                return true;
            }
            return false;
        }
    }






    /*
        Computer Class, extends Item, has special vars ike Ram, CpuManuf, or Graphics card.
    */
    class Computer extends Item{
        //all strings specific to Computer
        //the amt of ram for this comp.
        private $ram;
        //the maker/type of CPU for this comp.
        private $cpuManu;
        //the Graphics Card for this comp.
        private $gcard;
        /*
            Initialize vars like:
            Name, Tags
        */
        function __construct(){
            $this->setName("Computer");
            $this->addTag("Computer");
            $this->addTag("Technology");
            //randomize the vars that are able to be random.
            $this->randomizeVariables();
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
        //Get the value for Ram
        function getRam(){
            return $this->ram;
        }
        //Get the value for CPU Manufacturer
        function getCPUManu(){
            return $this->cpuManu;
        }
        //Get the value for Graphic Card
        function getGCard(){
            return $this->gcard;
        }      

        //Set the Ram value
        function setRam($value){
            if (gettype($value) == "string"){
                $this->ram = $value;
                return true;
            }
            return false;
        }
        //set the CPU manufacturer
        function setCPUManu($value){
            if (gettype($value) == "string"){
                $this->cpuManu = $value;
                return true;
            }
            return false; 
        }
        //Set the Graphics Card.
        function setGCard($value){
            if (gettype($value) == "string"){
                $this->gcard = $value;
                return true;
            }
            return false;        
        }
    }
?>