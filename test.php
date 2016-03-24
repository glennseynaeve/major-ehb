<?php


  require_once('dao/VoteDAO.php');

  $voteDAO = new VoteDAO();

  $id = $_GET["voteid"];
  $voteDAO->voteForId($id);

  $votes = $voteDAO->selectAll();
  foreach ($votes as $key => $vote) {
  	print "Oplossing " . $vote["id"]. ": ". $vote["votes"]."<br/>";
  }



?>
