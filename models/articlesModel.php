<?php 
function liste_articles($bdd)
{

	$articles=$bdd->query("Select * from article");
	return $articles->fetchALL();
}
function last_articles($bdd)
{

	$articles=$bdd->query("Select distinct * from article order by pubDate desc limit 5");
	return $articles->fetchALL();
}
function last_article($bdd)
{

	$articles=$bdd->query("Select * from article order by pubDate desc limit 1");
	return $articles->fetch();
}
function get_article($bdd,$id)
{
	$article=$bdd->query("Select * from article where id=".$id);
	return $article->fetch();
}
function NbArticles($bdd)
{
	$article=$bdd->query("Select count(*) as nb  from article");
	return $article->fetch();
}
function add_article($bdd,$nomarticle)
{
	echo "add article-> Model";
	$reqAddarticle=$bdd->query("insert into article(nomarticle) values('".$nomarticle."')");
}
function update_article($bdd,$nomarticle,$idarticle)
{
	$reqUpdatearticle=$bdd->query("update article SET nomarticle='".$nomarticle."' where idarticle=".$idarticle);
}
function delete_article($bdd,$idarticle)
{
	$reqDeletearticle=$bdd->query("delete from article where idarticle=".$idarticle);
}
function parsearticle($bdd,$idarticle)
{
	$reqarticle=$bdd->query("select * from article where id=".$idarticle);
	$article=$reqarticle->fetch();
	$urlxml=$article['url'];
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

for ($i=0; $i < $itemCount; $i++){
    $title = $xmlObject->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
    $link = $xmlObject->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
    $description = $xmlObject->item($i)->getElementsByTagName('description')->item(0)->nodeValue;
    $guid = $xmlObject->item($i)->getElementsByTagName('guid')->item(0)->childNodes->item(0)->nodeValue;
	$d = $xmlObject->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;
	date_default_timezone_set('Europe/Paris');
	$pubDate=date("Y-m-d h:m:s", strtotime($d) );
	//$image = $xmlObject->item($i)->getElementsByTagName("media")->item(0); 
	//$creator=$xmlObject->item($i)->getElementsByTagName('author')->item(0)->childNodes->item(0)->nodeValue;
	$image = $xmlObject->item($i)->getElementsByTagName('url');
$article = array("title"=>$title,"link"=>$link,"description"=>$description,"guid"=>$guid,"pubDate"=>$pubDate,"image"=>$image);
return $article;
	}
}
?>

