<?php

/**
 * This is the model class for table "Cualitativo".
 *
 * The followings are the available columns in table 'Cualitativo':
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
 * @property string $p36_1
 * @property string $p36_2
 * @property string $p36_3
 * @property string $p36_4
 * @property string $p36_5
 * @property string $p36_6
 * @property string $p36_7
 * @property string $p36_8
 * @property string $p37_1
 * @property string $p37_2
 * @property string $p37_3
 * @property string $p37_4
 * @property string $p37_5
 * @property string $p37_6
 * @property string $p37_7
 * @property string $p37_8
 * @property string $p38_1
 * @property string $p38_2
 * @property string $p38_3
 * @property string $p38_4
 * @property string $p38_5
 * @property string $p38_6
 * @property string $p38_7
 * @property string $p38_8
 * @property string $p39
 * @property string $p40
 * @property string $p41_1
 * @property string $p41_2
 * @property string $p41_3
 * @property string $p41_4
 * @property string $p41_5
 * @property string $p41_6
 * @property string $p41_7
 * @property string $p41_8
 * @property string $p42_1
 * @property string $p42_2
 * @property string $p42_3
 * @property string $p42_4
 * @property string $p42_5
 * @property string $p42_6
 * @property string $p42_7
 * @property string $p42_8
 * @property string $p43_1
 * @property string $p43_2
 * @property string $p43_3
 * @property string $p43_4
 * @property string $p43_5
 * @property string $p43_6
 * @property string $p43_7
 * @property string $p43_8
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
 * @property string $p55_1
 * @property string $p55_2
 * @property string $p55_3
 * @property string $p55_4
 * @property string $p56
 */
