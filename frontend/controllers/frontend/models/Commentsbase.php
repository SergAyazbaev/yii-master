<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.10.2017
 * Time: 11:16
 */

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
        return [
            'id' => 'ID',
            'text' => 'Text',
        ];
    }
}
