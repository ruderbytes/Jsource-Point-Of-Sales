
<h2>Items Report</h2>

<table width="50%" border="1">
    
    <tr bgcolor="#6699ff">  
      <td>ITEM ID</td>
      <td>ITEM CODE</td>
      <td>ITEM NAME</td>
      <td>KETERANGAN</td>
      <td>BARCODE</td>
      <td>ACTIVE FLAG</td>
      <td>CREATED BY</td>
      <td>CREATED DATE</td>
      <td>PICTURE</td>
      <td>PRICE</td>
  </tr>
<?php
$no=1;
$cus=Item::Model()->findAll(array(
        'select'=>'*',
));
foreach($cus as $tomer): 
    $this->pageTitle="Items Report";
?>
  <tr>
      <td><?php echo $no++;?></td>
      <td><?=$tomer->ITEM_CODE;?></td>
      <td><?=$tomer->ITEM_NAME;?></td>
      <td><?=$tomer->ITEM_DESCRIPTION;?></td>
      <td><?=$tomer->BARCODE;?></td>
      <td><?php if($tomer->ACTIVE_FLAG=="Y"): echo "Ya"; else: echo "Tidak"; endif;?></td>
      <td><?=Users::model()->findByPk($tomer->CREATED_BY)->username;?></td>
      <td><?=$tomer->CREATED_DATE;?></td>
      <td><img src="<?php echo Yii::app()->request->baseUrl."/images/upload/".$tomer->GAMBAR;?>" width="100px"></td>
      <td><?=$tomer->C_PRICE;?></td>
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

