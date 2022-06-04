<?php
/** @var $model \common\models\Video */

use yii\helpers\Url;

?>

<div class="card m-3" style="width: 18rem;">
    <a href="<?php echo Url::to(['/video/view', 'id' => $model->video_id])  ?>">
        <div class="embed-responsive embed-responsive-16by9 mb-3">
            <video src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>"></video>
        </div>
    </a>

    <div class="card-body p-2">
        <h5 class="card-title m-0"><?php echo  $model->title ?></h5>
        <p class="text-muted m-0"><?php echo $model->created_by->username ?></p>
        <p class="text-muted card-text m-0">8 просмотров • <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></p>
    </div>
</div>