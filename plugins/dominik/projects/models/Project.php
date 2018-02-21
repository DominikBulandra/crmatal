<?php namespace Dominik\Projects\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominik_projects_projects';

    public $belongsTo = [

    'city' =>[
            'dominik\projects\Models\city',
            'table' => 'dominik_projects_city',
            'order' =>      'name'

    ]
    ];
    public $hasMany = [

    'buildings' =>[
            'dominik\projects\Models\buildings',
            'table' => 'dominik_projects_buildings',
            'key' =>      'project_id'
           

    ],
    'cellss' =>[
            'dominik\projects\Models\cells',
            'table' => 'dominik_projects_cells',
            'key' =>      'buildings_id'
      ]     
    ];
     public $hasManyThrough = [


    'cells' =>[
             'dominik\projects\Models\cells',
            'table' => 'dominik_projects_cells',
            'key' =>      'buildings_id',
            'through'    => 'dominik\projects\Models\buildings',
            'table' => 'dominik_projects_buildings',
            'throughKey' => 'project_id'
           
           

    ]
    ];
}
