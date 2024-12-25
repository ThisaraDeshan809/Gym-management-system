<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('project_description')->change();
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('project_description', 255)->change();
        });
    }
};
