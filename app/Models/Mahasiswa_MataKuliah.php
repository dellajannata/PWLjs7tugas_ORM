<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Kelas;

class Mahasiswa_MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $primaryKey = 'id';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim');
    }
    public function matakulaih()
    {
        return $this->belongsTo(Matakuliah::class, 'id');
    }
    public function mahasiswa_matakuliah()
    {
        return $this->belongsToMany(Mahasiswa::class, Mahasiswa_MataKuliah::class, 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
}
