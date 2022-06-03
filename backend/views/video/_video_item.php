<?php
/** @var $model \common\models\Video */
use \yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="media">
<!--    <img src="--><?php //echo $model->getThumbnailLink() ?><!--" class="mr-3" alt="..." width="100">-->
    <a href="<?php echo Url::to(['video/update', 'video_id' => $model->video_id]) ?>">
        <div class="embed-responsive embed-responsive-16by9 mr-2" style="width: 160px">
            <video src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>"></video>
        </div>
    </a>
    <div class="media-body">
        <h5 class="mt-0"><?php echo $model->title ?></h5>
        <p><?php echo StringHelper::truncateWords($model->description, 10) ?></p>
    </div>
</div>