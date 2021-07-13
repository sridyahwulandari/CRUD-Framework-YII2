<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id_karyawan
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $status
 * @property string $tgl_lahir
 * @property string $alamat
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_kelamin', 'status', 'tgl_lahir', 'alamat'], 'required'],
            [['nama', 'alamat'], 'string', 'max' => 255],
            [['jenis_kelamin', 'status', 'tgl_lahir'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'status' => 'Status',
            'tgl_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
        ];
    }
}
