<header>
			<div class="cr">
				<div class="h_top">
					<a class="logo" href="/">
						<img src="/img/logo.png"/>
					</a>
					<div class="h_des">Микрофинансовая организация<br> кредиты под залог</div>
					<div class="perspectiva">
						<a target="_blank" href="http://lombard-perspectiva.kz">
							Часовой ломбард
						</a>
					</div>
					<div class="h_num">
						<a class="num" href="tel:+7 777 8312838">+7 777 831 28 38</a>
						<a class="num" href="tel:7 701 0333553">+7 701 033 35 53</a>
						<a class="feedback" href="">Заказать звонок</a>
					</div>
				</div>
				<nav class="nav">
					<div class="mob_ul">
						<ul class="ul_nav">
							<li <?php if($this->request->params['action']=='about') echo 'class="active"'?>>
								<a href="/about">О компании</a>
							</li>
							<li <?php if($this->request->params['action']=='autolombard') echo 'class="active"'?>>
								<a href="/autolombard">Автоломбард</a>
							</li>
							<li <?php if($this->request->params['action']=='realty') echo 'class="active"'?>>
								<a href="/realty">Займ под недвижимость</a>
							</li>
							<li <?php if($this->request->params['controller']=='credits') echo 'class="active"'?>>
								<a href="/credit">Онлайн заявка</a>
							</li>
							<li <?php if($this->request->params['action']=='contacts') echo 'class="active"'?>>
								<a href="/contacts">Контакты</a>
							</li>
						</ul>
						<div class="mob_close">
							<span>Закрыть</span>
						</div>
					</div>
					<div class="mob_nav">
						<span>Меню</span>
					</div>
				</nav>
			</div>
		</header>