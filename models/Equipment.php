<?php

namespace app\models;

use Yii;
use app\models\Category;

/**
 * This is the model class for table "equipment".
 *
 * @property int $id
 * @property string $name
 * @property string|null $serial_number
 * @property int $category_id
 * @property string $received_date
 * @property string $description
 *
 * @property Category $category
//  * @property Tasks[] $tasks
 */
class Equipment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'received_date', 'description'], 'required'],
            [['category_id'], 'integer'],
            [['received_date'], 'safe'],
            [['name', 'serial_number', 'description'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'serial_number' => 'Серийный номер',
            'category_id' => 'Номер категории',
            'received_date' => 'Дата получения',
            'description' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }


    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    // public function getTasks()
    // {
    //     return $this->hasMany(Tasks::class, ['equipment_id' => 'id']);
    // }
}
