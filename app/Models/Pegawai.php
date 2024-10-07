<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama', 'email', 'kantor_id'];
    
    public function kantor()
    {
        return $this->belongsTo(Kantor::class);
    }
}

