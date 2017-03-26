<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "thesis_content".
 *
 * @property integer $content_id
 * @property integer $thesis_id
 * @property string $section_id
 * @property string $content_text
 *
 * @property ThesisInfo $thesis
 */
class ThesisContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thesis_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['thesis_id', 'section_id', 'content_text'], 'required'],
            [['thesis_id'], 'integer'],
            [['section_id', 'content_text'], 'string'],
            [['thesis_id'], 'exist', 'skipOnError' => true, 'targetClass' => ThesisInfo::className(), 'targetAttribute' => ['thesis_id' => 'thesis_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content_id' => 'Content ID',
            'thesis_id' => 'Thesis ID',
            'section_id' => 'Section ID',
            'content_text' => 'Content Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThesis()
    {
        return $this->hasOne(ThesisInfo::className(), ['thesis_id' => 'thesis_id']);
    }
}
