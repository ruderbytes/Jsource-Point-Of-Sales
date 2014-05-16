<h2>Sales Report</h2>

<table width="50%" border="1">
    
    <tr bgcolor="#6699ff">  
      <td>ID</td>
      <td>Nama Sales</td>
      <td>Posisi</td>
  </tr>
<?php
$no=1;
$cus=Sales::Model()->findAll(array(
        'select'=>'*',
));
foreach($cus as $tomer): 
    $this->pageTitle="Items Report";
?>
  <tr>
      <td><?php echo $no++;?></td>
      <td><?=$tomer->sales_name;?></td>
      <td><?=$tomer->posisi;?></td>
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