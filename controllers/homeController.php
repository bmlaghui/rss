<?php
require_once 'models/homeModel.php';
include 'views/homeView.php'; if(isset($_GET['action']))
{$action=$_GET['action'];}
else
{$action='home';}
switch($action)
{
	case 'home': home($bdd); break;
	case 'form_inscription': form_inscription(); break;
	case 'form_connexion' : form_connexion(); break;

	}
 ?>