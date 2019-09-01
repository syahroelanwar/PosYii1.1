<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $id_barang
 * @property string $nama_barang
 * @property integer $id_jenis
 * @property integer $stok
 * @property integer $harga
 * @property string $deskripsi
 * @property string $foto
 */
class Barang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_barang, id_jenis, stok, harga, deskripsi, foto', 'required'),
			array('id_jenis, stok, harga', 'numerical', 'integerOnly'=>true),
			array('nama_barang, foto', 'length', 'max'=>50),
			array('foto','file','types'=>'jpg, gif, png'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_barang, nama_barang, id_jenis, stok, harga, deskripsi, foto', 'safe', 'on'=>'search'),
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
			'id_barang' => 'Id Barang',
			'nama_barang' => 'Nama Barang',
			'id_jenis' => 'Id Jenis',
			'stok' => 'Stok',
			'harga' => 'Harga',
			'deskripsi' => 'Deskripsi',
			'foto' => 'Foto',
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

		$criteria->compare('id_barang',$this->id_barang);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('id_jenis',$this->id_jenis);
		$criteria->compare('stok',$this->stok);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
