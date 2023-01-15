<?php

namespace Tasks\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * Class InventoryActivities
 * @package App\Models
 * @version December 16, 2019, 2:25 pm UTC
 *
 * @property string title
 * @property string description
 */
class Task extends BaseModel  implements HasMedia
{
//    use Notifiable;
    use InteractsWithMedia;
    use SoftDeletes;

    public $table = 'tasks';
    protected $with = [
    ];

    protected $dates = ['deleted_at'];

//    public $searchConfig = ['freeze' => 'like'];

    public $fillable = [
        'title', 'admin_id', 'emp_id', 'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


}
