<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikProjectsApartments extends Migration
{
    public function up()
    {
        Schema::create('dominik_projects_apartments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->decimal('floor_area', 10, 0)->nullable();
            $table->bigInteger('staircases_id');
            $table->integer('floor')->nullable();
            $table->string('notation')->nullable();
            $table->string('export_notation')->nullable();
            $table->string('about')->nullable();
            $table->double('price', 10, 0)->nullable();
            $table->double('max_discount', 10, 0)->nullable();
            $table->integer('vatcategory')->nullable();
            $table->string('wind')->nullable();
            $table->string('localisation')->nullable();
            $table->integer('apartmenttype')->nullable();
            $table->boolean('isactive')->nullable();
            $table->string('advance_percent')->nullable();
            $table->string('advance_amount')->nullable();
            $table->string('participation_in_road')->nullable();
            $table->string('participation_in_plot')->nullable();
            $table->double('plot_area', 10, 0)->nullable();
            $table->boolean('survey')->nullable();
            $table->double('survey_area', 10, 0)->nullable();
            $table->string('codename')->nullable();
            $table->string('sellname')->nullable();
            $table->integer('show_price')->nullable();
            $table->boolean('is_commercial')->nullable();
            $table->string('warranty')->nullable();
            $table->integer('with_renovation')->nullable();
            $table->double('renovation_cost', 10, 0)->nullable();
            $table->string('road_share')->nullable();
            $table->double('road_share_price', 10, 0)->nullable();
            $table->bigInteger('apartment_price_id')->nullable();
            $table->string('adress')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_projects_apartments');
    }
}
