<?php
require_once 'models/articlesModel.php';
include 'views/articlesView.php'; if(isset($_GET['action']))
{$action=$_GET['action'];}
else
{$action='articles';}
switch($action)
{
	case 'articles': articles($bdd); break;
	case 'details_article': $id=$_GET['id_article']; details_article($bdd,$id); break;
	case 'liste_articles' : ListeArticles($bdd); break ; 
	}
 ?>