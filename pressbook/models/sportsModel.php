<?php 
function liste_sports($bdd)
{

	$sports=$bdd->query("Select * from sport");
	return $sports->fetchALL();
}
function get_sport($bdd,$id)
{
	$sport=$bdd->query("Select * from sport where id=".$id);
	return $sport->fetch();
}

function add_sport($bdd,$nomsport)
{
	echo "add sport-> Model";
	$reqAddsport=$bdd->query("insert into sport(nomsport) values('".$nomsport."')");
}
function update_sport($bdd,$nomsport,$idsport)
{
	$reqUpdatesport=$bdd->query("update sport SET nomsport='".$nomsport."' where idsport=".$idsport);
}
function delete_sport($bdd,$idsport)
{
	$reqDeletesport=$bdd->query("delete from sport where idsport=".$idsport);
}

?>