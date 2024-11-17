<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    
    Schema::create('job_requisitions', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('department');
        $table->integer('vacancies'); // Define this first
        $table->decimal('salary_min', 10, 2); // No need for 'after'
        $table->decimal('salary_max', 10, 2); // No need for 'after'
        $table->text('description');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('job_requisitions'); // Drop the entire table when rolling back
}
    
};
