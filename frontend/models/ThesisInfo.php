<?php

namespace frontend\models;

use Yii;
use backend\models\User;

/**
 * This is the model class for table "thesis_info".
 *
 * @property integer $thesis_id
 * @property string $thesis_title
 * @property integer $author_id
 * @property string $thesis_status
 * @property string $created_at
 * @property string $proposal_at
 * @property string $proposal_approved_at
 * @property string $final_defense_at
 * @property string $final_approved_at
 * @property integer $adviser_id
 *
 * @property Keymap[] $keymaps
 * @property Review[] $reviews
 * @property ThesisContent[] $thesisContents
 * @property User $author
 * @property User $adviser
 */
class ThesisInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thesis_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['thesis_title', 'author_id', 'thesis_status', 'proposal_at', 'final_defense_at', 'adviser_id'], 'required'],
            [['author_id', 'adviser_id'], 'integer'],
            [['thesis_status'], 'string'],
            [['created_at', 'proposal_at', 'proposal_approved_at', 'final_defense_at', 'final_approved_at'], 'safe'],
            [['thesis_title'], 'string', 'max' => 100],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['adviser_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['adviser_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'thesis_id' => 'Thesis ID',
            'thesis_title' => 'Thesis Title',
            'author_id' => 'Author ID',
            'thesis_status' => 'Thesis Status',
            'created_at' => 'Created At',
            'proposal_at' => 'Proposal At',
            'proposal_approved_at' => 'Proposal Approved At',
            'final_defense_at' => 'Final Defense At',
            'final_approved_at' => 'Final Approved At',
            'adviser_id' => 'Adviser ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeymaps()
    {
        return $this->hasMany(Keymap::className(), ['thesis_id' => 'thesis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['thesis_id' => 'thesis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThesisContents()
    {
        return $this->hasMany(ThesisContent::className(), ['thesis_id' => 'thesis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdviser()
    {
        return $this->hasOne(User::className(), ['id' => 'adviser_id']);
    }
}
