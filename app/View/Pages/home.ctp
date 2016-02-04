<div class="cr">
			<div class="up_part">
				<div class="banner">
					<div class="img"></div>
					<h4>Кредиты под залог<br>
					    <span>Авто и недвижимость</span>
					</h4>
				</div>
				<div class="form">
					<div class="img"></div>
					<h4>Онлайн заявка<br>
						<span>на получение кредита</span>
					</h4>
					<div class="wr">
					<form class="form_int" action="/credits/get" method="post">
						<div class="int_row clearfix">
							<input type="text" name="data[Credit][name]" placeholder="Контактное лицо"/>
							<span></span>
						</div>
						<div class="int_row int_row2">
							<input type="text" name="data[Credit][phone]" placeholder="Номер телефона"/>
							<span></span>
						</div>
						<div class="price_filter clearfix">
							<div class="title">Желаемая сумма займа</div>	<div class="slider-wrapper">
					            <input type="text" class="js-callback" />
					            <div id="js-display-callback" class="display-box"></div>
					          </div>							
						</div>
						<div class="c_rows clearfix">
							<div class="row_credit">
								<span class="span1">Желаемая сумма займа</span>
								
							</div>
						</div>
						<div class="c_rows clearfix">
							<div class="row_credit">
								<span class="span2">срок займа под автомобиль</span>
								<select name="data[Credit][car]">
									<option value="">Выберите срок</option>
									<option value="1">1-6 месяцев</option>
									<option value="2">6-12 месяцев</option>
									<option value="3">12-18 месяцев</option>
									<option value="4">18-24 месяцев</option>
									<option value="5">24 и более месяцев</option>
								</select>
							</div>
						</div>
						<div class="c_rows clearfix">
							<div class="row_credit">
								<span class="span3">срок займа под недвижимость</span>
								<select name="data[Credit][realty]">
									<option value="">Выберите срок</option>
									<option value="1">1-6 месяцев</option>
									<option value="2">6-12 месяцев</option>
									<option value="3">12-18 месяцев</option>
									<option value="4">18-24 месяцев</option>
									<option value="5">24 и более месяцев</option>
								</select>
							</div>
						</div>
						<button class="button_enter" type="submit">Отправить заявку</button>
					</form>	
					</div>			
				</div>
			</div>
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
		</div>	