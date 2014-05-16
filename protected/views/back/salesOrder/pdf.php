<?php
$conf=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($conf as $fconf): 
    $this->pageTitle=$fconf->namaapp." - DASHBOARD";
?>
<table width="100%">
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
        <td><b>Nama Perusahaan</b></td>
        <td><?php echo Customer::model()->findByPk($model->customer_name)->cperusahaan; ?></td>
     </tr>
     <tr align="left">
        <td><b>Atas Nama</b></td>
        <td><?php echo Customer::model()->findByPk($model->customer_name)->cfname." ".Customer::model()->findByPk($model->customer_name)->clname; ?></td>
     </tr >
     <tr align="left">
        <td><b>Alamat</b></td>
        <td><?php echo $model->location; ?></td>
     </tr >
     <tr align="left">
        <td><b>Dibutuhkan</b></td>
        <td><?php echo $model->needed; ?></td>
     </tr>
     <tr align="left">
        <td><b>Nama Sales</b></td>
        <td><?php echo $model->sales_name; ?></td>
     </tr>
     <tr align="left">
        <td><b>Pembayaran</b></td>
        <td><?php echo TpPayment::model()->findByPk($model->tp_payment)->tp_payment; ?></td>
     </tr>
     <tr align="left">
        <td><b>Keterangan</b></td>
        <td><?php echo $model->keterangan; ?></td>
     </tr>
     <tr align="left">
        <td><b>Dibuat Pada</b></td>
        <td><?php echo $model->created_at; ?></td>
     </tr>
</table>
            <hr>
            <h4>Items</h4>
            <table border="1">
                <tr>
                <td><b>Item Code</b></td>
                <td><b>Nama Item</b></td>
                <td><b>C Price</b></td>
                <td><b>Jumlah</b></td>
                <td><b>Total</b></td>
                </tr>
                <?php
$c=SoDetails::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'so_id=:id',
        'params'=>array(':id'=>$model->id),
));
foreach($c as $s): 
?>
                <tr>
                    <td><?php echo Item::model()->findByPk($s->item_code)->ITEM_CODE;?></td>
                    <td><?php echo Item::model()->findByPk($s->item_code)->ITEM_NAME;?></td>
                    <td><?php echo "Rp.".formatrp(Item::model()->findByPk($s->item_code)->C_PRICE).",-";?></td>
                    <td><?php echo $s->qty;?></td>
                    <td><?php echo "Rp.".formatrp($s->total).",-";?></td>
                </tr>
                <?php
                $as+=$s->total;?>
<?php endforeach; ?>
                <tr>
                    <td colspan="4"><i><center>Amount Total</center></i></td>
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
