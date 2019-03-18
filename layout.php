<!DOCTYPE html>
<html lang="en">
<head>
    <title>.:: PressBook ::.</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="tmp/images/fav.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CMontserrat:300,500%7COswald:400,500" rel="stylesheet">

    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="tmp/css/font-awesome.min.css">

    <!-- ALL CSS FILES -->
    <link rel="stylesheet" href="tmp/css/style.css">
    <link rel="stylesheet" href="tmp/css/bootstrap.css">
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 

    <!-- MOB.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link rel="stylesheet" href="tmp/css/mob.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="tmp/js/html5shiv.js"></script>
	<script src="tmp/js/respond.min.js"></script>
	<![endif]-->
	<script src='https://www.google.com/recaptcha/api.js?render=6LeGoYoUAAAAABkWTPvn598pB2V00TCJpAZh22me'></script>

</head>

<body>
    <!-- Preloader -->
    

    <!--SECTION: LEFT MENU-->
    <section>
        <!-- LEFT SIDE NAVIGATION MENU -->
        <div class="menu">
            <ul>
                <!-- MAIN MENU -->
                <li>
                    <a href="index.php" class="menu-lef-act"><img src="tmp/images/icon/s1.png" alt=""> Acceuil</a>
                </li>
                <li>
                    <a href="index.php?module=sports"><img src="tmp/images/icon/f4.png" alt=""> Sports</a>
                </li>
                <li>
                    <a href="index.php?module=clubs"><img src="tmp/images/icon/f7.png" alt=""> Clubs</a>
                </li>
                <?php
				require_once 'models/sportsModel.php';
				$Sports=liste_sports($bdd);
				foreach ($Sports as $sport)
				{
				?>
                <li>
                    <a href="index.php?module=sports&action=details_sport&id_sport=<?=$sport['id']?>"><img src="tmp/images/icon/<?= $sport['icon']?>.png" alt=""> <?= $sport['nom']?></a>
                </li>
                <?php }?>
				<li>
                    <a href="index.php?module=sport&action=details_sport&id_sport=other"><img src="tmp/images/icon/g3.png" alt=""> Autres</a>
                </li>
                
                <li>
                    <a href="index.php?module=about"><img src="tmp/images/icon/about.png" alt=""> A propos</a>
                </li>
                <li>
                    <a href="index.php?module=contact"><img src="tmp/images/icon/contact.png" alt=""> Contact</a>
                </li>
            </ul>
        </div>

        <!-- RIGHT SIDE NAVIGATION MENU -->
        <!-- MOBILE MENU(This mobile menu show on 0px to 767px windows only) -->
        <div class="mob-menu">
            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        <div class="mob-close">
            <span><i class="fa fa-times" aria-hidden="true"></i></span>
        </div>
    </section>

    <!-- TOP BAR -PHONE EMAIL AND TOP MENU -->
    <section class="i-head-top">
        <div class="i-head row">
            <!-- TOP CONTACT INFO -->
            <div class="i-head-left i-head-com col-md-6">
                <ul>
                    <li><a href="#"></a>
                    </li>
                    <li><a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- TOP FIXED MENU -->
            <div class="i-head-right i-head-com col-md-6 col-sm-12 col-xs-12">
                <ul>
                    <li class="top-scal"><a href="index.php?module=home&action=form_connexion"><i class="fa fa-user" aria-hidden="true"></i> Connexion</a>
                    </li>
                    <li class="top-scal-1"><a href="index.php?module=home&action=form_inscription"><i class="fa fa-registered" aria-hidden="true"></i> Inscription</a>
                    </li>
                    <li><a href="#" class="tr-menu"><i class="fa fa-chevron-down" aria-hidden="true"></i> Découvrir</a>
                        <div class="cat-menu">

                            <div class="col-md-3 col-sm-6 cm1 mob-hid">
                                <h4>Popular Sports Category</h4>
                                <ul>
                                    <li><a href="football.html"><i class="fa fa-angle-right" aria-hidden="true"></i> american football</a>
                                    </li>
                                    <li><a href="soccer.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Soccer davidson</a>
                                    </li>
                                    <li><a href="cricket.html"><i class="fa fa-angle-right" aria-hidden="true"></i> cricket league</a>
                                    </li>
                                    <li><a href="tennis.html"><i class="fa fa-angle-right" aria-hidden="true"></i> tennis davidson</a>
                                    </li>
                                    <li><a href="volleyball.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Volleyball Champions</a>
                                    </li>
                                    <li><a href="training.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Fitness Training</a>
                                    </li>
                                    <li><a href="all-sports.html"><i class="fa fa-angle-right" aria-hidden="true"></i> View All Sports</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 cm1 mob-hid">
                                <h4>current events</h4>
                                <ul>
                                    <li><a href="soccer.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Soccer Coaching Under 18</a>
                                    </li>
                                    <li><a href="yoga.html"><i class="fa fa-angle-right" aria-hidden="true"></i> yoga & fitness training classes</a>
                                    </li>
                                    <li><a href="body-building.html"><i class="fa fa-angle-right" aria-hidden="true"></i> bodybuilding 2017</a>
                                    </li>
                                    <li><a href="surfing.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Hawaii Surfing Championship</a>
                                    </li>
                                    <li><a href="golf.html"><i class="fa fa-angle-right" aria-hidden="true"></i> european golf 2017 </a>
                                    </li>
                                    <li><a href="cricket.html"><i class="fa fa-angle-right" aria-hidden="true"></i> cricket champions league</a>
                                    </li>
                                    <li><a href="events.html"><i class="fa fa-angle-right" aria-hidden="true"></i> View All Events</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-6">
                                <h4>2017 upcoming league matches</h4>
                                <div class="foot-pop top-me-ev">
                                    <ul>
                                        <li>
                                            <a href="football.html">
                                                <img src="tmp/images/trends/2.jpg" alt="">
                                                <div class="foot-pop-eve top-me-text">
                                                    <span>Soccer: AUGUST 23RD, 2017</span>
                                                    <h4>Football:THIS SATURDAY STARTS THE INTENSIVE TRAINING FOR THE FINAL,NEW YORK</h4>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="body-building.html">
                                                <img src="tmp/images/trends/5.jpg" alt="">
                                                <div class="foot-pop-eve top-me-text">
                                                    <span>BoduBuilding: AUGUST 23RD, 2017</span>
                                                    <h4>BoduBuilding:JAKE DRIBBLER ANNOUNCED THAT HE IS RETIRING NEXT MNONTH</h4>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tennis.html">
                                                <img src="tmp/images/trends/6.jpg" alt="">
                                                <div class="foot-pop-eve top-me-text">
                                                    <span>BASKETBALL: AUGUST 23RD, 2017</span>
                                                    <h4>BASKETBALL:THE ALCHEMISTS NEWS COACH IS BRINGIN A NEW SHOOTING GUARD</h4>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="cbb2-home-nav-bot mob-hid">
                                <ul>
                                    <li>One of the  Best Sports website template forever <span>Call us on: +01 3214 6581</span>
                                    </li>
                                    <li><a href="javascript:void(0);" class="cbb2-ani-btn-join"><i class="fa fa-user" aria-hidden="true"></i> Account</a>
                                    </li>
                                    <li>
                                        <a href="join-our-club.html" class="cbb2-ani-btn"><i class="fa fa-life-buoy" aria-hidden="true"></i> Join Our Club</a>
                                    </li>
                                    <li><a href="join-club.html" class="cbb2-ani-btn"><i class="fa fa-dollar" aria-hidden="true"></i> Make Donation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </section>
	
	
	<?= $content ; ?>
	
  <!--SECTION: FOOTER-->
    <section>
        <div class="ffoot">
            <div class="lp">
                <!--SECTION: FOOTER-->
                <div class="row">
                    <div class="col-md-12 foot1">
                        <a href="#"><img src="tmp/images/logo.png" alt="">
                        </a>
                        <ul>
                            <li><span>
							<?php
							require_once 'models/articlesModel.php';
							$nb= NbArticles($bdd);
							echo $nb['nb'];
							?>
							</span> Articles</li>
                            <li><span>
							<?php
							require_once 'models/sportsModel.php';
							$nb= NbSports($bdd);
							echo $nb['nb'];
							?></span> Sports </li>
                        </ul>
                    </div>
                </div>
                <!--SECTION: FOOTER-->
                <div class="row">
                    <div class="col-md-12 foot4">
                        <h5>Nos Flux</h5>
                        <ul>
						<?php
						$req=$bdd->query("select * from flux");
						foreach($req->fetchALL() as $flux)
						{ 
						?>
                            <li>
                                <a href="#"><img src="tmp/images/flux/<?= $flux['image']?>" alt="" width="80px" height="40px">
                                </a>
                            </li>
						<?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <section>
        <!-- FOOTER: COPY RIGHTS -->
        <div class="fcopy">
            <div class="lp copy-ri row">
                <div class="col-md-6 col-sm-12 col-xs-12">Copyright © 2019 Sport PressBook. Tous droits réservés .</div>
                <div class="col-md-6 foot-privacy">
                    <ul>
                        <li><a href="http://www.mlaghuibrahim.com">MLAGHUI Brahim</a>
                        </li>
                        <li><a href="#">BORGI Ihcen</a>
                        </li>
                        <li><a href="#">SLAM 2-i</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--== Bootstrap & Latest JS ==-->
    <script type="text/javascript" src="tmp/js/jquery.min.js"></script>
    <script type="text/javascript" src="tmp/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script src="tmp/js/custom.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-90614514-1', 'auto');
		ga('send', 'pageview');
	</script>	
</body>
</html>