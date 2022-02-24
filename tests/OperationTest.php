<?php

use PHPUnit\Framework\TestCase;  

class OperationTest extends TestCase {



    private $op; 

    public function setUp():void{
        $this->op = new MateriasManager(); 
        
    }

    public function test_obtiene_materia (){

        $this-> assertEquals( '[{"id":"1","nombre":"filosofia cuantica"}]', $this->op ->getMateria(1));
    }

    public function test_coloca_materia (){

        $this-> assertEquals( 'matematicas', $this->op ->setMateria('matematicas'));
    }

 /* public function test_obtiene_todas_las_materias (){

        $this-> assertEquals( '', $this->op ->getMateria(''));
    }*/
    
}





?>