<?php namespace Dominik\Projectpermissions\Models;

use Model;

/**
 * user_projects Model
 */
class UserProjects extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominik_projectpermissions_user_projects';

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
   public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
        'projects' => ['Dominik\projects\Models\project']
    ];
   
    
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
