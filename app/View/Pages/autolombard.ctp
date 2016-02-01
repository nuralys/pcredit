<div class="cr">
			<section class="main_text">
				<h2>Автоломбард</h2>
				<p>Возникли финансовые проблемы? Оформите кредит под залог автомобиля. МФО «Premium Credit» предлагает взять кредит на выгодных условиях. Ваш транспорт остается у вас. В случае, если вы захотите оставить машину у нас мы организуем безопасное место на нашей охраняемой стоянке.</p>
				<h3>В качестве объекта залога рассматриваем</h3>
				<div class="zaem">
					<div class="img">
						<img src="img/car.png"/>
					</div>
					<div class="zaem_text">
						<ul class="zaem_ul">
							<li>
								<span>Любимые иномарки старше 2000г.выпуска</span>
								<i>1</i>
							</li>
							<li>
								<span>Любимые иномарки старше 2000г.выпуска</span>
								<i>2</i>
							</li>
							<li>
								<span>Любимые иномарки старше 2000г.выпуска</span>
								<i>3</i>
							</li>
							<li>
								<span>Любимые иномарки старше 2000г.выпуска</span>
								<i>4</i>
							</li>
						</ul>
					</div>
				</div>	
				<h3>Необходимые документы</h3>
				<span class="under_h3">Для рассмотрения заявки на кредит необходимы следующие документы:</span>
				<ul class="need_document">
					<li>
						<div class="img">
							<img src="/img/doc1.png"/>
						</div>
						<span>Ксерокопия паспорта собственника автомобиля</span>
					</li>
					<li>
						<div class="img">
							<img src="/img/doc2.png"/>
						</div>
						<span>Водительское удостоверение</span>
					</li>
					<li>
						<div class="img">
							<img src="/img/doc3.png"/>
						</div>
						<span>Техпаспорт</span>
					</li>
				</ul>				
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
		</div>