<?php
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase {
  public function testSomaDoisValores() {
    $resultado = 3 + 3;
    $this->assertEquals(6, $resultado);
  }
}
