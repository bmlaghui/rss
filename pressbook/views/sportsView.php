<?php
function sports($bdd)
{ 
?>
   <section>
        <div class="lp">
            <div>

                <!-- TRAINING BENEFITS -->
                <div class="events ev-po-1 ev-po-com">
                    <div class="ev-po-title">
                        <h3>Liste des sports</h3>
                        <p>Découvrez les nouvelles infos </p>
                    </div>
                    <table class="myTable">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Sport</th>
                                <th class="e_h1">Nb. Articles</th>
                                <th>Détails</th>
                                <th>Opérations</th>
                            </tr>
							<?php
							$x=1;
							$req=$bdd->query("select * from sport");
							foreach($req->fetchALL() as $sport)
							{
								?>
                            <tr>
                                <td><?= $x; ?></td>
                                <td><img src="tmp/images/sports/<?= $sport['image']?>" alt="">
                                    <div class="h-tm-ra1">
                                        <h4><?=$sport['nom']?></h4>
                                    </div>
                                </td>
                                <td class="e_h1">25</td>
                                <td><a href="index.php?module=sports&action=details_sport&id_sport=<?= $sport['id']?>" class="link-btn"><i class="fa fa-eye"></i> Découvrer les articles</a>
                                </td>
                                <td><a href="index.php?module=sports&action=abonner" class="link-btn reg-btn">S'abonner</a>
                                </td>
                            </tr>
                            <?php 
							$x++;
							} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
	<?php
}
function details_sport($bdd,$id)
{
	$sport=get_sport($bdd,$id);
?>
<section>
        <div class="training" style="background-image:url('tmp/images/sports/<?= $sport['image']?>')">
            <div class="tr-pro">
                <div class="inn-title">
                    <h2><i class="fa fa-check" aria-hidden="true"></i> <?= $sport['nom'] ?></h2>
                    <p>Becoming a gym certified personal fitness trainer is your foundation for success. gym is the only personal trainer certification program that integrates</p>
                    <!-- SOCIAL SHARE -->
                    <div class="share-btn">
                        <ul>
                            <li><div class="fb-share-button" data-href="http://localhost/pressbook/index.php?module=sports&action=details_sport&id_sport=<? $sport['id']?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- TRAINING BENEFITS -->
                <div class="inn-all-com">
                    <h4>match Start Date</h4>
                    <p>Becoming a gym certified personal fitness trainer is your foundation for success. gym is the only personal trainer certification program that integrates a complete approach to fitness, wellness and business skills.</p>
                    <div class="inn-ev-date">
                        <div class="inn-ev-date-left">
                            <h4>14 th</h4>
                            <span>augest 2017</span>
                        </div>
                        <div class="inn-ev-date-rig">
                            <ul>
                                <li>56 <span>days</span>
                                </li>
                                <li>23 <span>hours</span>
                                </li>
                                <li>28 <span>min</span>
                                </li>
                                <li>19 <span>sec</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TRAINING BENEFITS -->
                <div class="inn-all-com inn-all-list tp-1">
                    <h4>League Details</h4>
                    <p>Becoming a gym certified personal fitness trainer is your foundation for success. gym is the only personal trainer certification program that integrates a complete approach to fitness, wellness and business skills.</p>
                    <ul>
                        <li>League Location: Illinois, USA</li>
                        <li>Guest lectures by International faculty</li>
                        <li>Internship with the Global fitness leader</li>
                        <li>Placement opportunities with Gold’s Gym</li>
                        <li>Earn handsome salaries on completion of course</li>
                        <li>Fitness Assessment room</li>
                    </ul>
                    <!-- TICKET BOOKING -->
                    <div class="inn-tickers">
                        <a href="booking.html" class="inn-reg-com inn-reg-book"><i class="fa fa-ticket" aria-hidden="true"></i> Ticket Booking</a>
                        <a href="team-register.html" class="inn-reg-com inn-reg-link"><i class="fa fa-registered" aria-hidden="true"></i> Register Now</a>
                    </div>
                </div>
                <!-- TRAINING BENEFITS -->
                <div class="inn-all-com inn-all-list inn-pad-top-5 tp-1">
                    <h4>Team Rankings</h4>
                    <p>Becoming a gym certified personal fitness trainer is your foundation for success. gym is the only personal trainer certification program that integrates a complete approach to fitness, wellness and business skills.</p>
                    <a href="#" class="inn-te-ra-link">Click to view full team ranking</a>
                </div>
            </div>
        </div>
    </section>
<?php
}?>