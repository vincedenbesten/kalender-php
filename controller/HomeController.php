<?php
require(ROOT . "Model/kalenderModel.php");

function index(){
  render("home/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function delete()
{
	deletePerson($_GET);
	index();
}

function edit()
{

}

function addPerson(){
    render("Home/create");
}

function create()
{
  if ((isset($_POST['persoon'])) and (isset($_POST['maand'])) and (isset($_POST['dag'])) and (isset($_POST['jaar']))) {
    createquery($_POST);
    index();
   }
}
?>
