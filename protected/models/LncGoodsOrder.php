<?php

/**
 * This is the model class for table "lnc_goods_order".
 *
 * The followings are the available columns in table 'lnc_goods_order':
 * @property integer $id
 * @property string $order_no
 * @property string $good_id
 * @property string $good_plan_id
 * @property integer $num
 * @property string $name
 * @property integer $mobile
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $price
 * @property string $message
 * @property string $createtime
 * @property string $updatetime
 */
class LncGoodsOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lnc_goods_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_no, good_id, good_plan_id, mobile', 'required'),
			array('num, mobile', 'numerical', 'integerOnly'=>true),
			array('order_no, good_id, good_plan_id, name, province, city, area', 'length', 'max'=>50),
			array('price', 'length', 'max'=>10),
			array('message, createtime, updatetime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, order_no, good_id, good_plan_id, num, name, mobile, province, city, area, price, message, createtime, updatetime', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'order_no' => 'Order No',
			'good_id' => 'Good',
			'good_plan_id' => 'Good Plan',
			'num' => 'Num',
			'name' => 'Name',
			'mobile' => 'Mobile',
			'province' => 'Province',
			'city' => 'City',
			'area' => 'Area',
			'price' => 'Price',
			'message' => 'Message',
			'createtime' => 'Createtime',
			'updatetime' => 'Updatetime',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('order_no',$this->order_no,true);
		$criteria->compare('good_id',$this->good_id,true);
		$criteria->compare('good_plan_id',$this->good_plan_id,true);
		$criteria->compare('num',$this->num);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mobile',$this->mobile);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('updatetime',$this->updatetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LncGoodsOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
