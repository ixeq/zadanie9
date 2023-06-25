<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property string $model
 * @property string $owner
 * @property string $date
 * @property int $cost_parking
 * @property int $sell
 * @property int $debt
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'owner', 'date', 'cost_parking', 'sell', 'debt'], 'required'],
            [['date'], 'safe'],
            [['cost_parking', 'sell', 'debt'], 'integer'],
            [['model', 'owner'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'owner' => 'Owner',
            'date' => 'Date',
            'cost_parking' => 'Cost Parking',
            'sell' => 'Sell',
            'debt' => 'Debt',
        ];
    }
}
