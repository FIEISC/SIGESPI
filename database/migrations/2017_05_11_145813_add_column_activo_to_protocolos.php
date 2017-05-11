<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnActivoToProtocolos extends Migration
{
 
    public function up()
    {
        Schema::table('protocolos', function (Blueprint $table) {
            $table->string('activo')->after('semestre')->default(1);
        });
    }

    public function down()
    {
        Schema::table('protocolos', function (Blueprint $table) {
            $table->dropColumn('activo');
        });
    }
}
