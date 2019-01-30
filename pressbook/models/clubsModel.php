<?php 
function liste_clubs($bdd)
{

	$clubs=$bdd->query("Select * from club");
	return $clubs->fetchALL();
}
function get_club($bdd,$idclub)
{
	$club=$bdd->query("Select * from club where idclub=".$idclub);
	return $club->fetch();
}

function add_club($bdd,$nomclub)
{
	echo "add club-> Model";
	$reqAddclub=$bdd->query("insert into club(nomclub) values('".$nomclub."')");
}
function update_club($bdd,$nomclub,$idclub)
{
	$reqUpdateclub=$bdd->query("update club SET nomclub='".$nomclub."' where idclub=".$idclub);
}
function delete_club($bdd,$idclub)
{
	$reqDeleteclub=$bdd->query("delete from club where idclub=".$idclub);
}

?>