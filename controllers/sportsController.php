<?php
require_once 'models/sportsModel.php';
include 'views/sportsView.php'; if(isset($_GET['action']))
{$action=$_GET['action'];}
else
{$action='sports';}
switch($action)
{
	case 'sports': sports($bdd); break;
	case 'details_sport': $id=$_GET['id_sport']; details_sport($bdd,$id); break;

	}
 ?>