<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=['invoices_id', 'services_id', 'hours'];

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }


}
