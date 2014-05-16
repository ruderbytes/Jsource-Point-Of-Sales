<div class="view">

    <h4><?php echo CHtml::link(CHtml::encode($data->webnews_title), array('view', 'id'=>$data->id,'news'=>$data->webnews_title.'.html')); ?> - <?php echo CHtml::encode($data->webnews_created_at); ?></h4>
    <b>Oleh : <?php echo $data->webnews_created_by;?></b><br/>
<?php
    $this->widget('ext.XReadMore.XReadMore', array(
      'model'=>$data,
         'attribute'=>'webnews_content',
        'maxChar'=>300,
        'showLink'=>false,
    ));
    ?>    
</div>