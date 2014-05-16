
<h2>Customers Report</h2>

<table width="50%" border="1">
    
    <tr bgcolor="#6699ff">  
      <td>ID</td>
      <td>No Account</td>
      <td>Perusahaan</td>
      <td>Nama Depan</td>
      <td>Nama Belakang</td>
      <td>Email</td>
      <td>Alamat 1</td>
      <td>Alamat 2</td>
      <td>Kode Pos</td>
      <td>Kota</td>
      <td>Provinsi</td>
      <td>Deskripsi</td>
  </tr>
<?php
$cus=Customer::Model()->findAll(array(
        'select'=>'*',
));
foreach($cus as $tomer): 
    $this->pageTitle="Customers Report";
?>
  <tr>
      <td><?=$tomer->id_cus;?></td>
      <td><?=$tomer->noaccount;?></td>
      <td><?=$tomer->cperusahaan;?></td>
      <td><?=$tomer->cfname;?></td>
      <td><?=$tomer->clname;?></td>
      <td><?=$tomer->email;?></td>
      <td><?=$tomer->calamat1?></td>
      <td><?=$tomer->calamat2;?></td>
      <td><?=$tomer->ckode_pos;?></td>
      <td><?=$tomer->ckota;?></td>
      <td><?=$tomer->cprovinsi;?></td>
      <td><?=$tomer->cdeskripsi;?></td>
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

