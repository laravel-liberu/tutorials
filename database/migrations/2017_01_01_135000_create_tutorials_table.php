<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->id();

            $table->foreignId('permission_id')->constrained()->name('tutorials_permission_id_foreign')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('element');
            $table->string('title');
            $table->text('content', 65535);
            $table->tinyInteger('placement');
            $table->integer('order_index');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tutorials');
    }
};
