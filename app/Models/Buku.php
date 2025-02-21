<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    protected $guarded = [];

    public function kategori(): BelongsTo
    {
        return $this->BelongsTo(kategori::class);
    }

    public function penerbit(): BelongsTo
    {
        return $this->BelongsTo(penerbit::class);   
    }
}