class Cualitativo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Cualitativo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p36_1, p36_2, p36_3, p36_4, p36_5, p36_6, p36_7, p36_8, p37_1, p37_2, p37_3, p37_4, p37_5, p37_6, p37_7, p37_8, p38_1, p38_2, p38_3, p38_4, p38_5, p38_6, p38_7, p38_8, p41_1, p41_2, p41_3, p41_4, p41_5, p41_6, p41_7, p41_8, p42_1, p42_2, p42_3, p42_4, p42_5, p42_6, p42_7, p42_8, p43_1, p43_2, p43_3, p43_4, p43_5, p43_6, p43_7, p43_8, p54, p55_1, p55_2, p55_3, p55_4', 'length', 'max'=>255),
			array('p56', 'length', 'max'=>45),
			array('p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p39, p40, p44, p45, p46, p47, p48, p49, p50, p51, p52, p53', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_encuesta, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p36_1, p36_2, p36_3, p36_4, p36_5, p36_6, p36_7, p36_8, p37_1, p37_2, p37_3, p37_4, p37_5, p37_6, p37_7, p37_8, p38_1, p38_2, p38_3, p38_4, p38_5, p38_6, p38_7, p38_8, p39, p40, p41_1, p41_2, p41_3, p41_4, p41_5, p41_6, p41_7, p41_8, p42_1, p42_2, p42_3, p42_4, p42_5, p42_6, p42_7, p42_8, p43_1, p43_2, p43_3, p43_4, p43_5, p43_6, p43_7, p43_8, p44, p45, p46, p47, p48, p49, p50, p51, p52, p53, p54, p55_1, p55_2, p55_3, p55_4, p56', 'safe', 'on'=>'search'),
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
			'p36_1' => 'P36 1',
			'p36_2' => 'P36 2',
			'p36_3' => 'P36 3',
			'p36_4' => 'P36 4',
			'p36_5' => 'P36 5',
			'p36_6' => 'P36 6',
			'p36_7' => 'P36 7',
			'p36_8' => 'P36 8',
			'p37_1' => 'P37 1',
			'p37_2' => 'P37 2',
			'p37_3' => 'P37 3',
			'p37_4' => 'P37 4',
			'p37_5' => 'P37 5',
			'p37_6' => 'P37 6',
			'p37_7' => 'P37 7',
			'p37_8' => 'P37 8',
			'p38_1' => 'P38 1',
			'p38_2' => 'P38 2',
			'p38_3' => 'P38 3',
			'p38_4' => 'P38 4',
			'p38_5' => 'P38 5',
			'p38_6' => 'P38 6',
			'p38_7' => 'P38 7',
			'p38_8' => 'P38 8',
			'p39' => 'P39',
			'p40' => 'P40',
			'p41_1' => 'P41 1',
			'p41_2' => 'P41 2',
			'p41_3' => 'P41 3',
			'p41_4' => 'P41 4',
			'p41_5' => 'P41 5',
			'p41_6' => 'P41 6',
			'p41_7' => 'P41 7',
			'p41_8' => 'P41 8',
			'p42_1' => 'P42 1',
			'p42_2' => 'P42 2',
			'p42_3' => 'P42 3',
			'p42_4' => 'P42 4',
			'p42_5' => 'P42 5',
			'p42_6' => 'P42 6',
			'p42_7' => 'P42 7',
			'p42_8' => 'P42 8',
			'p43_1' => 'P43 1',
			'p43_2' => 'P43 2',
			'p43_3' => 'P43 3',
			'p43_4' => 'P43 4',
			'p43_5' => 'P43 5',
			'p43_6' => 'P43 6',
			'p43_7' => 'P43 7',
			'p43_8' => 'P43 8',
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
			'p55_1' => 'P55 1',
			'p55_2' => 'P55 2',
			'p55_3' => 'P55 3',
			'p55_4' => 'P55 4',
			'p56' => 'P56',
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
		$criteria->compare('p36_1',$this->p36_1,true);
		$criteria->compare('p36_2',$this->p36_2,true);
		$criteria->compare('p36_3',$this->p36_3,true);
		$criteria->compare('p36_4',$this->p36_4,true);
		$criteria->compare('p36_5',$this->p36_5,true);
		$criteria->compare('p36_6',$this->p36_6,true);
		$criteria->compare('p36_7',$this->p36_7,true);
		$criteria->compare('p36_8',$this->p36_8,true);
		$criteria->compare('p37_1',$this->p37_1,true);
		$criteria->compare('p37_2',$this->p37_2,true);
		$criteria->compare('p37_3',$this->p37_3,true);
		$criteria->compare('p37_4',$this->p37_4,true);
		$criteria->compare('p37_5',$this->p37_5,true);
		$criteria->compare('p37_6',$this->p37_6,true);
		$criteria->compare('p37_7',$this->p37_7,true);
		$criteria->compare('p37_8',$this->p37_8,true);
		$criteria->compare('p38_1',$this->p38_1,true);
		$criteria->compare('p38_2',$this->p38_2,true);
		$criteria->compare('p38_3',$this->p38_3,true);
		$criteria->compare('p38_4',$this->p38_4,true);
		$criteria->compare('p38_5',$this->p38_5,true);
		$criteria->compare('p38_6',$this->p38_6,true);
		$criteria->compare('p38_7',$this->p38_7,true);
		$criteria->compare('p38_8',$this->p38_8,true);
		$criteria->compare('p39',$this->p39,true);
		$criteria->compare('p40',$this->p40,true);
		$criteria->compare('p41_1',$this->p41_1,true);
		$criteria->compare('p41_2',$this->p41_2,true);
		$criteria->compare('p41_3',$this->p41_3,true);
		$criteria->compare('p41_4',$this->p41_4,true);
		$criteria->compare('p41_5',$this->p41_5,true);
		$criteria->compare('p41_6',$this->p41_6,true);
		$criteria->compare('p41_7',$this->p41_7,true);
		$criteria->compare('p41_8',$this->p41_8,true);
		$criteria->compare('p42_1',$this->p42_1,true);
		$criteria->compare('p42_2',$this->p42_2,true);
		$criteria->compare('p42_3',$this->p42_3,true);
		$criteria->compare('p42_4',$this->p42_4,true);
		$criteria->compare('p42_5',$this->p42_5,true);
		$criteria->compare('p42_6',$this->p42_6,true);
		$criteria->compare('p42_7',$this->p42_7,true);
		$criteria->compare('p42_8',$this->p42_8,true);
		$criteria->compare('p43_1',$this->p43_1,true);
		$criteria->compare('p43_2',$this->p43_2,true);
		$criteria->compare('p43_3',$this->p43_3,true);
		$criteria->compare('p43_4',$this->p43_4,true);
		$criteria->compare('p43_5',$this->p43_5,true);
		$criteria->compare('p43_6',$this->p43_6,true);
		$criteria->compare('p43_7',$this->p43_7,true);
		$criteria->compare('p43_8',$this->p43_8,true);
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
		$criteria->compare('p55_1',$this->p55_1,true);
		$criteria->compare('p55_2',$this->p55_2,true);
		$criteria->compare('p55_3',$this->p55_3,true);
		$criteria->compare('p55_4',$this->p55_4,true);
		$criteria->compare('p56',$this->p56,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cualitativo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
