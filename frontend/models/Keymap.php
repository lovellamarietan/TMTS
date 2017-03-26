<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "keymap".
 *
 * @property integer $keymap_id
 * @property integer $thesis_id
 * @property integer $keyword_id
 *
 * @property Keywords $keyword
 * @property ThesisInfo $thesis
 */
class Keymap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keymap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keymap_id', 'thesis_id', 'keyword_id'], 'required'],
            [['keymap_id', 'thesis_id', 'keyword_id'], 'integer'],
            [['keyword_id'], 'exist', 'skipOnError' => true, 'targetClass' => Keywords::className(), 'targetAttribute' => ['keyword_id' => 'keyword_id']],
            [['thesis_id'], 'exist', 'skipOnError' => true, 'targetClass' => ThesisInfo::className(), 'targetAttribute' => ['thesis_id' => 'thesis_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keymap_id' => 'Keymap ID',
            'thesis_id' => 'Thesis ID',
            'keyword_id' => 'Keyword ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeyword()
    {
        return $this->hasOne(Keywords::className(), ['keyword_id' => 'keyword_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThesis()
    {
        return $this->hasOne(ThesisInfo::className(), ['thesis_id' => 'thesis_id']);
    }
}
