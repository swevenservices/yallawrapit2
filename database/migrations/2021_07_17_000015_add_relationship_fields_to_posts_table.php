<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('catgeory_id')->nullable();
            $table->foreign('catgeory_id', 'catgeory_fk_4400294')->references('id')->on('categories');
        });
    }
}
