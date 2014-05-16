
<h2>Employee Report</h2>

<table width="50%" border="1">
    
    <tr bgcolor="#6699ff">  
      <td>ID</td>
      <td>NIP</td>
      <td>Nama Pegawai</td>
      <td>Email</td>
      <td>No Telp / Hp</td>
      <td>Alamat</td>
  </tr>
<?php
$no=1;
$cus=Employee::Model()->findAll(array(
        'select'=>'*',
));
foreach($cus as $tomer): 
    $this->pageTitle="Employee Report";
?>
  <tr>
      <td><?php echo $no++;?></td>
      <td><?=$tomer->NIP;?></td>
      <td><?=$tomer->employee_name;?></td>
      <td><?=$tomer->email;?></td>
      <td><?=$tomer->no_telp;?></td>
      <td><?=$tomer->addess;?></td>
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

