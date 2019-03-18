<?php

function articles($bdd)
{
	?>
	<section>
        <div class="lp">
            <div>

                <!-- TRAINING BENEFITS -->
                <div class="events ev-po-1 ev-po-com">
                    <div class="ev-po-title">
                        <h3>Liste des articles</h3>
                        <p>Découvrez les nouvelles infos </p>
                    </div>
                    <table class="myTable">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Article</th>
                                <th>Sports</th>
                                <th>Clubs</th>
                                <th>Opérations</th>
                            </tr>
							<?php
							$x=1;
							$articles= liste_articles($bdd);
							foreach($articles as $club)
							{
								?>
                            <tr>
                                <td><?= $x; ?></td>
								<td><?= $x; ?></td>
								<td>
								<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  [Attribuer]
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
								</td>
								<td><?= $x; ?></td>
								<td><?= $x; ?></td>
                                
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
}?>