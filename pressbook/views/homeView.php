<?php
function home()
{ 
?>
    <!--SECTION: HEADER AND BANNER-->
    <section>
        <div class="home">
            <div class="h_l">
                <!-- BRAND LOGO AND EVENT NAMES -->
                <img src="tmp/images/logo.png" alt="" />
                <h2>Derniers Infos</h2>
                <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat.</p>
                <ul>
                    <li><a href="soccer.html"><span>1</span>Soccer Training For Beginners</a>
                    </li>
                    <li><a href="cycling.html"><span>2</span>Cycling & Bike Racing</a>
                    </li>
                    <li><a href="swimming.html"><span>3</span>Swimming Competition, 2017</a>
                    </li>
                    <li><a href="athletics.html"><span>4</span>Athletics open competitions,USA</a>
                    </li>
                    <li><a href="boxing.html"><span>5</span>Boxing League - Register Now!</a>
                    </li>
                </ul>
                <a href="all-sports.html" class="aebtn">View All Events</a>
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
                    <h4>19</h4>
                    <span>Janvier 2019</span>
                </div>
                <!-- BLOG POST: POST NAME & DESCRIPTION -->
                <div class="blog-2 col-md-8">
                    <ul>
                        <li>
                            <a href="#">
                                <h4>WESTERN SYDNEY WANDERERS VS URAWA RED DIAMONDS</h4>
                            </a>
                        </li>
                        <li>
                            <p>In efficitur nisi et condimentum mattis. Duis et aliquet purus, quis congue elit. Cras volutpat dapibus molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec posuere mollis augue, a accumsan libero egestas sit amet.Vestibulum posuere erat tortor, porta tempus leo condimentum sed. </p>
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
                <h2><i class="fa fa-check" aria-hidden="true"></i> All sports <span>events 2017</span></h2>
                <p>Becoming a gym certified personal fitness trainer is your foundation for success. gym is the only personal trainer certification program that integrates</p>
            </div>
            <div class="hom-top-trends row">
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/2.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="football.html">
                                <h4>AMERICAN FLAG FOOTBALL: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/3.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="canoe-slalom.html">
                                <h4>CANOE SLALOM: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/4.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="yoga.html">
                                <h4>yoga and meditation: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/5.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="body-building.html">
                                <h4>bodybuilding: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hom-top-trends row">
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/6.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="tennis.html">
                                <h4>Tennis: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/7.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="athletics.html">
                                <h4>ATHLETICS: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/9.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="surfing.html">
                                <h4>surfings: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend pad-red-bot-0">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/10.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="cycling.html">
                                <h4>cycling: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hom-top-trends row">
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/8.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="surfing.html">
                                <h4>kite surfing: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/9-2.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="body-building.html">
                                <h4>weight lifting: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/11.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="cricket.html">
                                <h4>cricket: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/12.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="soccer.html">
                                <h4>Soccer: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hom-top-trends row">
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/24.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="yoga.html">
                                <h4>YOGA: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/14.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="football.html">
                                <h4>football: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/23.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="volleyball.html">
                                <h4>beach volleyball: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend pad-red-bot-0">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/19.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="surfing.html">
                                <h4>kite surfing: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hom-top-trends row">
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/16.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="body-building.html">
                                <h4>Bodybuilding: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/17.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="surfing.html">
                                <h4>surfings: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/26.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="boxing.html">
                                <h4>boxing: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/18.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="surfing.html">
                                <h4>Women surfings: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hom-top-trends row">
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/25.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="basketball.html">
                                <h4>Basketball: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/7.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="athletics.html">
                                <h4>ATHLETICS: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/8.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="basketball.html">
                                <h4>College Basketball: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
                <!--TOP TRENDINGS-->
                <div class="col-md-3">
                    <div class="hom-trend pad-red-bot-0">
                        <div class="hom-trend-img">
                            <img class="img-responsive" src="tmp/images/trends/10.jpg" alt="">
                        </div>
                        <div class="hom-trend-con">
                            <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                            <a href="cycling.html">
                                <h4>cycling: Davidson at Massachusetts</h4>
                            </a>
                            <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                        </div>
                    </div>
                </div>
				<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
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