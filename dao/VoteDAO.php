<?php

require_once( __DIR__ . '/DAO.php');

class VoteDAO extends DAO {

  // Properties

  // Constructor

  // Methods
  public function selectAll() {

		$sql = "SELECT * FROM `votes`";

		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	public function selectById($id) {

		$sql = "SELECT * FROM `votes` WHERE `id` = :id";

		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);

	}



}

 ?>
