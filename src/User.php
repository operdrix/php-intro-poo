<?php
// FQCM : App/User
// App correspond à src donc mon nom de fichier résolu devient : App/User.php


namespace App;

use InvalidArgumentException;

abstract class User
{
  protected ?int $id = null;
  protected string $name;

  /**
   * getter for name
   *
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * setter for name
   * 
   * @param string $name
   * @return static
   * @throws InvalidArgumentException if name is empty
   */
  public function setName(string $name): static
  {
    if ($name == '') {
      throw new InvalidArgumentException('Name can not be empty');
    }
    $this->name = $name;
    return $this;
  }

  abstract public function getInformations(): string;
}
