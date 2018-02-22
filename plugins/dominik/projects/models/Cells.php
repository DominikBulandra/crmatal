<?php namespace Dominik\Projects\Models;

use Model;
use Backend;

/**
 * Model
 */
class Cells extends Model
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
    public $hasMany = [

    'inner_cell' =>[
            'dominik\projects\Models\apartments',
            'table' => 'dominik_projects_apartments',
            'key' =>      'cell_id'
           

    ]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominik_projects_cells';
    public $belongsTo = [
    'buildings' => ['dominik\projects\Models\buildings']
];
 public function getSublistBtnAttribute()
    {
        //$project = $this->find($this->id);
        return '<a href="'.Backend::url('dominik/projects/cells/update/'.$this->id).'" class="btn btn-primary btn-sm">
        <i class="icon icon-indent"></i> Sub list
        </a>';
    }
}
