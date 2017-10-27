<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "commentsbase".
 *
 * @property integer $id
 * @property string $text
 */
class Commentsbase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commentsbase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
//        $new_array=array();
//        $model = new Commentsbase( $new_array );


        return [
            'id' => 'ID',
            'text' => 'Text',
        ];
    }
}
