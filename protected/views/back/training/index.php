<?php
/* @var $this TrainingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trainings',
);

$this->menu=array(
	array('label'=>'Create Training', 'url'=>array('create')),
	array('label'=>'Manage Training', 'url'=>array('admin')),
);
?>

<h1>Trainings</h1>
<?php $this->widget('ext.fullcalendar.EFullCalendarHeart', array(
    //'themeCssFile'=>'cupertino/jquery-ui.min.css',
    'options'=>array(
        'header'=>array(
            'left'=>'prev,next,today',
            'center'=>'title',
            'right'=>'month,agendaWeek,agendaDay',
        ),
        'events'=>$this->createUrl('training/calendarEvents'),
        'eventClick'=> 'js:function(calEvent, jsEvent, view) {
            $("#myModalHeader").html(calEvent.title);
            $("#myModalBody").load("'.Yii::app()->createUrl("training/view/id/").'"+calEvent.id+"?asModal=true");
            $("#myModal").modal();
        }',
    )));
?>
 
<?php $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'myModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4 id="myModalHeader">Modal header</h4>
    </div>
 
    <div class="modal-body" id="myModalBody">
        <p>One fine body...</p>
    </div>
 
    <div class="modal-footer">
        <?php $this->widget(
            'bootstrap.widgets.TbButton',
            array(
                'label' => 'Close',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
    </div>
 
<?php $this->endWidget(); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
