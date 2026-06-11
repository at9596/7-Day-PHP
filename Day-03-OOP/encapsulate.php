<?php

class BankAccount {
    // Private data: cannot be accessed directly from outside
    private float $balance;

    public function __construct(float $initialBalance) {
        if ($initialBalance < 0) {
            throw new InvalidArgumentException("Balance cannot be negative.");
        }
        $this->balance = $initialBalance;
    }

    // Public method to deposit (controlled access)
    public function deposit(float $amount): void {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Deposit amount must be positive.");
        }
        $this->balance += $amount;
    }

    // Public method to withdraw (controlled access)
    public function withdraw(float $amount): void {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Withdraw amount must be positive.");
        }
        if ($amount > $this->balance) {
            throw new InvalidArgumentException("Insufficient balance.");
        }
        $this->balance -= $amount;
    }

    // Public getter to read balance (no direct write access)
    public function getBalance(): float {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(500);   // controlled: balance increases
$account->withdraw(200);  // controlled: balance decreases, checks performed

echo $account->getBalance();  // 1300
// $account->balance = -500; // ERROR: cannot access private property directly
// Encapsulation is a strong pillar of OOP. 
// It is used for bundling data and methods into a class 
// and hiding internal details, so that data can only be accessed 
// and modified through well-defined public methods.