<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Meeting
 *
 * @property-read \App\Event $event
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Score[] $scores
 * @property-read \App\Student $student
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Meeting onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Meeting withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Meeting withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $user_id
 * @property int $student_id
 * @property int $event_id
 * @property string|null $start_time
 * @property string|null $end_time
 * @property float|null $general_evaluation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereGeneralEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Meeting whereUserId($value)
 */
class Meeting extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_time',
        'end_time',
        'general_evaluation',
        'user_id',
        'event_id',
        'student_id',
        'general_comment',
    ];
    protected $table = 'meetings';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
