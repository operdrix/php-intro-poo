<?php

namespace App;

class Customer extends User
{
  private string $customerNumber;

  public function getInformations(): string
  {
    return 'Client : ' . $this->name . " / " . $this->customerNumber;
  }

  public function getCustomerNumber(): string
  {
    return $this->customerNumber;
  }

  public function setCustomerNumber(string $customerNumber): self
  {
    $this->customerNumber = $customerNumber;
    return $this;
  }
}
