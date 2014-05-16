<h2>Partners Report</h2>

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
$sup=Partner::Model()->findAll(array(
        'select'=>'*',
));
foreach($sup as $tomer): 
    $this->pageTitle="Partner Report";
?>
  <tr>
      <td><?=$tomer->Id_sup;?></td>
      <td><?=$tomer->No_Account;?></td>
      <td><?=$tomer->Perusahaan;?></td>
      <td><?=$tomer->fname;?></td>
      <td><?=$tomer->lname;?></td>
      <td><?=$tomer->email;?></td>
      <td><?=$tomer->alamat1?></td>
      <td><?=$tomer->alamat2;?></td>
      <td><?=$tomer->kode_pos;?></td>
      <td><?=$tomer->kota;?></td>
      <td><?=$tomer->provinsi;?></td>
      <td><?=$tomer->deskripsi;?></td>
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

