<?php

namespace App;

class Employee extends User
{
  private string $empNumber;

  public function getInformations(): string
  {
    return 'Employé : ' . $this->name . " / " . $this->empNumber;
  }

  public function getEmpNumber(): string
  {
    return $this->empNumber;
  }

  public function setEmpNumber(string $empNumber): self
  {
    $this->empNumber = $empNumber;

    return $this;
  }
}
