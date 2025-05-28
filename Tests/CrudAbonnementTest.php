<?php
namespace Tests\CrudAbonnementTest;

use Application\CrudRepository\CrudAbonnement;
use PHPUnit\Framework\TestCase;


class CrudAbonnementTest extends TestCase {
    private CrudAbonnement $operations ;
    protected function setUp(): void {
        parent::setUp();
        $this->operations = new CrudAbonnement();
    }

    public function testGetAbonnementMethod(){
        $data = $this->operations->getAbonnements();
        $this->assertIsArray($data);
        $this->assertEquals(3 ,count($data));       
        
    }

    public function testdeletAbonnementMethod(){
        $requestStatus = $this->operations->deleteAbonnement(1);
        $this->assertEquals(200, $requestStatus);
    }

}