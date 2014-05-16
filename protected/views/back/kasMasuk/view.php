<?php
$this->breadcrumbs = array(
    'Kas Masuk' => array('index'),
    Employee::model()->findByPk($model->person_id)->employee_name => array('employee/' . $model->person_id),
    'At ' . $model->date_in,
);
?>

<h2>KasMasuk #<?php echo $model->id; ?></h2>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        //'person_id',
        array(
            'name' => 'Employee',
            'type' => 'raw',
            'value' => Employee::model()->findByPk($model->person_id)->employee_name,
        ),
        array(
            'name' => 'Money In',
            'type' => 'raw',
            'value' => "Rp." . number_format($model->money_in) . ",-",
        ),
        'desc',
        array(
            'name' => 'Saldo',
            'type' => 'raw',
            'value' => "Rp." . number_format($model->saldo) . ",-",
        ),
        'date_in',
        'created_at',
        array(
            'name' => 'Created By',
            'type' => 'raw',
            'value' => Users::model()->findByPk($model->created_by)->username,
        ),
        'updated_at',
        array(
            'name' => 'Updated By',
            'type' => 'raw',
            'value' => Users::model()->findByPk($model->updated_by)->username,
        ),
    ),
));
?>
<hr>

<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type' => 'primary',
        'toggle' => 'radio',
        'buttons' => array(
            array('label' => Employee::model()->findByPk($model->person_id)->employee_name, 'url' => array('kasmasuk/person', 'id' => $model->person_id)),
            array('label' => 'Excel Report', 'url' => array('kasmasuk/reportXls', 'id' => $model->id)),
            array('label' => 'PDF Report', 'url' => array('kasmasuk/reportPdf', 'id' => $model->id)),
        ),
    ));
    ?>
</div>
<div class="span3">
    <div style="background-image: url('<?= Yii::app()->baseUrl ?>/images/icon/frm-bg.png'); padding: 20px; border-radius: .4em;"/>
    <h3>Kas Keluar</h3>
    <?php
    $this->renderPartial('/kmDetails/_form', array(
        'model' => $dta,
    ));
    ?></div>
</div>
<div class="span8">
    <h4>BKK #<?php echo Employee::model()->findByPk($model->person_id)->employee_name; ?></h4>
    <p><b><?php echo "At $model->date_in"; ?></b></p>
    <?php
    $this->widget('bootstrap.widgets.TbExtendedGridView', array(
        'filter' => $dta,
        'fixedHeader' => true,
        'headerOffset' => 40,
        'type' => 'striped bordered',
        'dataProvider' => $dta->search(),
        'template' => "{items}",
        'columns' => array(
            'id',
            'name_out',
            'amount_money_out',
            'created_at',
            array(
                'name' => 'created_by',
                'type' => 'raw',
                'value' => Users::model()->findByPk($model->created_by)->username,
            ),
            'updated_at',
            //'updated_by',
            array(
                'name' => 'updated_by',
                'value' => '$data->user->username',
            ),
            array(
                'class' => 'CButtonColumn',
                'viewButtonUrl' => 'Yii::app()->controller->createUrl("kmdetails/view",array("id"=>$data->id))',
                'updateButtonUrl' => 'Yii::app()->createUrl("kmdetails/update",array("id"=>$data->id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("kmdetails/delete",array("id"=>$data->id))',
            ),
        ),
    ));
    ?>
</div>