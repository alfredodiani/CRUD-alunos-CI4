<?php

namespace app\Models;

use CodeIgniter\Model;

class AlunosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'alunos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'endereco',
        'fotopath'
    ];

    
}
