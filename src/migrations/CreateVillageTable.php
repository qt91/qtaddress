<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateVillageTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('villages', function (Blueprint $table) {
                $table->string('id');
                $table->string('district_id');
                $table->string('code');
                $table->string('name');
                $table->string('type');
                $table->string('slug');
                $table->string('name_with_type');
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
            Schema::dropIfExists('villages');
        }
    }
