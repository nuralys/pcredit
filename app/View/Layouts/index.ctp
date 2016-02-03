<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout ?> | pcredit.kz</title>
	<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
	<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('style', 'slick','powerange'));
	echo $this->Html->script(array('http://code.jquery.com/jquery-latest.js', 'http://code.jquery.com/ui/1.10.3/jquery-ui.js','slick','script','powerange'));
	 ?>	
</head>
<body>
		<?php echo $this->element('header'); //Вывод шапки сайта ?>
		<?php echo $this->fetch('content'); ?>
		<?php echo $this->element('footer'); ?>
		  <script type="text/javascript">
		    // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue, start: 88 });

    function displayValue() {
      document.getElementById('js-display-callback').innerHTML = clbk.value;
    }
		    </script>     
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
			      breakpoint: 740,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 525,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        infinite: true,
			        dots: true
			      }
			    },
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