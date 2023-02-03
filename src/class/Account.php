<?php

class Account {

    public $id;
    public $id_user;
    public $money;
    public $id_currencies;

    public static function createAccount($id_user, $money, $id_currencies) {
        $account = new Account();
        $account->id_user = $id_user;
        $account->money = $money;
        $account->id_currencies = $id_currencies;
        return $account;
    }

}