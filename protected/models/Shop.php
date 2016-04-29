<?php

/**
 * This is the model class for table "lnc_goods".
 *
 * The followings are the available columns in table 'lnc_goods':
 * @property integer $id
 * @property integer $cate_id
 * @property string $goods_title
 * @property string $goods_intro
 * @property string $goods_pics
 * @property integer $goods_price
 * @property string $goods_thumb
 * @property integer $recommend
 * @property integer $status
 * @property string $createtime
 * @property string $updatetime
 */
class Shop extends XBaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lnc_goods';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cate_id, goods_price, recommend, status', 'numerical', 'integerOnly'=>true),
			array('goods_title', 'length', 'max'=>100),
			array('goods_intro', 'length', 'max'=>5000),
			array('goods_thumb', 'length', 'max'=>255),
			array('goods_sum', 'length', 'max'=>50),
			array('goods_pics, createtime, updatetime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cate_id, goods_title, goods_intro, goods_pics, goods_price, goods_thumb, recommend, status, createtime, updatetime', 'safe', 'on'=>'search'),
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
			'cate_id' => 'Cate',
			'goods_title' => 'Goods Title',
			'goods_intro' => 'Goods Intro',
			'goods_pics' => 'Goods Pics',
			'goods_price' => 'Goods Price',
			'goods_thumb' => 'Goods Thumb',
			'recommend' => 'Recommend',
			'status' => 'Status',
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
		$criteria->compare('cate_id',$this->cate_id);
		$criteria->compare('goods_title',$this->goods_title,true);
		$criteria->compare('goods_intro',$this->goods_intro,true);
		$criteria->compare('goods_pics',$this->goods_pics,true);
		$criteria->compare('goods_price',$this->goods_price);
		$criteria->compare('goods_thumb',$this->goods_thumb,true);
		$criteria->compare('recommend',$this->recommend);
		$criteria->compare('status',$this->status);
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
	 * @return LncGoods the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
