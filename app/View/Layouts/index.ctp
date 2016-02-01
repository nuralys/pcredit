<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout ?> | pcredit.kz</title>
	<meta name="viewport" content="width=1100">
	<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('style', 'slick'));
	echo $this->Html->script(array('http://code.jquery.com/jquery-latest.js', 'http://code.jquery.com/ui/1.10.3/jquery-ui.js','slick'));
	 ?>	
	<script type="text/javascript">

$(document).ready(function(){
  $( "#slider" ).slider({
value : 0,//Значение, которое будет выставлено слайдеру при загрузке
  min : 1000,//Минимально возможное значение на ползунке
  max : 10000,//Максимально возможное значение на ползунке
  step : 20,//Шаг
  create: function( event, ui ) {
   val = $( "#slider" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
  $( "#contentSlider" ).html( val );//Заполняем этим значением элемент с id contentSlider
 },
 slide: function( event, ui ) {
  $( "#contentSlider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider
            }
        });
});
</script>
</head>
<body>
		<?php echo $this->element('header'); //Вывод шапки сайта ?>
		<div class="cr">
			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->element('footer'); ?>
	<script>			
			$('.news_ul').slick({
			  dots: true,
			  infinite: false,
			  speed: 300,
			  arrows: false,
			  slidesToShow: 3,
			  slidesToScroll: 3,
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});
			$('.feeds').slick({
			  dots: false,
			  infinite: true,
			  speed: 300,
			  slidesToShow: 1,
			  adaptiveHeight: true
			});
		</script>
</body>
</html>