<div class="title admin_t">Редактирование отзыва</div>
<div class="model_info">
<?php echo $this->Form->create('Review', array('type' => 'file'));?>
<div class="model_info_img">
	<div class="model_item_container">
		<div class="model_item">		
			<img src="/img/review/thumbs/<?=$data['Review']['img']?>">
		</div>
	</div>
</div>
<?php 
echo $this->Form->input('img', array('label' => '', 'type' => 'file'));
echo $this->Form->input('title', array('label' => 'ФИО', 'class' => 'admin_input_f model fl_r'));
echo $this->Form->input('body', array('label' => '', 'id' => 'editor'));
echo $this->Form->end('Редактировать');
?>
</div>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>