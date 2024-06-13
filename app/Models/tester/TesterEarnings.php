<?php

namespace App\Models\tester;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesterEarnings extends Model
{
    use HasFactory;

    protected $fillable =[
   'tester_id',
   'earning',
    ];

    public function tester()
    {
        return $this->belongsTo(User::class);
        
    }
}
