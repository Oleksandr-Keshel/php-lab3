<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    // protected $table = 'auctions';
    protected $primaryKey = 'code';     //because i used 'code' for id of auction items
    public $timestamps = false;         //because i don't use created_at and updated_at 
}
