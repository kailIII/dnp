<?php

/**
 * This is the model class for table "contacto".
 *
 * The followings are the available columns in table 'contacto':
 * @property integer $id
 * @property string $id_corto
 * @property string $cod_empleado
 * @property string $cedula
 * @property string $vp
 * @property string $nom_contacto
 * @property string $unidad
 * @property string $nom_servicio
 * @property string $nom_subservicio
 * @property string $canal_de_ingreso
 * @property string $grupo_de_inter
 * @property string $regional
 * @property string $telefono
 * @property string $ext
 * @property string $celular
 * @property string $email
 * @property string $ciudad
 * @property string $nom_empresa
 * @property string $archivo_hoja
 */
class Contacto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_corto, cod_empleado, cedula, vp, unidad, nom_servicio, nom_subservicio, canal_de_ingreso, grupo_de_inter, regional, telefono, ext, celular, email, ciudad, nom_empresa, archivo_hoja', 'length', 'max'=>100),
			array('nom_contacto', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_corto, cod_empleado, cedula, vp, nom_contacto, unidad, nom_servicio, nom_subservicio, canal_de_ingreso, grupo_de_inter, regional, telefono, ext, celular, email, ciudad, nom_empresa, archivo_hoja', 'safe', 'on'=>'search'),
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
			'id_corto' => 'Id Corto',
			'cod_empleado' => 'Cod Empleado',
			'cedula' => 'Cedula',
			'vp' => 'Vp',
			'nom_contacto' => 'Nom Contacto',
			'unidad' => 'Unidad',
			'nom_servicio' => 'Nom Servicio',
			'nom_subservicio' => 'Nom Subservicio',
			'canal_de_ingreso' => 'Canal De Ingreso',
			'grupo_de_inter' => 'Grupo De Inter',
			'regional' => 'Regional',
			'telefono' => 'Telefono',
			'ext' => 'Ext',
			'celular' => 'Celular',
			'email' => 'Email',
			'ciudad' => 'Ciudad',
			'nom_empresa' => 'Nom Empresa',
			'archivo_hoja' => 'Archivo Hoja',
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
		$criteria->compare('id_corto',$this->id_corto,true);
		$criteria->compare('cod_empleado',$this->cod_empleado,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('vp',$this->vp,true);
		$criteria->compare('nom_contacto',$this->nom_contacto,true);
		$criteria->compare('unidad',$this->unidad,true);
		$criteria->compare('nom_servicio',$this->nom_servicio,true);
		$criteria->compare('nom_subservicio',$this->nom_subservicio,true);
		$criteria->compare('canal_de_ingreso',$this->canal_de_ingreso,true);
		$criteria->compare('grupo_de_inter',$this->grupo_de_inter,true);
		$criteria->compare('regional',$this->regional,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('ext',$this->ext,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('nom_empresa',$this->nom_empresa,true);
		$criteria->compare('archivo_hoja',$this->archivo_hoja,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contacto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function logicaFormulario( $id_user ){



		if( $this->hizoCuantitativo( $id_user ) === false ){

			Yii::app()->getController()->redirect( array('cuantitativo/create') );
			return;

		}


		Yii::app()->getController()->redirect( array('agradecimiento/') );
	}

	public function hizoCuantitativo( $id_user ){

		$usuario 		= User::model()->findByPk($id_user);
		$cod_empleado 	= $usuario->username;

		$c = new CDbCriteria;
		$c->compare('cod_empleado',$cod_empleado);
		$respuestas_cuanti = Cuantitativo::model()->find($c);

		if( $respuestas_cuanti === NULL ){
			return false;
		}

		return true;
	}
}
