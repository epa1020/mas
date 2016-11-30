<?php

/**
 * This is the model class for table "tbl_mention_proceso".
 *
 * The followings are the available columns in table 'tbl_mention_proceso':
 * @property integer $id_bitacora
 * @property integer $id_usuario
 * @property integer $id_proceso
 * @property string $fecha_hora
 * @property integer $id_usuario_mention
 * @property integer $estado
 * @property integer $id_mentions
 */
class TblMentionProceso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_mention_proceso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_bitacora, id_usuario, id_proceso, fecha_hora, id_usuario_mention, estado', 'required'),
			array('id_bitacora, id_usuario, id_proceso, id_usuario_mention, estado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bitacora, id_usuario, id_proceso, fecha_hora, id_usuario_mention, estado, id_mentions', 'safe', 'on'=>'search'),
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
			'id_usuario' => 'Id Usuario',
			'id_proceso' => 'Id Proceso',
			'fecha_hora' => 'Fecha Hora',
			'id_usuario_mention' => 'Id Usuario Mention',
			'estado' => 'Estado',
			'id_mentions' => 'Id Mentions',
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
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_proceso',$this->id_proceso);
		$criteria->compare('fecha_hora',$this->fecha_hora,true);
		$criteria->compare('id_usuario_mention',$this->id_usuario_mention);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('id_mentions',$this->id_mentions);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblMentionProceso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
