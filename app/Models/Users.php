<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['name'];
}