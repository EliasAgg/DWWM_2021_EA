<?php

use App\Models\Address;
use App\Models\Schedule;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('glyph', 10);
            $table->string('name', 255);
            $table->string('activity', 255);
            $table->string('description', 255);
            $table->string('link', 255);
            $table->string('phone', 10);
            $table->string('contact', 255);
            $table->string('email', 255);
            $table->foreignIdFor(Address::class);
            $table->foreignIdFor(Schedule::class);
            $table->foreignIdFor(MainCategory::class);
            $table->foreignIdFor(SubCategory::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
