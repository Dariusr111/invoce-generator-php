<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable=['type', 'name', 'address', 'code', 'vat_code'];

    public function invoice(){
        return $this->hasMany(Invoice::class);
    }


}
