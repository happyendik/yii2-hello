<?php

namespace happyendik\Hello;

use yii\web\user;

class Hello extends yii\base\Component
{
    public $username;

    /**
     * @return string
     */
    public function say()
    {
        $user = $this->username;
        return 'Hello, ' . Yii::$app->user->identity->$user;
    }
}
