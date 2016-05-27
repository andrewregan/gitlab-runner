<?php

class SimpleTest extends PHPUnit_Framework_TestCase
{
  public function testSet()
  {
    $test = new Test();
    $this->assertSame('test', $test->test);
  }

  public function testReset()
  {
    $test = new Test();
    $test->reset();
    $this->assertFalse($test->test);
  }
}
