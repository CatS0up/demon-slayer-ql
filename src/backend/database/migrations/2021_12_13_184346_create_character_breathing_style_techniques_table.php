<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterBreathingStyleTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_breathing_style_techniques', function (Blueprint $table) {
            $table->foreignUuid('_characterId')->constrained('characters', '_id');
            $table->foreignUuid('_breathingStyleTechniqueId')->constrained('breathing_style_techniques', '_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_breathing_style_techniques');
    }
}
