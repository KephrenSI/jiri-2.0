<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Score
 *
 * @property-read \App\Implementation $implementation
 * @property-read \App\Meeting $meeting
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Score onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Score withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Score withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $meeting_id
 * @property int $implementation_id
 * @property float|null $score
 * @property string|null $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereImplementationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereMeetingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Score whereUpdatedAt($value)
 */
class Score extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score',
        'comment',
        'meeting_id',
        'implementation_id',
    ];
    protected $table = 'scores';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }

    public function implementation()
    {
        return $this->belongsTo(Implementation::class);
    }
}
