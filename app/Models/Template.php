<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'cat_id',
        'content',
        'template',
    ];

    protected $table = 'template';

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
