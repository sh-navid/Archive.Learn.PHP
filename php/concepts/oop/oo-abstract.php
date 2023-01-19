<?php
abstract class A{
    abstract function af();

    function f(){

    }
}

class AA extends A{
    // PHP Fatal error:  Class AA contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (A::af) 
    function af(){
        
    }
}