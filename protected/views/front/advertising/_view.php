<div class="view">
    <table border="2" width="100%">
        <tr>
            <td rowspan="3" width="20%"><div class="pict"><img src="<?php echo Yii::app()->request->baseUrl.'/iklan/'.$data->avatar; ?>" width="150" height="100" title="<?php echo $data->judul; ?>" /></div></td>
            
            <td width="45%"><h4> <div class="blc"><?php echo CHtml::link(CHtml::encode($data->judul), array('view', 'id'=>$data->id,'iklan'=>$data->judul)); ?></div></h4><br/> Diterbitkan Oleh : <?php echo CHtml::encode($data->nama); ?> <br/> Pada : <?php echo CHtml::encode($data->created_at); ?></td>
        </tr>
        <tr>
            
            <td><?php echo CHtml::encode($data->alamat); ?>, <?php echo CHtml::encode($data->kota); ?>, <?php echo CHtml::encode($data->provinsi); ?></td>
        </tr>
    </table>
</div>