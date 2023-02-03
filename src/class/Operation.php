<?php

class Operation {

    public $id;
    public $id_bank_account;
    public $receiver_account;
    public $value;
    public $id_currencies;
    public $status;

    public static function createBankOp($id_bank_account, $value, $status) {
        $operation = new Operation();
        $operation->id_bank_account = $id_bank_account;
        $operation->value = $value;
        //$operation->admin_id = $admin_id;
        $operation->status = $status;
        return $operation;
    }

    public static function createUserOp($sender_account, $receiver_account, $value, $id_currencies) {
        $operation = new Operation();
        $operation->id_bank_account = $sender_account;
        $operation->receiver_account = $receiver_account;
        $operation->value = $value;
        $operation->id_currencies = $id_currencies;
        return $operation;
    }

    public function getOperationDate() {
        $date = new DateTime($this->created_at);
        return $date->format('d/m/Y'. 'à' .'H:i');
    }

}