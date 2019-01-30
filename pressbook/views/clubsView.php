<?php
function clubs($bdd)
{ 
?>
   <section>
        <div class="lp">
            <div>

                <!-- TRAINING BENEFITS -->
                <div class="events ev-po-1 ev-po-com">
                    <div class="ev-po-title">
                        <h3>Liste des clubs</h3>
                        <p>Découvrez les nouvelles infos </p>
                    </div>
                    <table class="myTable">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Club</th>
                                <th class="e_h1">Nb. Articles</th>
                                <th>Détails</th>
                                <th>Opérations</th>
                            </tr>
							<?php
							$x=1;
							$req=$bdd->query("select * from club");
							foreach($req->fetchALL() as $club)
							{
								?>
                            <tr>
                                <td><?= $x; ?></td>
                                <td><img src="tmp/images/clubs/<?= $club['image']?>" alt="">
                                    <div class="h-tm-ra1">
                                        <h4><?=$club['nom']?></h4>
                                    </div>
                                </td>
                                <td class="e_h1">25</td>
                                <td><a href="index.php?module=clubs&action=details_club&id_club=<?= $club['id']?>" class="link-btn"><i class="fa fa-eye"></i> Découvrer les articles</a>
                                </td>
                                <td><a href="index.php?module=clubs&action=abonner" class="link-btn reg-btn">S'abonner</a>
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
function details_club($bdd,$id_club)
{
?>
<?php
}?>