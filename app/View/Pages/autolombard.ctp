
<section class="main_text">
	<h2>Автоломбард</h2>
	<p>Возникли финансовые проблемы? Оформите кредит под залог автомобиля. МФО «Premium Credit» предлагает взять кредит на выгодных условиях. Ваш транспорт остается у вас. В случае, если вы захотите оставить машину у нас мы организуем безопасное место на нашей охраняемой стоянке.</p>
	<div class="zaem">
		<div class="z_row">
			<h3>Объект залога</h3>
			<ul>
				<li>
					<img src="img/car.png"/>
					<p>Любые иномарки старше 2000 г. выпуска</p>
				</li>
				<li>
					<img src="img/kran.png"/>
					<p>Специальная,строительная техника</p>
				</li>
			</ul>
		</div>
		<div class="z_row">
			<h3>Условия</h3>
			<ul>
				<li>
					<p>
						Автомобиль должен 
						находиться в исправном
						техническом состоянии
					</p>
				</li>
				<li>
					<p>
						Автомобиль не должен
						иметь действующих обременений (не должен быть уже заложен)
					</p>
				</li>
			</ul>
		</div>
		<div class="z_row">
			<h3 class="no_border">Необходимые документы</h3>
			<ul class="no_border">
				<li>
					<img src="/img/doc1.png">
					<p>
						Ксерокопия паспорта собственника автомобиля
					</p>
				</li>
				<li>
					<img src="/img/doc2.png">
					<p>
						Водительское удостоверение
					</p>
				</li>
				<li>
					<img src="/img/doc3.png">
					<p>
						Техпаспорт
					</p>
				</li>
			</ul>
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
