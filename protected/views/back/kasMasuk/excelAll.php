
<h2>Bukti Kas Report</h2>

<table width="50%" border="1">
    
    <tr bgcolor="#6699ff">  
      <td>ID</td>
      <td>Person</td>
      <td>Money In</td>
      <td>Date In</td>
      <td>Keterangan</td>
      <td>Created By</td>
      <td>Created At</td>
  </tr>
<?php
$no=1;
$cus=Kasmasuk::Model()->findAll(array(
        'select'=>'*',
));
foreach($cus as $tomer): 
    $this->pageTitle="Bukti Kas Report";
?>
  <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo Employee::model()->findByPk($tomer->person_id)->employee_name;?></td>
      <td><?=$tomer->money_in;?></td>
      <td><?=$tomer->date_in;?></td>
      <td><?=$tomer->desc;?></td>
      <td><?=Users::model()->findByPk($tomer->created_by)->username;?></td>
      <td><?=$tomer->created_at?></td>
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

