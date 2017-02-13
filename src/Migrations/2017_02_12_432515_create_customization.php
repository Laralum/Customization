<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Laralum\Customization\Models\Customization;

class CreateCustomization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laralum_customization', function (Blueprint $table) {
            $table->increments('id');
            $table->text('css')->nullable();
            $table->text('js')->nullable();
            $table->string('color')->nullable();
            $table->string('background_color')->nullable();
            $table->string('header_color')->nullable();
            $table->timestamps();
        });

        Customization::create([
            'css' => null,
            'js' => null,
            'color' => '#000000',
            'background_color' => '#ffffff',
            'header_color' => '#0275d8',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laralum_customization');
    }
}
