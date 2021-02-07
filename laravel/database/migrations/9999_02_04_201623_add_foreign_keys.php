<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tasks', function (Blueprint $table){

          $table->foreign('employee_id','task-employee')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');
      });

      Schema::table('employee_location', function (Blueprint $table){

          $table->foreign('employee_id','br-employee')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');

          $table->foreign('location_id','br-location')
                ->references('id')
                ->on('locations')
                ->onDelete('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      Schema::table('employee_location', function (Blueprint $table){

          $table->dropForeign('br-location');
          $table->dropForeign('br-employee');


      });
      Schema::table('tasks', function (Blueprint $table){

          $table->dropForeign('task-employee');
      });
    }
}
