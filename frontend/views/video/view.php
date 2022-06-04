<?php
/** @var $model \common\models\Video*/
?>

<div class="row">
    <div class="col-sm-8 mt-2">
        <div class="embed-responsive embed-responsive-16by9 mb-3">
            <video src="<?php echo $model->getVideoLink() ?>" controls
                   poster="<?php echo $model->getThumbnailLink() ?>"></video>
        </div>
        <h3><?php echo $model->title ?></h3>
        <p>8 просмотов • <?php echo Yii::$app->formatter->asDate($model->created_at)?></p>
    </div>
    <div class="col-sm-4">

    </div>
</div>
