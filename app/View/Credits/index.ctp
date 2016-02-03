
<section class="main_text">
	<div class="zayavka">
		<h3>Онлайн заявка</h3>
		<span class="zayv">И получите предварительное решение!</span>
		<input type="text" placeholder="ФИО">
		<input type="text" placeholder="Дата Рождения">
		<div class="double_in clearfix">
			<input type="text" placeholder="Мобильный телефон">
			<input type="text" placeholder="Эл.Почта">
		</div>
		<input type="text" placeholder="Cумма">
		<div class="double_in clearfix">
			<input type="text" placeholder="Срок кредитования">
			<input type="text" placeholder="Город">
		</div>
		<button type="submit">Получить решение</button>
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