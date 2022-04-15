<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id";
    protected $allowedFields = ['nim', 'nama', 'email', 'bidang', 'alamat'];

    function cari($katakunci)
    {
        //budi gmail
        $builder = $this->table("mahasiswa");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nim', $arr_katakunci[$x]);
            $builder->orLike('nama', $arr_katakunci[$x]);
            $builder->orLike('email', $arr_katakunci[$x]);
            $builder->orLike('alamat', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
