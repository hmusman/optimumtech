<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumsApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->string('shift')->after('country');
            $table->string('date_of_birth')->after('country');
            $table->string('gender')->after('country');
            $table->text('institute_name')->after('country');
            $table->string('current_degree')->after('country');
            $table->string('degree_title')->after('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
        });
    }
}
