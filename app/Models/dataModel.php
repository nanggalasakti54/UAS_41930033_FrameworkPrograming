<?php

namespace App\Models;
use CodeIgniter\Model;

class dataModel extends Model
{
    protected $table      = 'tb_mahasiswa';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nim', 'nama'];

    protected $useTimestamps = false;
    protected $createdField  = 'created';
    protected $updatedField  = 'updated';
    protected $deletedField  = 'deleted';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}