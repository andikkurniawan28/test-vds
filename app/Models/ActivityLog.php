<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    public static function write($description, $data){
        self::insert([
            "user_id"       => Auth()->user()->id,
            "description"   => $description,
            "data"          => $data,
        ]);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
