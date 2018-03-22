<?php namespace Dominik\Projectpermissions;

use Backend;
use System\Classes\PluginBase;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
/**
 * projectpermissions Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'projectpermissions',
            'description' => 'No description provided yet...',
            'author'      => 'Dominik',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
       /** UserModel::extend(function($model){
            $model->hasMany['projectpermissions'] = ['dominik\projectpermissions\models\UserProjects'];
        });

        UsersController::extendFormFields(function($form, $model, $context){
            $form->addTabFields([
                'projectpermissions' => [
                    'label' => 'Inwestycje',
                    'type' => 'relation',
                    'nameFrom'=> 'name',
                    'tab' => 'Uprawnienia',
                ]

            ]);
        });
        UsersController::extendFormFields(function($form, $model, $context){
            $form->addTabFields([
                'groups' => [
                    'label' => 'Grupy',
                    'type' => 'relation',
                    'nameFrom'=> 'name',
                    'tab' => 'Grupy',
                ]

            ]);
        });**/

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Dominik\Projectpermissions\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dominik.projectpermissions.some_permission' => [
                'tab' => 'projectpermissions',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'projectpermissions' => [
                'label'       => 'projectpermissions',
                'url'         => Backend::url('dominik/projectpermissions/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['dominik.projectpermissions.*'],
                'order'       => 500,
            ],
        ];
    }
}
