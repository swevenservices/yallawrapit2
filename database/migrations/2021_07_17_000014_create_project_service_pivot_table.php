<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectServicePivotTable extends Migration
{
    public function up()
    {
        Schema::create('project_service', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id', 'service_id_fk_4400718')->references('id')->on('services')->onDelete('cascade');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id', 'project_id_fk_4400718')->references('id')->on('projects')->onDelete('cascade');
        });
    }
}
