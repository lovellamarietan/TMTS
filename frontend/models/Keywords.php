<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "keywords".
 *
 * @property integer $keyword_id
 * @property string $keyword
 *
 * @property Keymap[] $keymaps
 */
class Keywords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keywords';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword_id', 'keyword'], 'required'],
            [['keyword_id'], 'integer'],
            [['keyword'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keyword_id' => 'Keyword ID',
            'keyword' => 'Keyword',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeymaps()
    {
        return $this->hasMany(Keymap::className(), ['keyword_id' => 'keyword_id']);
    }
}
