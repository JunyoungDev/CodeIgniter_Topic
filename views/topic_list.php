<div class="col-md-2">
	<ul class="nav nav-pills nav-stacked">
		<?php
			foreach ($topics as $entry) {
		?>
				<li><a href='/index.php/topic/get/<?=$entry->id?>'><?=$entry->title?></a></li>
		<?
			}
		?>
	</ul>
</div>