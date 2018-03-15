<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateDistrictTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('districts', function (Blueprint $table) {
                $table->string('id');
                $table->string('province_id');
                $table->string('code');
                $table->string('type');
                $table->string('slug');
                $table->string('path');
                $table->string('path_with_type');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('districts');
        }
    }
