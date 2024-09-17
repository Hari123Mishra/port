<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->String('name',200);
            $table->String('email',200);
            $table->String('mobile',150);
            $table->String('image',200);
            $table->String('resume',200);
            $table->String('dob',200);
            $table->String('course',200);
            $table->String('university',200);
            $table->String('passed_out_year',150);
            $table->String('company_name',200);
            $table->String('from',150);
            $table->String('to',150);
            $table->text('project_name');
            $table->text('project_description');
            $table->String('project_link',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
};
