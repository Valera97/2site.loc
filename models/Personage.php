<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personage".
 *
 * @property integer $id
 * @property string $nname
 * @property integer $id_clan
 * @property string $path_url
 * @property integer $power
 * @property integer $hp
 * @property string $created_at
 * @property string $password
 * @property integer $money
 * @property integer $level
 * @property integer $vunos
 */
class Personage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nname', 'id_clan', 'created_at', 'password', 'money', 'level'], 'required'],
            [['id_clan', 'power', 'hp', 'money', 'level', 'vunos'], 'integer'],
            [['created_at'], 'safe'],
            [['nname'], 'string', 'max' => 30],
            [['path_url', 'password'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nname' => 'Nname',
            'id_clan' => 'Id Clan',
            'path_url' => 'Path Url',
            'power' => 'Power',
            'hp' => 'Hp',
            'created_at' => 'Created At',
            'password' => 'Password',
            'money' => 'Money',
            'level' => 'Level',
            'vunos' => 'Vunos',
        ];
    }
}
