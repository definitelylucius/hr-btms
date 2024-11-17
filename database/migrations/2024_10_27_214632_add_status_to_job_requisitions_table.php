<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToJobRequisitionsTable extends Migration
{
    public function up()
    {
        Schema::table('job_requisitions', function (Blueprint $table) {
            $table->string('status')->default('open'); // Add default value if needed
        });
    }

    public function down()
    {
        Schema::table('job_requisitions', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
