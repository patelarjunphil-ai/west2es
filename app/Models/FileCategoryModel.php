<?php

namespace App\Models;

use CodeIgniter\Model;

class FileCategoryModel extends Model
{
    protected $table            = 'file_categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'description',
    ];

    // Dates
    protected $useTimestamps = false;
}
