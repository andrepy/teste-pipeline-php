<?php
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase {
  public function testSomaDoisValores() {
    $resultado = 2 + 3;
    $this->assertEquals(7, $resultado);
  }
}
