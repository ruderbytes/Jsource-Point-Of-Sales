<h2>Sales Order Report</h2>

<table width="100%" border="1">
    
    <tr bgcolor="#6699ff">  
      <td>ID</td>
      <td>No Transaksi</td>
      <td>Harga</td>
      <td>Jumlah</td>
      <td>Total</td>
  </tr>
<?php
$no=1;
$cus=  SoDetails::Model()->findAll(array(
        'select'=>'*',
));
foreach($cus as $tomer): 
    $this->pageTitle="Sales Order Report";
?>
  <tr>
      <td><?php echo $no++;?></td>
      <td><?=$tomer->so_id;?></td>
      <td><?=$tomer->c_price;?></td>
      <td><?=$tomer->qty;?></td>
      <td><?=$tomer->total;?></td>
  </tr>
<?php endforeach;?>
</table>
<b>Dicetak Oleh : <? echo Yii::app()->user->name;?><br/>
Dicetak Pada : <? echo date('d/m/Y H:i:s');?></b>
<div align="right">Copyright &COPY; <?php echo date('Y'); ?>
    By
    <?php
    $by=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($by as $us): 
    echo $us->namaapp;
endforeach;
?>
</div>