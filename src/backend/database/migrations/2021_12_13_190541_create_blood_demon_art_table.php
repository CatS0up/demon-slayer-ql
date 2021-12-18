<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDemonArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_demon_arts', function (Blueprint $table) {
            $table->uuid('_id');
            $table->primary('_id');
            $table->foreignUuid('_characterId')->constrained('characters', '_id');
            $table->string('name')->index();
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_demon_arts');
    }
}
