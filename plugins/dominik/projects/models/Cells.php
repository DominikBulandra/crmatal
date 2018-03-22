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
            'dominik\projects\Models\places',
            'table' => 'dominik_projects_places',
            'key' =>      'cell_id'
           

    ]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominik_projects_cells';
    public $belongsTo = [
    'buildings' => ['dominik\projects\Models\buildings',
            'table' => 'dominik_projects_buildings'],
    'buildings2' => [
     'dominik\projects\Models\buildings',
            'table' => 'dominik_projects_buildings'

    ]
];
 public function getSublistBtnAttribute()
    {
        //$project = $this->find($this->id);
        return '<a href="'.Backend::url('dominik/projects/cells/update/'.$this->id).'" class="btn btn-primary btn-sm">
        <i class="icon icon-indent"></i> Sub list
        </a>';
    }
 public function scopeListFrontEnd($query, $options = []){
        extract(array_merge([
            'page' => 1,
            'perPage' => 10,
            'sort' => 'id desc',
            'buildings' => null

        ], $options));

        if($buildings !== null){

            if(!is_array($buildings)){

                $buildings = [$buildings];
            }


            foreach ($buildings as $building){
                $query->whereHas('buildings', function($q) use ($building){
                    $q->where('id','=', $building);
                });
            }
            
        }
        return $query->paginate($perPage, $page);

    }

}
