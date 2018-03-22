<?php namespace Dominik\Projects\Models;

use Model;

/**
 * Model
 */
class Places extends Model
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
    public $table = 'dominik_projects_places';
     public $belongsTo = [

    'placestypes' =>[
            'dominik\projects\Models\placestypes',
            'table' => 'dominik_projects_placestypes',
            'order' =>      'name'

    ],
    'cells' =>[
            'dominik\projects\Models\cells',
            'table' => 'dominik_projects_cells',
            'order' =>      'notation'

    ],
    'buildings' =>[
            'dominik\projects\Models\buildings',
            'table' => 'dominik_projects_buildings',
            'order' =>      'notation'

    ]




    ];
    public function scopeListFrontEnd($query, $options = []){
        extract(array_merge([
            'page' => 1,
            'perPage' => 5,
            'sort' => 'id desc',
            'cells' => null

        ], $options));

        if($cells !== null){

            if(!is_array($cells)){

                $cells = [$cells];
            }


            foreach ($cells as $cell){
                $query->whereHas('cells', function($q) use ($cell){
                    $q->where('id','=', $cell);
                });
            }
            
        }
        return $query->paginate($perPage, $page);

    }
}
