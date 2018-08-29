<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Performance
 *
 * @property-read \App\Event $event
 * @property-read \App\Student $student
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Performance onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Performance withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Performance withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property float|null $calculated_score
 * @property float|null $manual_score
 * @property int $event_id
 * @property int $student_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereCalculatedScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereManualScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Performance whereUpdatedAt($value)
 */
class Performance extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calculated_score',
        'manual_score',
    ];
    protected $table = 'performances';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
