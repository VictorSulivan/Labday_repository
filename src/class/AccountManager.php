<?php

class AccountManager {
	private $db;

	function __construct($db) {
		$this->db = $db;
	}

	public function insertAccount(Account $account) {
		$stmh = $this->db->prepare('INSERT INTO bankaccounts(id_user, money, id_currencies) VALUES(?, ?, ?)');
		$stmh->execute([
			$account->id_user, $account->money, $account->id_currencies
		]);
		return $this->db->lastInsertId();
	}

}
