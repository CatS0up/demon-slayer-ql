<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreathingStyleTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breathing_style_techniques', function (Blueprint $table) {
            $table->uuid('_id');
            $table->primary('_id');
            $table->foreignUuid('_breathingStyleId')->nullable()->constrained('breathing_styles', '_id');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breathing_style_techniques');
    }
}
