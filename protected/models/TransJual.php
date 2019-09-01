<?php

/**
 * This is the model class for table "trans_jual".
 *
 * The followings are the available columns in table 'trans_jual':
 * @property integer $no_trans
 * @property string $tgl
 * @property string $waktu
 * @property integer $id_barang
 * @property string $nama_barang
 * @property integer $harga
 * @property integer $qty
 * @property integer $total
 * @property integer $bayar
 * @property integer $kembali
 *
 * The followings are the available model relations:
 * @property Barang $idBarang
 */
class TransJual extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trans_jual';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tgl, waktu, id_barang, nama_barang, harga, qty, total, bayar, kembali', 'required'),
			array('id_barang, harga, qty, total, bayar, kembali', 'numerical', 'integerOnly'=>true),
			array('nama_barang', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_trans, tgl, waktu, id_barang, nama_barang, harga, qty, total, bayar, kembali', 'safe', 'on'=>'search'),
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
			'idBarang' => array(self::BELONGS_TO, 'Barang', 'id_barang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_trans' => 'No Trans',
			'tgl' => 'Tgl',
			'waktu' => 'Waktu',
			'id_barang' => 'Id Barang',
			'nama_barang' => 'Nama Barang',
			'harga' => 'Harga',
			'qty' => 'Qty',
			'total' => 'Total',
			'bayar' => 'Bayar',
			'kembali' => 'Kembali',
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

		$criteria->compare('no_trans',$this->no_trans);
		$criteria->compare('tgl',$this->tgl,true);
		$criteria->compare('waktu',$this->waktu,true);
		$criteria->compare('id_barang',$this->id_barang);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('total',$this->total);
		$criteria->compare('bayar',$this->bayar);
		$criteria->compare('kembali',$this->kembali);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransJual the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
