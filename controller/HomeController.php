<?php
require(ROOT . "Model/kalenderModel.php");

function index(){
  $data= verjaardagslijst();
  render("home/index");
}

?>
