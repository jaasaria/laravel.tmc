<?php

namespace iloilofinest\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    
    protected $table = 'ticket';
    protected $fillable = ['category','subject','description','xstatus','ifRead','created_at'];

}
