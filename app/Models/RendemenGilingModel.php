<?php

namespace App\Models;

use CodeIgniter\Model;

class RendemenGilingModel extends Model
{
    protected $table            = 'rendemenGiling';
    protected $useTimestamps = true;
    protected $allowedFields    = ['JGabah', 'JBeras', 'rendemen'];
}
