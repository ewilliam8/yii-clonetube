<?php


namespace frontend\controllers;

use common\models\Posts;
use yii\rest\ActiveController;

class PostController extends ActiveController
{
    public $modelClass = Posts::class;
}