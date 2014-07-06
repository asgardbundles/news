<?php foreach($news as $one): ?>
<a href="<?php echo $one->url() ?>"><?php echo $one ?></a><br>
<?php endforeach; ?>