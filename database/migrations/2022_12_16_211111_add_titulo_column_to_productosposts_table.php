<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTituloColumnToProductospostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productosposts', function (Blueprint $table) {
            $table->string('titulo');
            $table->string('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('productosposts', 'titulo')) {
            Schema::table('productosposts', function (Blueprint $table) {

                $table->dropColumn(['titulo']);
            });
        }
    }
}
