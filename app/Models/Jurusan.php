<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'jurusans';
    protected $fillable = ['nama_jurusan'];

    protected $date = 'deleted_at';

    public function siswa()
    {
        return $this->hasMany(User::class, 'id_jurusan', 'id');
    }
}
