<?php
namespace Runner;

class Simple
{
  public $test = false;

  public function __construct()
  {
    // set the test variable
    $this->test = 'test';
  }

  public function reset()
  {
    // reset the test variable
    $this->test = false;
  }
}
