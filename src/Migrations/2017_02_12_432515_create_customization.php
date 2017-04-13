<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
            // $table->string('color')->nullable();
            // $table->string('background_color')->nullable();
            $table->string('navbar_color')->nullable();
            $table->text('favicon')->nullable();
            $table->timestamps();
        });

        Customization::create([
            'css' => null,
            'js'  => null,
            //'color' => '#000000',
            //'background_color' => '#ffffff',
            'navbar_color' => '#0F7AE5',
            'favicon'      => 'https://avatars1.githubusercontent.com/u/22253051',
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
