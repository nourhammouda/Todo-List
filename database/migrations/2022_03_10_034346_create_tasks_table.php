<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('owner_id'); // Delete this we're going to use first method
           // $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade'); should be on another case 
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->string('title'); // name it 'title' no big letters better & shouldn't be unique ->should be small
            $table->longText('description');
            $table->boolean('done');//  it was be "isDo" nam it done 'done' its better
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
        Schema::dropIfExists('tasks');
    }
};
