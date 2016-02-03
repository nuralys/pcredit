	<section class="main_text">
				<h3>Контакты</h3>
				<div class="ov">
					<ul class="contact_ul">
						<li>г.Алматы, пр. Желтоксан,138уг. Кабанбай батыра,</li>
						<li>Телефон: +7 777 831 2838</li>
						<li>Факс: +7 727 261 5837</li>
						<li>E-mail: pcredit@mail.ru</li>
						<li>г.Астана, пр.Туран 19/1, офис 302, ТД "Эдем" </li>
						<li>Телефон: +7 701 967 9738</li>
					</ul>
					<div class="map">
						<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=iHEH8262M5n8Cfw4BVBMHx0y4jUCzOxm&width=100%&height=400&lang=ru_RU&sourceType=constructor">
						</script>
					</div>					
				</div>		
			</section>
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
		<div class="feed_back">
			<div class="cr">
				<div class="up_heading">
					<span>Отзывы</span>
				</div>
				<div class="feed_part">
					<div class="img">
						<img src="img/ava.png"/>
					</div>
					<div class="feed_text">
						<span>Иванов Иван</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo numquam commodi delectus. Nisi nihil, aspernatur totam blanditiis inventore dignissimos culpa nemo optio.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae doloribus alias!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>