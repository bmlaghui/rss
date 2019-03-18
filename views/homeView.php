<?php
function home($bdd)
{ 
			include 'models/feedsModel.php';
			include 'models/articlesModel.php';

?>
    <!--SECTION: HEADER AND BANNER-->
    <section>
        <div class="home">
            <div class="h_l">
                <!-- BRAND LOGO AND EVENT NAMES -->
                <img src="tmp/images/logo.png" alt="" />
                <h2>Derniers Infos</h2>
                <p>Du :  <?php
// setlocale(LC_TIME, 'fr_FR.UTF8');
// setlocale(LC_TIME, 'fr_FR');
// setlocale(LC_TIME, 'fr');
setlocale(LC_TIME, 'fra_fra');
 

echo strftime('%A %d %B %Y, %H:%M'); // jeudi 11 octobre 2012, 16:03

?></p>
                <ul>
				<?php
					$lastfeeds=last_articles($bdd);
					$x=1;
					foreach($lastfeeds as $lastfeed)
					{
				?>
                    <li><a href="<?=$lastfeed['url'];?>"><span><?php echo $x; $x++; ?></span><?= substr($lastfeed['titre'], 0, 20);  ?></a>
                    </li>
                    <?php } ?>
                </ul>
                <a href="all-sports.html" class="aebtn">Voir tous les articles</a>
            </div>
            <div class="h_r">
                <!-- SLIDER -->
                <div class="slideshow-container">
                    <!-- FIRST SLIDER -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 8</div>
                        <a href="#"><img src="tmp/images/banner/b3.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <!-- SECOND SLIDER -->
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 8</div>
                        <a href="#"><img src="tmp/images/banner/b2.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <!-- THIRD SLIDER -->
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 8</div>
                        <a href="#"><img src="tmp/images/banner/b1.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <!-- FOURTH SLIDER -->
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 8</div>
                        <a href="#"><img src="tmp/images/banner/b4.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <!-- FOURTH SLIDER -->
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 8</div>
                        <a href="#"><img src="tmp/images/banner/b5.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">6 / 8</div>
                        <a href="#"><img src="tmp/images/banner/b6.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">7 / 8</div>
                        <a href="#"><img src="tmp/images/banner/fitness2.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">8 / 8</div>
                        <a href="#"><img src="tmp/images/banner/surfing1.jpg" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <!-- YOU CAN ADD MULTIPLE SLIDERS NOW-->
                    <!-- SLIDER NAVIGATION -->
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SEARCH BOX -->
    <section>
        <div class="hom-search lp">
            <div class="row">
                <div class="hom-search-inn">
                    <form>
                        <ul>
                            <li>
                                <input type="text" placeholder="Cherchez une équipe !" class="auto">
                            </li>
                            <li>
                                <input type="submit" value="CHERCHER">
                            </li>
                        </ul>
                    </form>
					<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	//autocomplete
	$(".auto").autocomplete({
		source: "views/search.php",
		minLength: 1
	});				

});
</script>
                </div>
            </div>
        </div>
    </section>
	
	<section>
        <div class="blog row">
            <div class="lp">
                <!-- BLOG POST: POST DATE -->
                <div class="blog-1 col-md-2">
                    <span>Dernier article</span>
					<?php
					$lastfeed=last_article($bdd);?>
					<?php
					$date = new DateTime($lastfeed['pubDate']);
$date= $date->format('d-m-Y');
					?>
                    <h4><?= substr($date,0,2);?></h4>
                    <span><?= substr($date,3,8);?></span>
                </div>
                <!-- BLOG POST: POST NAME & DESCRIPTION -->
                <div class="blog-2 col-md-8">
                    <ul>
                        <li>
                            <a href="#">
                                <h4><?= $lastfeed['titre'];?></h4>
                            </a>
                        </li>
                        <li>
                            <p><?= $lastfeed['description'];?></p>
                        </li>
                    </ul>
                </div>
                <!-- BLOG POST: POST COMMENTS,TAG AND SOCIAL MEDIA -->
                <div class="blog-3 col-md-2">
                    <ul>
                        <li><i class="fa fa-comment-o" aria-hidden="true"></i> Comments</li>
                        <li><i class="fa fa-tag" aria-hidden="true"></i> Tag</li>
                        <li><i class="fa fa-share-alt" aria-hidden="true"></i> Share This</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<section>
        <div class="lp spe-bot-red-3">
            <div class="inn-title">
                <h2><i class="fa fa-check" aria-hidden="true"></i> Toutes les  <span>nouveutés </span></h2>
                <p>Découvrez toutes les actualités sportives</p>
            </div>
            <div class="hom-top-trends row">
			<?php
				$deletequery =$bdd->query("truncate table article ");

			$Feeds= liste_feeds($bdd);
			foreach($Feeds as $Feed)
			{ 
		    
			$detailsFeed=parseFeed($bdd,$Feed['id']);
			$itemCount = $detailsFeed->length;

			for ($i=0; $i < $itemCount; $i++){
    $title = $detailsFeed->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
    $link = $detailsFeed->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
    $description = $detailsFeed->item($i)->getElementsByTagName('description')->item(0)->nodeValue;
    $guid = $detailsFeed->item($i)->getElementsByTagName('guid')->item(0)->childNodes->item(0)->nodeValue;
	$d = $detailsFeed->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;
	date_default_timezone_set('Europe/Paris');
	$pubDate=date("Y-m-d h:m:s", strtotime($d) );
	$image = $detailsFeed->item($i)->getElementsByTagName("media")->item(0); 
	//$creator=$detailsFeed->item($i)->getElementsByTagName('author')->item(0)->childNodes->item(0)->nodeValue;
	$image = $detailsFeed->item($i)->getElementsByTagName('url');
	$newarticles=$bdd->query("insert into article(flux_id,titre,description,guid,url,pubDate) values (".$Feed['id'].",'".$title."','".substr($description,40)." ...','".$guid."','".$link."','".$pubDate."')");
}
			}
