<header>
			<div class="cr">
				<div class="h_top">
					<a class="logo" href="index.html">
						<img src="/img/logo.png"/>
					</a>
					<div class="h_des">Микрофинансовая организация<br> кредиты под залог</div>
					<div class="perspectiva">
						<a target="_blank" href="http://lombard-perspectiva.kz">
							Часовой ломбард
						</a>
					</div>
					<div class="h_num">
						<a class="num" href="tel:23478247">+7 (7172) 78 38 02</a>
						<a class="feedback" href="">Заказать звонок</a>
					</div>
				</div>
				<nav class="nav">
					<ul class="ul_nav">
						<li <?php if($this->request->params['action']=='home') echo 'class="active"'?>>
							<a href="/">О компании</a>
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
				</nav>
			</div>
		</header>