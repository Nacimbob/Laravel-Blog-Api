<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blogger extends Model
{
    public $timestamps = false;

    protected $fillable=['pseudo','description','profile'];

    protected $guarded=['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
