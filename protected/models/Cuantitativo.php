<?php

/**
 * This is the model class for table "cuantitativo".
 *
 * The followings are the available columns in table 'cuantitativo':
 * @property integer $id
 * @property string $fecha_encuesta
 * @property string $p1
 * @property string $p2
 * @property string $p3
 * @property string $p4
 * @property string $p5
 * @property string $p6
 * @property string $p7
 * @property string $p8
 * @property string $p9
 * @property string $p10
 * @property string $p11
 * @property string $p12
 * @property string $p13
 * @property string $p14
 * @property string $p15
 * @property string $p16
 * @property string $p17
 * @property string $p18
 * @property string $p19
 * @property string $p20
 * @property string $p21
 * @property string $p22
 * @property string $p23
 * @property string $p24
 * @property string $p25
 * @property string $p26
 * @property string $p27
 * @property string $p28
 * @property string $p29
 * @property string $p30
 * @property string $p31
 * @property string $p32
 * @property string $p33
 * @property string $p34
 * @property string $p35
 * @property string $p36
 * @property string $p37
 * @property string $p38
 * @property string $p39
 * @property string $p40
 * @property string $p41
 * @property string $p42
 * @property string $p43
 * @property string $p44
 * @property string $p45
 * @property string $p46
 * @property string $p47
 * @property string $p48
 * @property string $p49
 * @property string $p50
 * @property string $p51
 * @property string $p52
 * @property string $p53
 * @property string $p54
 * @property string $p55
 * @property string $p56
 * @property string $p57
 * @property string $p58
 */
class Cuantitativo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cuantitativo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p14, p15, p16, p17, p18, p19, p20, p21, p22, p24, p25, p26, p27, p28, p29, p30, p31, p32, p34, p35, p36, p37, p38, p39, p40, p41, p43, p44, p45, p46, p47, p49, p50, p51, p52, p53, p54, p57, p58', 'length', 'max'=>45),
			array('p56', 'length', 'max'=>255),
			array('p13, p23, p33, p42, p48, p55', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_encuesta, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36, p37, p38, p39, p40, p41, p42, p43, p44, p45, p46, p47, p48, p49, p50, p51, p52, p53, p54, p55, p56, p57, p58', 'safe', 'on'=>'search'),
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
			'fecha_encuesta' => 'Fecha Encuesta',
			'p1' => 'P1',
			'p2' => 'P2',
			'p3' => 'P3',
			'p4' => 'P4',
			'p5' => 'P5',
			'p6' => 'P6',
			'p7' => 'P7',
			'p8' => 'P8',
			'p9' => 'P9',
			'p10' => 'P10',
			'p11' => 'P11',
			'p12' => 'P12',
			'p13' => 'P13',
			'p14' => 'P14',
			'p15' => 'P15',
			'p16' => 'P16',
			'p17' => 'P17',
			'p18' => 'P18',
			'p19' => 'P19',
			'p20' => 'P20',
			'p21' => 'P21',
			'p22' => 'P22',
			'p23' => 'P23',
			'p24' => 'P24',
			'p25' => 'P25',
			'p26' => 'P26',
			'p27' => 'P27',
			'p28' => 'P28',
			'p29' => 'P29',
			'p30' => 'P30',
			'p31' => 'P31',
			'p32' => 'P32',
			'p33' => 'P33',
			'p34' => 'P34',
			'p35' => 'P35',
			'p36' => 'P36',
			'p37' => 'P37',
			'p38' => 'P38',
			'p39' => 'P39',
			'p40' => 'P40',
			'p41' => 'P41',
			'p42' => 'P42',
			'p43' => 'P43',
			'p44' => 'P44',
			'p45' => 'P45',
			'p46' => 'P46',
			'p47' => 'P47',
			'p48' => 'P48',
			'p49' => 'P49',
			'p50' => 'P50',
			'p51' => 'P51',
			'p52' => 'P52',
			'p53' => 'P53',
			'p54' => 'P54',
			'p55' => 'P55',
			'p56' => 'P56',
			'p57' => 'P57',
			'p58' => 'P58',
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
		$criteria->compare('fecha_encuesta',$this->fecha_encuesta,true);
		$criteria->compare('p1',$this->p1,true);
		$criteria->compare('p2',$this->p2,true);
		$criteria->compare('p3',$this->p3,true);
		$criteria->compare('p4',$this->p4,true);
		$criteria->compare('p5',$this->p5,true);
		$criteria->compare('p6',$this->p6,true);
		$criteria->compare('p7',$this->p7,true);
		$criteria->compare('p8',$this->p8,true);
		$criteria->compare('p9',$this->p9,true);
		$criteria->compare('p10',$this->p10,true);
		$criteria->compare('p11',$this->p11,true);
		$criteria->compare('p12',$this->p12,true);
		$criteria->compare('p13',$this->p13,true);
		$criteria->compare('p14',$this->p14,true);
		$criteria->compare('p15',$this->p15,true);
		$criteria->compare('p16',$this->p16,true);
		$criteria->compare('p17',$this->p17,true);
		$criteria->compare('p18',$this->p18,true);
		$criteria->compare('p19',$this->p19,true);
		$criteria->compare('p20',$this->p20,true);
		$criteria->compare('p21',$this->p21,true);
		$criteria->compare('p22',$this->p22,true);
		$criteria->compare('p23',$this->p23,true);
		$criteria->compare('p24',$this->p24,true);
		$criteria->compare('p25',$this->p25,true);
		$criteria->compare('p26',$this->p26,true);
		$criteria->compare('p27',$this->p27,true);
		$criteria->compare('p28',$this->p28,true);
		$criteria->compare('p29',$this->p29,true);
		$criteria->compare('p30',$this->p30,true);
		$criteria->compare('p31',$this->p31,true);
		$criteria->compare('p32',$this->p32,true);
		$criteria->compare('p33',$this->p33,true);
		$criteria->compare('p34',$this->p34,true);
		$criteria->compare('p35',$this->p35,true);
		$criteria->compare('p36',$this->p36,true);
		$criteria->compare('p37',$this->p37,true);
		$criteria->compare('p38',$this->p38,true);
		$criteria->compare('p39',$this->p39,true);
		$criteria->compare('p40',$this->p40,true);
		$criteria->compare('p41',$this->p41,true);
		$criteria->compare('p42',$this->p42,true);
		$criteria->compare('p43',$this->p43,true);
		$criteria->compare('p44',$this->p44,true);
		$criteria->compare('p45',$this->p45,true);
		$criteria->compare('p46',$this->p46,true);
		$criteria->compare('p47',$this->p47,true);
		$criteria->compare('p48',$this->p48,true);
		$criteria->compare('p49',$this->p49,true);
		$criteria->compare('p50',$this->p50,true);
		$criteria->compare('p51',$this->p51,true);
		$criteria->compare('p52',$this->p52,true);
		$criteria->compare('p53',$this->p53,true);
		$criteria->compare('p54',$this->p54,true);
		$criteria->compare('p55',$this->p55,true);
		$criteria->compare('p56',$this->p56,true);
		$criteria->compare('p57',$this->p57,true);
		$criteria->compare('p58',$this->p58,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cuantitativo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
