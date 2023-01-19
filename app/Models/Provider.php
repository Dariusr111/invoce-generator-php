<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable=['type', 'name', 'address', 'code', 'vat_code', 'vat_payer'];

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }
}
