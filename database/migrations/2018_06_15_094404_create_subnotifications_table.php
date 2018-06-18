<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubnotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subnotifications', function (Blueprint $table) {
            // primary key
            $table->increments('id');

            // notifications.id
            $table->uuid('notification_id');

            // notifiable_id and notifiable_type
            $table->morphs('notifiable');

            // follower - read_at
            $table->timestamp('read_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subnotifications');
    }
}
