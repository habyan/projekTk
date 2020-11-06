<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPendaftaran extends Model
{
    protected $table = 'form_pendaftaran';
    protected $fillable = [
        'users_id_murid',
        'nama_murid', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'tempat_lahir',
        'nama_ayah', 'nama_ibu', 'pekerjaan_ayah', 'pekerjaan_ibu', 'no_tlp_ayah', 'no_tlp_ibu'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id_murid', 'id');
    }
}
