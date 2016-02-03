<div  class="cr">
<section class="main_text">
	<div class="zayavka">
	<form action="/credits/getcredit" method="POST">
		<h3>Онлайн заявка</h3>
		<span class="zayv">И получите предварительное решение!</span>
		<input type="text" name="data[Credit][name]" placeholder="ФИО">
		<input type="text" name="data[Credit][berth]" placeholder="Дата Рождения">
		<div class="double_in clearfix">
			<input type="text" name="data[Credit][phone]" required="required" placeholder="Мобильный телефон">
			<input type="text" name="data[Credit][email]" placeholder="Эл.Почта">
		</div>
		<input type="text" name="data[Credit][other_amount]" placeholder="Cумма">
		<div class="double_in clearfix">
			<input type="text" name="data[Credit][srok]" placeholder="Срок кредитования">
			<input type="text" name="data[Credit][city]" placeholder="Город">
		</div>
		<input type="text" name="data[Credit][zalog]" placeholder="Предмет залога">
		<button type="submit">Получить решение</button>
	</form>
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
		</div>	