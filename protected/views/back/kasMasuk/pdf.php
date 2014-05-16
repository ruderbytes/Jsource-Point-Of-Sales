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
        <td><b>Employee</b></td>
        <td><?php echo Employee::model()->findByPk($model->person_id)->employee_name; ?></td>
     </tr>
     <tr align="left">
        <td><b>Money In</b></td>
        <td><?php echo "Rp." . number_format($model->money_in) . ",-"; ?></td>
     </tr >
     <tr align="left">
        <td><b>Description</b></td>
        <td><?php echo $model->desc; ?></td>
     </tr >
     <tr align="left">
        <td><b>Saldo</b></td>
        <td><?php echo "Rp." . number_format($model->saldo) . ",-"; ?></td>
     </tr >
     <tr align="left">
        <td><b>Date In</b></td>
        <td><?php echo $model->date_in; ?></td>
     </tr>
     <tr align="left">
        <td><b>Created At</b></td>
        <td><?php echo $model->created_at; ?></td>
     </tr>
     <tr align="left">
        <td><b>Created By</b></td>
        <td><?php echo Users::model()->findByPk($model->created_by)->username; ?></td>
     </tr>
     <tr align="left">
        <td><b>Updated At</b></td>
        <td><?php echo $model->updated_at; ?></td>
     </tr>
     <tr align="left">
        <td><b>Updated By</b></td>
        <td><?php echo Users::model()->findByPk($model->updated_by)->username; ?></td>
     </tr>
</table>
            <hr>
            <h4>BKK #<?php echo Employee::model()->findByPk($model->person_id)->employee_name; ?></h4>
    <p><b><?php echo "At $model->date_in"; ?></b></p>
            <table border="1">
                <tr>
                <td><b>ID</b></td>
                <td><b>Name Out</b></td>
                <td><b>Created At</b></td>
                <td><b>Created By</b></td>
                <td><b>Updated At</b></td>
                <td><b>Updated By</b></td>
                <td><b>Amount Money Out</b></td>
                </tr>
                <?php  
                echo $idpr;
$kmd=KmDetails::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'km_id=:id_km',
        'params'=>array(':id_km'=>$model->id),
));
$id=1;
foreach($kmd as $skm): 
?>
                <tr>
                    <td><?php echo $id++;?></td>
                    <td><?php echo $skm->name_out;?></td>
                    <td><?php echo $skm->created_at;?></td>
                    <td><?php echo Users::model()->findByPk($skm->created_by)->username;?></td>
                    <td><?php echo $skm->updated_at;?></td>
                    <td><?php echo Users::model()->findByPk($skm->updated_by)->username;?></td>
                    <td><?php echo "Rp.".formatrp($skm->amount_money_out).",-";?></td>
                </tr>
                <?php
                $as+=$skm->amount_money_out;?>
<?php endforeach; ?>
                <tr>
                    <td colspan="6"><i><center><b>Amount Total</b></center></i></td>
                    <td><?php echo "Rp.".formatrp($as).",-";?></td>
                </tr>
            </table>
<b>Dicetak Oleh : <? echo Yii::app()->user->name;?><br/>
Dicetak Pada : <? echo date("d/m/Y H:i:s");?></b>
            <div align="right">Copyright &COPY; <?php echo date('Y'); ?></div></td></tr>
    </table>
<?php endforeach;

function formatrp($angka){
        $rupiah=number_format($angka,2,',','.');
        return $rupiah;
        }
?>
