<?php
/** @var $dataProvider yii\data\ActiveDataProvider */
?>

<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_video_item'
])?>
