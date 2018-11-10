<?php
/**
 * Created by PhpStorm.
 * User: lecture
 * Date: 11/9/18
 * Time: 8:38 PM
 */

namespace app\controllers;


use yii\rest\ActiveController;

class V1ComidasController extends ActiveController
{
    public $modelClass ='app\models\Comidas';
}