<?php

class BankAccount
{
    /**
     * The name of the person that owns this account
     * @var string
     */
    public $owner;

    /**
     * How much money this person has
     * @var float
     */
    protected $bankBalance;

    /**
     * Add some money to your account
     * @param float $amount How much you want to deposit
     * @return float
     */
    public function deposit($amount)
    {
        $this->bankBalance += $amount;

        return $this->bankBalance;
    }

    /**
     * Withdraw some money from your account
     * @param float $amount How much money you want to withdraw
     * @throws Exception
     * @return float
     */
    public function withdraw($amount)
    {
        if ($amount < $this->bankBalance) {

            $this->bankBalance -= $amount;
            return $this->bankBalance;

        } else {

            throw new Exception('Insufficient Funds');

        }

    }

}

try{
    $myAccount = new BankAccount();
    $myAccount->owner = 'Samir';
    $myAccount->deposit(100);
    $myAccount->withdraw(50);
} catch (Exception $e) {
    echo 'An error occurred: ' . $e->getMessage();
}


echo '<pre>';
print_r($myAccount);
die();