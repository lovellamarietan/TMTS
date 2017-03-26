<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property integer $review_id
 * @property string $review_due_date
 * @property string $review_status
 * @property integer $thesis_id
 *
 * @property Comments[] $comments
 * @property ThesisInfo $thesis
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['review_due_date', 'review_status', 'thesis_id'], 'required'],
            [['review_due_date'], 'safe'],
            [['review_status'], 'string'],
            [['thesis_id'], 'integer'],
            [['thesis_id'], 'exist', 'skipOnError' => true, 'targetClass' => ThesisInfo::className(), 'targetAttribute' => ['thesis_id' => 'thesis_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'review_id' => 'Review ID',
            'review_due_date' => 'Review Due Date',
            'review_status' => 'Review Status',
            'thesis_id' => 'Thesis ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['review_id' => 'review_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThesis()
    {
        return $this->hasOne(ThesisInfo::className(), ['thesis_id' => 'thesis_id']);
    }
}
