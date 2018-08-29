<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Implementation
 *
 * @property-read \App\Event $event
 * @property-read \App\Project $project
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Score[] $scores
 * @property-read \App\Student $student
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Implementation onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Implementation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Implementation withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $project_id
 * @property int $student_id
 * @property int $event_id
 * @property string|null $url_project
 * @property string|null $url_repo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereUrlProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Implementation whereUrlRepo($value)
 */
class Implementation extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'student_id',
        'project_id',
        'url_repo',
        'url_project',
    ];
    protected $table = 'implementations';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
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
