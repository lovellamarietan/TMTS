<?php

namespace frontend\models;

use Yii;
use backend\models\User;
/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $section_id
 * @property integer $line_no
 * @property string $comment
 * @property integer $reviewer_id
 * @property string $commented_at
 * @property string $comment_status
 * @property integer $review_id
 *
 * @property User $reviewer
 * @property Review $review
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'section_id', 'line_no', 'comment', 'reviewer_id', 'comment_status', 'review_id'], 'required'],
            [['id', 'line_no', 'reviewer_id', 'review_id'], 'integer'],
            [['section_id', 'comment', 'comment_status'], 'string'],
            [['commented_at'], 'safe'],
            [['reviewer_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['reviewer_id' => 'id']],
            [['review_id'], 'exist', 'skipOnError' => true, 'targetClass' => Review::className(), 'targetAttribute' => ['review_id' => 'review_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_id' => 'Section ID',
            'line_no' => 'Line No',
            'comment' => 'Comment',
            'reviewer_id' => 'Reviewer ID',
            'commented_at' => 'Commented At',
            'comment_status' => 'Comment Status',
            'review_id' => 'Review ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviewer()
    {
        return $this->hasOne(User::className(), ['id' => 'reviewer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReview()
    {
        return $this->hasOne(Review::className(), ['review_id' => 'review_id']);
    }
}
