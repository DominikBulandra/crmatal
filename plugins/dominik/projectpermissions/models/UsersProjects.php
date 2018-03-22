<?php namespace Dominik\Projectpermissions\Models;

use Model;

/**
 * users_projects Model
 */
class UsersProjects extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominik_projectpermissions_users_projects';

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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
