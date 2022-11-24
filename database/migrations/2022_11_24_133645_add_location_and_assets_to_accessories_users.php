<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationAndAssetsToAccessoriesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accessories_users', function (Blueprint $table) {
            $table->text("assigned_type")->nullable()->default(null);
            $table->text("location_id")->nullable()->default(null);
            $table->text("rtd_location_id")->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accessories_users', function (Blueprint $table) {
            if (Schema::hasColumn('accessories_users', 'assigned_type')) {
                $table->dropColumn('assigned_type');
            }
            if (Schema::hasColumn('accessories_users', 'location_id')) {
                $table->dropColumn('location_id');
            }
            if (Schema::hasColumn('accessories_users', 'rtd_location_id')) {
                $table->dropColumn('rtd_location_id');
            }
        });
    }
}
