<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
class Todo extends Model
{
    use HasFactory;
    protected $table = "todos";
    protected $fillable = [
        'project_id','name', 'deadline', 'desc'
    ];
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
