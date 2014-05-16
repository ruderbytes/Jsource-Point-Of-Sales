
<?php

        $fav= Employee::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>$model->id),
        ));
        foreach($fav as $f):
            echo "<b>".$f->employee_name."</b>";
        endforeach;
        
$this->widget('bootstrap.widgets.TbGridView', array(
	'type' => 'striped bordered',
	'dataProvider' =>$dataProvider,
	'template' => "{items}",
	'columns' => array(
                array(
                    'name'=>'Date in',
                    'value'=>  '$data->date_in',
                ),
                array(
                    'name'=>'Money in',
                    'value'=>  'number_format($data->money_in)',
                ),
                array(
                    'name'=>'Saldo',
                    'value'=>  'number_format($data->saldo)',
                ),
                array('class'=>'CButtonColumn',
        //'template'=>'{update}{delete}{view}',
        'buttons'=>array (
            'update'=> array(
                'label'=>'',
                'imageUrl'=>'',
                'options'=>array( 'class'=>'icon-edit' ),
            ),
            'view'=>array(
                'label'=>'',
                'imageUrl'=>'',
                'options'=>array( 'class'=>'icon-search' ),
            ),
            'delete'=>array(
                'label'=>'',
                'imageUrl'=>'',
                'options'=>array( 'class'=>'icon-remove' , 'rel'=>'tooltip','title'=>Yii::app()->user->name),
            ),
        ),
    ),
            )))?>