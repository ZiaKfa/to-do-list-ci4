<?php

namespace App\Models;

use CodeIgniter\Model;

class Tasks extends Model
{
    protected $table = 'task';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['task', 'done','dueDate','assignedToString'];
}