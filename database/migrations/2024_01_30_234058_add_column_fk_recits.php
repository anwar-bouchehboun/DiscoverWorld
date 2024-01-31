<?php

use App\Models\Destination;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('recits', function (Blueprint $table) {
            // Assuming Destination model has 'id' as the primary key
            $table->foreignId('destinationID')->constrained('destinations')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recits', function (Blueprint $table) {
            $table->dropForeign(['destinationID']);
        });
    }
};