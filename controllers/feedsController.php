<?php
require_once 'models/feedsModel.php';
//include 'views/feedsView.php';

switch($action)
{
	case 'feeds': feeds($bdd); break;
	case 'parse_feed' : $id=$_GET['id_feed']; details_feed($bdd,$id); break;
	case 'details_feed': $id=$_GET['id_feed']; details_feed($bdd,$id); break;

	}
 ?>