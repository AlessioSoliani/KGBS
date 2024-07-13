<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            //tabella annunci voglio che tu crei un numero sempre positivo('unsigned') di grandi dimensioni e che sia chiamato category_id che potrebbe essere nullable perché stiamo aggiungendo una migration ad un progetto che è già in corso perche dobbiamo dare la possibilità al DB di gestire tutti i  campi precedentemente creati che non avevano già il campo category_id quindi in quei campi adesso risulterà il valore (nullable)
            $table->unsignedBigInteger('category_id')->nullable()->after('cost');
            //stiamo dicendo al DB che questo campo appena creato è una foreign-key che fa rifferimendo all'(id) sulla tabella categories e che all'eliminazione eventuale di una categoria dal DB il campo nella tabella events dovrà diventare nullable 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
