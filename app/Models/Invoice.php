<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable=['serial', 'number', 'client_id', 'provider_id', 'total_price'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }

}
