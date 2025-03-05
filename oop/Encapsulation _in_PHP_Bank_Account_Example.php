<?php
class BankAccount
{
  private $balance; // Private property-cannot be accessed directly

  public function __construct($initialBalance)
  {
    $this->balance = $initialBalance; // Setting initial balance
  }

  public function deposit($amount)
  {
    if ($amount > 0) {
      $this->balance += $amount; // Adding money
      echo "Deposited: $amount\n";
    } else {
      echo "Invalid deposit amount\n";
    }
  }

  public function withdraw($amount)
  {
    if ($amount > 0 && $amount <= $this->balance) {
      $this->balance -= $amount; // Withdrawing money
      echo "Withdrawn: $amount\n";
    } else {
      echo "Invalid or insufficient funds\n";
    }
  }

  public function getBalance()
  {
    return $this->balance; // Getting balance safely
  }
}

// Creating 
$account = new BankAccount(1000);

$account->deposit(500);
$account->withdraw(300);
echo "Current Balance: " . $account->getBalance();
