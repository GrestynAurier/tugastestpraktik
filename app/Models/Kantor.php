<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama', 'alamat'];
    
    public function pegawais()
    {
        return $this->hasMany(Pegawai::class);
    }
}
