<form action="/index.php/topic/add" method='post'  class="col-md-10">

	<?php echo validation_errors(); ?>
	 <input type="text" name='title' placeholder="제목"  class="col-xs-12 col-md-12">
	 <textarea name='description' placeholder="본문"  class="col-xs-12 col-md-12" rows="15"></textarea>
	 <input type="submit" class="btn btn-default">
</form>