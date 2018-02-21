<?php namespace Dominik\Projects\Models;

use Model;
use Backend;
/**
 * Model
 */
class Buildings extends Model
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
    public $table = 'dominik_projects_buildings';
    

    public $hasMany = [

    'cells' =>[
            'dominik\projects\Models\cells',
            'table' => 'dominik_projects_cells',
            'key' =>      'buildings_id'
           

    ],
     'cellscount' =>[
            'dominik\projects\Models\cells',
            'table' => 'dominik_projects_cells',
            'key' =>      'buildings_id',
            'count' => true
           

    ]
    ];

    public $belongsTo = [

    'project' =>[
            'dominik\projects\Models\project',
            'table' => 'dominik_projects_projects',
            'order' =>      'notation'

    ]];
    public function getSublistBtnAttribute()
    {
        //$project = $this->find($this->id);
        return '<a href="'.Backend::url('dominik/projects/buildings/update/'.$this->id).'" class="btn btn-primary btn-sm">
        <i class="icon icon-indent"></i> Sub list
        </a>';
    }
}
