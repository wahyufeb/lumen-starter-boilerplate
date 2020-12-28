<?php


namespace App\DataTransferObject;

class GenericDTO {
  private $token;

  /**
   * Get the value of token
   */
  public function getToken()
  {
    return $this->token;
  }

  /**
   * Set the value of token
   *
   * @return  self
   */
  public function setToken($token)
  {
    $this->token = $token;

    return $this;
  }
}