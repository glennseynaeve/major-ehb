<?php


  require_once('dao/VoteDAO.php');

  $voteDAO = new VoteDAO();

  $votes = $voteDAO->selectAll();
  foreach ($votes as $key => $vote) {
  	print "Oplossing " . $vote["id"]. ": ". $vote["votes"]."<br/>";
  }



?>
