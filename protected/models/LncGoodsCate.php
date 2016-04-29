 <?php
/**
 * This is the model class for table "lnc_goods_cate".
 *
 * The followings are the available columns in table 'lnc_goods_cate':
 * @property integer $id
 * @property string $cate_name
 * @property integer $pid
 * @property string $cate_intro
 * @property string $create_time
 * @property string $upadate_time
 */
class LncGoodsCate extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'lnc_goods_cate';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('pid', 'numerical', 'integerOnly'=>true),
            array('cate_name', 'length', 'max'=>100),
            array('cate_intro', 'length', 'max'=>255),
            array('create_time, upadate_time', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, cate_name, pid, cate_intro, create_time, upadate_time', 'safe', 'on'=>'search'),
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
            'cate_name' => 'Cate Name',
            'pid' => 'Pid',
            'cate_intro' => 'Cate Intro',
            'create_time' => 'Create Time',
            'upadate_time' => 'Upadate Time',
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
        $criteria->compare('cate_name',$this->cate_name,true);
        $criteria->compare('pid',$this->pid);
        $criteria->compare('cate_intro',$this->cate_intro,true);
        $criteria->compare('create_time',$this->create_time,true);
        $criteria->compare('upadate_time',$this->upadate_time,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return LncGoodsCate the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
} 
