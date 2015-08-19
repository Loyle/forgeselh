<div class="container">
	<?php var_dump($news); ?>
	<?php foreach($news as $n): ?>
		<div class="news">
			<div class="title">
				<h3><?php echo htmlspecialchars($n['title']); ?></h3>
			</div>
			<div class="content">
				<p><?php echo htmlspecialchars($n['content']); ?></p>
			</div>
			<div class="date">
			<h6>Par <?php echo $n['username']; ?> le <?php echo date("d-m-Y à H:i:s", intval($n['date'] + 7200)); ?></h6>
			</div>
		</div>
	<?php endforeach; ?>
</div>