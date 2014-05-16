<?php
/* @var $this DownloadController */
/* @var $data Download */
?>

    <table class="table table-striped">
        <tr>
            <td>
                <a href="<?php echo Yii::app()->request->baseUrl.'/files_download/'.$data->path; ?>">Download <?php echo CHtml::encode($data->nama); ?></a>
            </td>
        </tr>
    </table>