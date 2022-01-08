<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;

class AddIndexesToCharactersCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $collection) {
            $collection->index('name');
            $collection->index('gender');
            $collection->index('race');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('characters', function (Blueprint $collection) {
            $collection->dropIndex(['name', 'gender', 'race']);
        });
    }
}
