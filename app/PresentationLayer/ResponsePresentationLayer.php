<?php


namespace App\PresentationLayerer;

class ResponsePresentationLayer {
  private $code;
  private $message;
  private $data;
  private $errors;

  public function __construct($code, $message, $data, $errors)
  {
    $this->code = $code;
    $this->message = $message;
    $this->data = $data;
    $this->errors = $errors;
  }

  /**
   * Get the value of code
   */
  public function getCode()
  {
    return $this->code;
  }

  /**
   * Set the value of code
   *
   * @return  self
   */
  public function setCode($code)
  {
    $this->code = $code;

    return $this;
  }

  /**
   * Get the value of message
   */
  public function getMessage()
  {
    return $this->message;
  }

  /**
   * Set the value of message
   *
   * @return  self
   */
  public function setMessage($message)
  {
    $this->message = $message;

    return $this;
  }

  /**
   * Get the value of data
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * Set the value of data
   *
   * @return  self
   */
  public function setData($data)
  {
    $this->data = $data;

    return $this;
  }

  /**
   * Get the value of errors
   */
  public function getErrors()
  {
    return $this->errors;
  }

  /**
   * Set the value of errors
   *
   * @return  self
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;

    return $this;
  }

  public function getResponse()
  {
    return [
      'code' => $this->code,
      'message' => $this->message,
      'data' => $this->data,
      'errors' => $this->errors
    ];
  }
}