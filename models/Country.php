<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    private $code;
    private $name;
    private $population;

    public function rules(){
        return [
                [['code','name','population'],'required']
        ];
    }
}