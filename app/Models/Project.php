<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Todo;
class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $fillable = [
        'name', 'type', 'summary', 'desc', 'deadline'
    ];
    public function todo() {
        return $this->hasMany(Todo::class);
    }
}
