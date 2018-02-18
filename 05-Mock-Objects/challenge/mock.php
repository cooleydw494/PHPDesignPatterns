<?php

class MockUser extends User {

  public function __construct()
  {
  }

  public function delete($id)
  {
    return true;
  }

}
