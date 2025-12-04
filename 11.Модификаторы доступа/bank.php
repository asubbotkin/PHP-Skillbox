<?php

class Bank
{
    private $accounts = [];
    private $corrAccount;
    private $bankCode;

    public function __construct($corrAccount, $bankCode)
    {
        $this->corrAccount = $corrAccount;
        $this->bankCode = $bankCode;
    }
    public function createAccount($account)
    {
        $this->accounts[] = $account;
    }

    public function showaccountsList()
    {
        print_r($this->accounts);
    }
}

$sberBank = new Bank('000-0005647', 'SB-999');
$alfaBank = new Bank('111-0005123', 'AL-888');

$sberBank->createAccount('111-9999999');
$sberBank->createAccount('111-8888888');
$sberBank->createAccount('111-7777777');
$sberBank->showaccountsList();

$alfaBank->createAccount('222-0000000');
$alfaBank->createAccount('222-1111111');
$alfaBank->createAccount('222-2222222');
$alfaBank->showaccountsList();
