<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_relatives', function (Blueprint $table) {
            $table->foreignUuid('_characterId')->constrained('characters', '_id');
            $table->foreignUuid('_relativeId')->constrained('characters', '_id');
            $table->string('kinship')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_relatives');
    }
}
