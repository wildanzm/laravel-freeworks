<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailService extends Model
{
    use SoftDeletes;

    public $table = 'thumbnail_service';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id',
        'thumbnail',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function service() {
        return $this->belongsTo(Service::class,'service_id', 'id');
    }

}
