<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property integer $id_number
 * @property string $lastname
 * @property string $firstname
 * @property string $position
 * @property string $role
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Comments[] $comments
 * @property Reviewmap[] $reviewmaps
 * @property ThesisInfo[] $thesisInfos
 * @property ThesisInfo[] $thesisInfos0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'id_number', 'lastname', 'firstname', 'position', 'role', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['id_number', 'status', 'created_at', 'updated_at'], 'integer'],
            [['position', 'role'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['lastname', 'firstname'], 'string', 'max' => 100],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'id_number' => 'Id Number',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'position' => 'Position',
            'role' => 'Role',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['reviewer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviewmaps()
    {
        return $this->hasMany(Reviewmap::className(), ['reviewer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThesisInfos()
    {
        return $this->hasMany(ThesisInfo::className(), ['author_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThesisInfos0()
    {
        return $this->hasMany(ThesisInfo::className(), ['adviser_id' => 'id']);
    }
}
