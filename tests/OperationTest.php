<?php

use PHPUnit\Framework\TestCase;  

class OperationTest extends TestCase {



    private $op; 

    public function setUp():void{
        $this->op = new MateriasManager(); 
        
    }

    public function test1 (){

        $this-> assertEquals( 1, $this->op ->getMateria(1));
    }
}





?>