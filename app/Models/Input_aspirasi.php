<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input_aspirasi extends Model
{
    use HasFactory;

    protected $with = ['kategori'];

    protected $table = 'input_aspirasis';

    protected $primaryKey = 'id_pelaporan';

    protected $guarded = ['id_pelaporan'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
