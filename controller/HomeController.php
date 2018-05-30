<?php
require(ROOT . "Model/kalenderModel.php");

function index(){
  render("home/index", array('birthdays' => getAllBirthdays()));
}

function delete()
{
	deletePerson($_GET);
	header("Location: ".URL.index());
}

function edit()
{
  $data = $_GET;
  render("home/edit", ['data' => dataToEdit($data)]);
}

function editSave()
{
 $personData = array($_POST['persoon'],$_POST['dag'],$_POST['maannd'],$_POST['jaar'],$_GET['id']);
 Update($personData);
 header("Location: ".URL.index());
}

function addPerson(){
    render("Home/create");
}

function create()
{
  if ((isset($_POST['persoon'])) and (isset($_POST['maand'])) and (isset($_POST['dag'])) and (isset($_POST['jaar']))) {
    createquery($_POST);
    header("Location: ".URL.index());
   }
}
?>
