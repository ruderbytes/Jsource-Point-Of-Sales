<?php
$this->breadcrumbs=array(
	'Report / Laporan',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
        $('.hide-form').hide();
        if($('.hide-form').hide()){
          $('.search-button').click(function(){
              $('.hide-form').show();
          });
      }
	return false;
});
$('search-form').click(function(){
              $('hide-form').show(1000);
          });
$('.search-form form').submit(function(){
	$('#so-details-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

$logo=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
   
    $this->pageTitle="Report / Laporan | ".$files->namaapp;
?>

<?php endforeach;?>
<h2>Report / Laporan</h2>
<hr>
<div align="center" style="margin-left: 120px">
<table>
    <tr>
        <td></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/rpt_employee.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('site/report#myModal'),array('data-toggle'=>'modal','title'=>'Report Employee','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/rpt_bkm_bkk.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('site/report#myModalKas'),array('data-toggle'=>'modal','title'=>'Report Bukti Kas','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/rpt_items.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('site/report#myModalItem'),array('data-toggle'=>'modal','title'=>'Report Items','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
    </tr>
    <tr>
        <td></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/rpt_sales.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('site/report#myModalSales'),array('data-toggle'=>'modal','title'=>'Report Sales','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/rpt_salesorder.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('site/report#myModalSalesOrder'),array('data-toggle'=>'modal','title'=>'Report Sales Order','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/rpt_customer.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('site/report#myModalCustomers'),array('data-toggle'=>'modal','title'=>'Report Customer','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
    </tr>
</table>
</div>



<!-- Untuk Employeee -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <h3 id="myModalLabel">(Employee)Choose Report...</h3>
  </div>
  <div class="modal-body">
    <p><div align="center">
        <table>
            <tr>
                <td>
                    Report To Pdf
                    <a href="../employee/reportPdf" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_pdf.png"></a>
                </td>
                <td>
                    Report To Xls
                    <a href="../employee/reportXls" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_xls.png"></a>
                </td>
            </tr>
        </table>
        
</div></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
  </div>
</div>
<!-- Untuk Employeee -->

<!-- Untuk Bukti Kas -->
<div id="myModalKas" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <h4 id="myModalLabel">(Bukti Kas)Choose Report...</h4>
  </div>
  <div class="modal-body">
    <p><div align="center">
        
        <?php echo CHtml::link('Filter Report','#',array('class'=>'search-button')); ?>
        <div class="search-form" style="display:none">
        <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
        )); ?>
        <div align="right">
        <form method="post">
            <table>
                <tr>
                    <td>Date From</td>
                    <td>Date To</td>
                </tr>
                <tr>
                    <td><input type="date" placeholder="search" name="from" value="<?=isset($_GET['from']) ? CHtml::encode($_GET['from']) : '' ; ?>" /></td>
                    <td><input type="date" placeholder="search" name="until" value="<?=isset($_GET['until']) ? CHtml::encode($_GET['until']) : '' ; ?>" /></td>
                </tr>
            </table>
        
        <input type="submit" value="Report to Xls" name="cetakXlsKAS">
        <input type="submit" value="Report To Pdf" name="cetakPdfKAS" targe="_blank">
        </form>
        </div>
        <?php $this->endWidget(); ?>
        </div>
        
        <!--mulai sini!-->
        
        <div class="hide-form">
        <table>
            <tr>
                <td>
                    Report To Pdf
                    <a href="../kasmasuk/reportPdfAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_pdf.png"></a>
                </td>
                <td>
                    Report To Xls
                    <a href="../kasmasuk/reportXlsAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_xls.png"></a>
                </td>
            </tr>
        </table>
        </div>
        
</div></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
  </div>
</div>
<!-- Untuk Bukti Kas -->

<!-- Untuk Items -->
<div id="myModalItem" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <h4 id="myModalLabel">(Items)Choose Report...</h4>
  </div>
  <div class="modal-body">
    <p><div align="center">
        
        <?php echo CHtml::link('Filter Report','#',array('class'=>'search-button')); ?>
        <div class="search-form" style="display:none">
        <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
        )); ?>
        <div align="right">
        <form method="post">
            <table>
                <tr>
                    <td>Date From</td>
                    <td>Date To</td>
                </tr>
                <tr>
                    <td><input type="date" placeholder="search" name="from" value="<?=isset($_GET['from']) ? CHtml::encode($_GET['from']) : '' ; ?>" /></td>
                    <td><input type="date" placeholder="search" name="until" value="<?=isset($_GET['until']) ? CHtml::encode($_GET['until']) : '' ; ?>" /></td>
                </tr>
            </table>
        
        <input type="submit" value="Report to Xls" name="cetakXlsITM">
        <input type="submit" value="Report To Pdf" name="cetakPdfITM" targe="_blank">
        </form>
        </div>
        <?php $this->endWidget(); ?>
        </div>
        
        <!--mulai sini!-->
        <div class="hide-form">
        <table>
            <tr>
                <td>
                    Report To Pdf
                    <a href="../item/reportPdfAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_pdf.png"></a>
                </td>
                <td>
                    Report To Xls
                    <a href="../item/reportXlsAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_xls.png"></a>
                </td>
            </tr>
        </table>
        </div>
</div></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
  </div>
</div>
<!-- Untuk Items -->

<!-- Untuk Sales -->
<div id="myModalSales" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <h4 id="myModalLabel">(Sales)Choose Report...</h4>
  </div>
  <div class="modal-body">
    <p><div align="center">
        <table>
            <tr>
                <td>
                    Report To Pdf
                    <a href="../sales/reportPdfAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_pdf.png"></a>
                </td>
                <td>
                    Report To Xls
                    <a href="../sales/reportXlsAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_xls.png"></a>
                </td>
            </tr>
        </table>
        
</div></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
  </div>
</div>
<!-- Untuk Sales -->

<!-- Untuk Sales Order -->
<div id="myModalSalesOrder" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <h4 id="myModalLabel">(Sales Order)Choose Report...</h4>
  </div>
  <div class="modal-body">
    <p><div align="center">
      
        <?php echo CHtml::link('Filter Report','#',array('class'=>'search-button')); ?>
        <div class="search-form" style="display:none">
        <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
        )); ?>
        <div align="right">
        <form method="post">
            <table>
                <tr>
                    <td>Date From</td>
                    <td>Date To</td>
                </tr>
                <tr>
                    <td><input type="date" placeholder="search" name="from" value="<?=isset($_GET['from']) ? CHtml::encode($_GET['from']) : '' ; ?>" /></td>
                    <td><input type="date" placeholder="search" name="until" value="<?=isset($_GET['until']) ? CHtml::encode($_GET['until']) : '' ; ?>" /></td>
                </tr>
            </table>
        
        <input type="submit" value="Report to Xls" name="cetakXlsSO">
        <input type="submit" value="Report To Pdf" name="cetakPdfSO" targe="_blank">
        </form>
        </div>
        <?php $this->endWidget(); ?>
        </div>
        <div class="hide-form">
        <table>
            <tr>
                <td>
                    Report To Pdf
                    <a href="../salesorder/reportPdfAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_pdf.png"></a>
                </td>
                <td>
                    Report To Xls
                    <a href="../salesorder/reportXlsAll" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_xls.png"></a>
                </td>
            </tr>
        </table>
        </div>
</div></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
  </div>
</div>
<!-- Untuk Sales Order -->

<!-- Untuk Customer -->
<div id="myModalCustomers" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <h4 id="myModalLabel">(Customers)Choose Report...</h4>
  </div>
  <div class="modal-body">
    <p><div align="center">
        <table>
            <tr>
                <td>
                    Report To Pdf
                    <a href="../customer/reportPdf" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_pdf.png"></a>
                </td>
                <td>
                    Report To Xls
                    <a href="../customer/reportXls" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/file_xls.png"></a>
                </td>
            </tr>
        </table>
        
</div></p>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
  </div>
</div>
<!-- Untuk Customer -->