$articles = liste_articles($bdd);
foreach ($articles as $article)
{
			?>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/2.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> <?= $article['pubDate'] ?></span>
                            <a href="<?= $article['url'] ?>">	
                                <h4><?php echo $article['titre']; ?></h4>
                            </a>
                            <p><?= $article['description']?></p>
                        </div>
                    </div>
                </div>
			<?php } ?>
               </div>
           </div>
    </section>
	<?php
}
function form_connexion ()
{
?>
<section>
        <div class="booking-bg-s tic-book-bg lp">
            <div class="booking-bg-1">
                <div class="bg-book">
                    <div class="spe-title-1 spe-title-wid">
                        <h2>Connexion <span>ESPACE MEMBRE!</span> </h2>
                        <div class="hom-tit">
                            <div class="hom-tit-1"></div>
                            <div class="hom-tit-2"></div>
                            <div class="hom-tit-3"></div>
                        </div>
                        <p>Bonjour, Nous sommes heureux de vous revoir</p>
                    </div>
                    <div class="book-form">
                        <form id="b_form" name="b_form" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Login</label>
                                <div class="col-sm-10">
                                    <input type="text" id="bname" name="bname" class="form-control" placeholder="Votre login = Votre adresse mail" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Mot de passe</label>
                                <div class="col-sm-10">
                                    <input type="password" id="bmail" name="bmail" class="form-control" placeholder="Type your email" required="">
                                </div>
                            </div>
							<div class="form_group">
							 <div class="col-sm-10">
							<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="g-recaptcha" data-sitekey="6Lcul1AUAAAAANSbcg9ttxb6oJL7femmYMi1hzm7"></div>
</div>
<?php if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6Lcul1AUAAAAAMme2xKcun42M7rkNC5ORCyLsFCS';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
        }
   } ?>
							</div>
							<div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Se connecter" id="send_button">
                                </div>
                            </div>
							

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
function form_inscription()
{
	?>
	<section>
        <div class="booking-bg-s tic-book-bg lp">
            <div class="booking-bg-1">
                <div class="bg-book">
                    <div class="spe-title-1 spe-title-wid">
                        <h2>Inscritions ouvertes <span>ALLEZ VITE!</span> </h2>
                        <div class="hom-tit">
                            <div class="hom-tit-1"></div>
                            <div class="hom-tit-2"></div>
                            <div class="hom-tit-3"></div>
                        </div>
                    </div>
                    <div class="book-form">
                        <form id="b_form" name="b_form" class="form-horizontal" >
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nom & Prénom</label>
                                <div class="col-sm-10">
                                    <input type="text" id="bname" name="bname" class="form-control" placeholder="Exemple ESCOBAR Pablo" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">E-mail</label>
                                <div class="col-sm-10">
                                    <input type="email" id="bmail" name="bmail" class="form-control" placeholder="adresse@domaine.com" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Téléphone</label>
                                <div class="col-sm-10">
                                    <input type="number" id="bphone" name="bphone" class="form-control" placeholder="0600000000" required="">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2">Mot de passe</label>
                                <div class="col-sm-10">
                                    <input type="password" id="bphone" name="bphone" class="form-control" placeholder="0600000000" required="">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-2">Retappez mot de passe</label>
                                <div class="col-sm-10">
                                    <input type="password" id="bphone" name="bphone" class="form-control" placeholder="0600000000" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Date de naissance</label>
                                <div class="col-sm-10">
                                    <input type="date" id="bdate" name="bdate" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Cité</label>
                                <div class="col-sm-10">
                                    <input type="text" id="bcity" name="bcity" class="form-control" placeholder="Paris 9" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Addresse</label>
                                <div class="col-sm-10">
                                    <textarea id="baddress" name="baddress" class="form-control" placeholder="Addresse Complète"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="S'inscrire" id="send_button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
}
?>