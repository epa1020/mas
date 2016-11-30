<?php

/**
 * This is the model class for table "tbl_bitacoras".
 *
 * The followings are the available columns in table 'tbl_bitacoras':
 * @property integer $id_bitacora
 * @property integer $id_usuario_mention
 * @property string $contenido
 * @property string $fecha_hora
 */
class TblBitacoras extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_bitacoras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario_mention, contenido, fecha_hora', 'required'),
			array('id_usuario_mention', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bitacora, id_usuario_mention, contenido, fecha_hora', 'safe', 'on'=>'search'),
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
			'id_bitacora' => 'Id Bitacora',
			'id_usuario_mention' => 'Id Usuario Mention',
			'contenido' => 'Contenido',
			'fecha_hora' => 'Fecha Hora',
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

		$criteria->compare('id_bitacora',$this->id_bitacora);
		$criteria->compare('id_usuario_mention',$this->id_usuario_mention);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('fecha_hora',$this->fecha_hora,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblBitacoras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
