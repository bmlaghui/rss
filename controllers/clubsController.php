<?php
require_once 'models/clubsModel.php';
include 'views/clubsView.php'; if(isset($_GET['action']))
{$action=$_GET['action'];}
else
{$action='clubs';}
switch($action)
{
	case 'clubs': clubs($bdd); break;
	

	}
 ?>