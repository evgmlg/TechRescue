<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property int $services_id
 * @property int $user_id
 * @property int $equipment_id
 * @property string $comment
 * @property int $creator_id
 * @property int $worker_id
 * @property string $started_at
 * @property string $end_at
 * @property int $status
 *
 * @property User $creator
 * @property Equipment $equipment
 * @property Services $services
 * @property StatusType $status0
 * @property User $user
 * @property User $worker
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['services_id', 'user_id', 'equipment_id', 'comment', 'creator_id', 'worker_id', 'started_at', 'end_at', 'status'], 'required'],
            [['services_id', 'user_id', 'equipment_id', 'creator_id', 'worker_id', 'status'], 'integer'],
            [['started_at', 'end_at'], 'safe'],
            [['comment'], 'string', 'max' => 250],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => StatusType::class, 'targetAttribute' => ['status' => 'id']],
            [['services_id'], 'exist', 'skipOnError' => true, 'targetClass' => Services::class, 'targetAttribute' => ['services_id' => 'id']],
            [['equipment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Equipment::class, 'targetAttribute' => ['equipment_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['creator_id' => 'id']],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['worker_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'services_id' => 'ID услуги',
            'user_id' => 'ID пользователя',
            'equipment_id' => 'ID оборудования',
            'comment' => 'Комментарий',
            'creator_id' => 'ID создателя',
            'worker_id' => 'ID рабочего',
            'started_at' => 'Начало работы',
            'end_at' => 'Конец работы',
            'status' => 'Статус',
        ];
    }

    /**
     * Gets query for [[Creator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreator()
    {
        return $this->hasOne(User::class, ['id' => 'creator_id']);
    }

    /**
     * Gets query for [[Equipment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEquipment()
    {
        return $this->hasOne(Equipment::class, ['id' => 'equipment_id']);
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasOne(Services::class, ['id' => 'services_id']);
    }

    /**
     * Gets query for [[Status0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(StatusType::class, ['id' => 'status']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * Gets query for [[Worker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(User::class, ['id' => 'worker_id']);
    }

}
