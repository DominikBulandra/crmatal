<?php namespace Rainlab\User\Models;

use Model;

/**
 * UserProject Model
 */
class UserProject extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'user_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
     public $belongsToMany = [
        'users'       => [User::class, 'table' => 'users_groups'],
        'users_count' => [User::class, 'table' => 'users_groups', 'count' => true]
    ];
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
   
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
