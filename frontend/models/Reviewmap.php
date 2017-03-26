<?php

namespace frontend\models;

use Yii;
use backend\models\User;
/**
 * This is the model class for table "reviewmap".
 *
 * @property integer $reviewmap_id
 * @property integer $thesis_id
 * @property integer $reviewer_id
 *
 * @property ThesisInfo $thesis
 * @property User $reviewer
 */
class Reviewmap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviewmap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['thesis_id', 'reviewer_id'], 'required'],
            [['thesis_id', 'reviewer_id'], 'integer'],
            [['thesis_id'], 'exist', 'skipOnError' => true, 'targetClass' => ThesisInfo::className(), 'targetAttribute' => ['thesis_id' => 'thesis_id']],
            [['reviewer_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['reviewer_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reviewmap_id' => 'Reviewmap ID',
            'thesis_id' => 'Thesis ID',
            'reviewer_id' => 'Reviewer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThesis()
    {
        return $this->hasOne(ThesisInfo::className(), ['thesis_id' => 'thesis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviewer()
    {
        return $this->hasOne(User::className(), ['id' => 'reviewer_id']);
    }
}
