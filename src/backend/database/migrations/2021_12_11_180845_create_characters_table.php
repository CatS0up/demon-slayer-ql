<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->primary('uuid');
            $table->foreignUuid('affilation_uuid')->constrained('affilations', 'uuid');
            $table->string('name');
            $table->text('short_description');
            $table->foreignUuid('breathing_style_uuid')->nullable()->constrained('breathing_styles', 'uuid');
            $table->string('anime_avatar')->nullable();
            $table->string('manga_avatar')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('first_anime_apperance')->nullable();
            $table->string('first_manga_apperance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
