<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $categories = ['Culto e Adorazione','Educazione e Crescita Spirituale','Servizio e Missione','Eventi Familiari e Comunitari','Eventi Speciali','Sostenibilità e Ambiente','Salute e Benessere','Arte e cultura','Comunità e Relazioni','Formazione e Leadership'];
        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }
    }

    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
