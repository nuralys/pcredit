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
<?=$this->element('news_reviews');?>