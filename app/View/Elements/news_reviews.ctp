<div class="news_part">
	<div class="up_heading">
		<span>Новости</span>
	</div>
	<ul class="news_ul">
		<?php foreach($news as $item): ?>
		<li>
			<div class="news_li">
				<a href="/news/<?=$item['News']['id']?>">
					<div class="img"><img src="/img/news/thumbs/<?=$item['News']['img']?>"/></div>
				</a>
				<a class="heading"><?=$item['News']['title']?></a>
			</div>
		</li>
		<?php endforeach ?>
	</ul>
</div>
</div>
<div class="feed_back">
	<div class="cr">
		<div class="up_heading">
			<span>Отзывы</span>
		</div>
		<div class="feeds">
		<?php foreach($reviews as $item): ?>
			<div class="feed_part">
				<div class="img">
					<img src="/img/review/thumbs/<?=$item['Review']['img']?>"/>
				</div>
				<div class="feed_text">
					<span><?=$item['Review']['title']?></span>
					<?=$item['Review']['body']?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>	
	</div>
</div>