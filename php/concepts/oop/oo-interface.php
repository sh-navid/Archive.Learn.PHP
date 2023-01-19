<?php
abstract class A{
    // 1 can have property
    public $a;

    // 2 abstract methods are public or protected
    abstract function af();

    function f(){

    }

    // 3 extends
}

// To implement polymorphism among different classes
interface I{
    // 1 cannot have property - Interfaces may not include properties
    // public $a;

    // 2 just public methods
    function f2();

    // 3 implements
}

class AA extends A implements I{
    // PHP Fatal error:  Class AA contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (A::af) 
    function af(){
        
    }

    // PHP Fatal error:  Class AA contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (I::f2)
    function f2(){

    }
}