<?php
$conf=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($conf as $fconf): 
    $this->pageTitle=$fconf->namaapp." - DASHBOARD";
?>
<table width="50%">
    <tr><td>
<table border="0">
    <tr>
        <td colspan="2">
            <center><h2><?=$fconf->namaapp?></h2></center>
        </td>
    </tr>
    <tr>
        <td colspan="2">
    <center><?=$fconf->judulatas?></center>
        </td>
    </tr>
    </table>
    <table border="1">
     <tr align="left">
        <td><b>ITEM CODE</b></td>
        <td><?php echo $model->ITEM_CODE; ?></td>
     </tr>
     <tr align="left">
        <td><b>ITEM NAME</b></td>
        <td><?php echo $model->ITEM_NAME; ?></td>
     </tr>
     <tr align="left">
        <td><b>ITEM DESCRIPTION</b></td>
        <td><?php echo $model->ITEM_DESCRIPTION; ?></td>
     </tr >
     <tr align="left">
        <td><b>BARCODE</b></td>
        <td><?php echo $model->BARCODE; ?></td>
     </tr>
     <tr align="left">
        <td><b>UOM CODE</b></td>
        <td><?php echo $model->UOM_CODE; ?></td>
     </tr>
     <tr align="left">
        <td><b>MIN STOCK</b></td>
        <td><?php echo $model->MIN_STOCK; ?></td>
     </tr>
     <tr align="left">
        <td><b>ACTIVE FLAG</b></td>
        <td><?php echo $model->ACTIVE_FLAG; ?></td>
     </tr>
     <tr align="left">
        <td><b>CREATED BY</b></td>
        <td><?php echo $model->CREATED_BY; ?></td>
     </tr>
     <tr align="left">
        <td><b>CREATED DATE</b></td>
        <td><?php echo $model->CREATED_DATE; ?></td>
     </tr>
     <tr align="left">
        <td><b>LAST UPDATE DATE</b></td>
        <td><?php 
        if($model->LAST_UPDATE_DATE=="0000-00-00 00:00:00"){
        echo "belum di update"; 
        }else{
            echo $model->LAST_UPDATE_DATE;
        }
        ?></td>
     </tr>
     <tr align="left">
        <td><b>LAST UPDATE BY</b></td>
        <td><?php echo $model->LAST_UPDATE_BY; ?></td>
     </tr>
     <tr align="left">
        <td><b>GAMBAR</b></td>
        <td><?php echo $model->GAMBAR; ?></td>
     </tr>
     <tr align="left">
        <td><b>NOTE</b></td>
        <td><?php echo $model->NOTE; ?></td>
     </tr>
     
</table>
<b>Dicetak Oleh : <? echo Yii::app()->user->name;?><br/>
Dicetak Pada : <? echo date('d/m/Y');?></b>
            <div align="right">Copyright &COPY; <?php echo date('Y'); ?></div></td></tr>
    <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/'.$model->ITEM_CODE.'.jpeg'));?>
    </table>
<?php endforeach;?>