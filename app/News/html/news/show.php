<h1><?php echo $news ?></h1>
<p>
	<?php if($news->image->exists()): ?>
	<img src="<?php echo $news->image ?>" style="float:left; max-height:100px; margin-right:10px">
	<?php endif ?>
	<?php echo $news->content ?>
</p>