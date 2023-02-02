<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'file_url',
        'department_id',
    ];
    protected $with =[
        'department'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class); 
    }
}
