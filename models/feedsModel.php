<?php 
function liste_feeds($bdd)
{

	$feeds=$bdd->query("Select * from flux");
	return $feeds->fetchALL();
}
function last_feeds($bdd)
{

	$feeds=$bdd->query("Select * from flux limit 5");
	return $feeds->fetchALL();
}
function get_feed($bdd,$id)
{
	$feed=$bdd->query("Select * from feed where id=".$id);
	return $feed->fetch();
}

function add_feed($bdd,$nomfeed)
{
	echo "add feed-> Model";
	$reqAddfeed=$bdd->query("insert into feed(nomfeed) values('".$nomfeed."')");
}
function update_feed($bdd,$nomfeed,$idfeed)
{
	$reqUpdatefeed=$bdd->query("update feed SET nomfeed='".$nomfeed."' where idfeed=".$idfeed);
}
function delete_feed($bdd,$idfeed)
{
	$reqDeletefeed=$bdd->query("delete from feed where idfeed=".$idfeed);
}
function parseFeed($bdd,$idFlux)
{
	//requettes préparés
	$reqFlux=$bdd->query("select * from flux where id=".$idFlux);
	$Flux=$reqFlux->fetch();
	$urlxml=$Flux['url'];
$xmlDoc = new DOMDocument();

$opts = array(
    'http' => array(
        'user_agent' => 'PHP libxml agent',
    )
);
$context = stream_context_create($opts);
libxml_set_streams_context($context);
$xmlDoc->load($urlxml);




$xmlObject = $xmlDoc->getElementsByTagName('item');
$itemCount = $xmlObject->length;


return $xmlObject;
	
}
function export2db ($bdd,$detailsFeed,$idFlux)
{
	$itemCount = $detailsFeed->length;

			for ($i=0; $i < $itemCount; $i++){
    $title = $detailsFeed->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
	$title= str_replace("'", "\'", $title);
    $link = $detailsFeed->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
    $description = $detailsFeed->item($i)->getElementsByTagName('description')->item(0)->nodeValue;
	$description= str_replace("'", "\'", $description);
    $guid = $detailsFeed->item($i)->getElementsByTagName('guid')->item(0)->childNodes->item(0)->nodeValue;
	$d = $detailsFeed->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;
	date_default_timezone_set('Europe/Paris');
	$pubDate=date("Y-m-d h:m:s", strtotime($d) );
	//$image = $detailsFeed->item($i)->getElementsByTagName("media")->item(0); 
	//$creator=$detailsFeed->item($i)->getElementsByTagName('author')->item(0)->childNodes->item(0)->nodeValue;
	$image = $detailsFeed->item($i)->getElementsByTagName('url');
		$articles=$bdd->query("insert into article(flux_id,titre,description,guid,url,pubDate) values (".$idFlux.",'".$title."','".$description."','".$guid."','".$link."','".$pubDate."')");
		return ($articles);

}
}
?>

