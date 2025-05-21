<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table = 'kelases';
    protected $fillable = ['nama_kelas'];

    protected $date = 'deleted_at';

    public function siswa()
    {
        return $this->hasMany(User::class, 'id_jurusan', 'id');
    }
}
