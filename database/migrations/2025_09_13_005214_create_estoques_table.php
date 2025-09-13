<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->string('nomeprod');
            $table->string('marcaprod');
            $table->string('descprod');
            $table->integer('qtdprod');
            $table->datatime('dtentradaprod');
            $table->datatime('dtsaidaprod');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};
