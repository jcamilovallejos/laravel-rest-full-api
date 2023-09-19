<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Invoice extends Model
{
    use HasFactory;

    public function customer(){
        $this->belongsTo(Customer::class);
    }
}
