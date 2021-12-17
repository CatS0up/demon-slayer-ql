<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_affiliations', function (Blueprint $table) {
            $table->foreignUuid('_characterId')->constrained('characters', '_id');
            $table->foreignUuid('_affiliationId')->constrained('affiliations', '_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_affiliations');
    }
}
