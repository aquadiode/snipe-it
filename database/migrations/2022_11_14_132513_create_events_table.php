<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('event_color')->nullable(); //correlate with event_type or allow custom
            $table->json('event_text')->nullable();
            $table->string('event_type')->nullable(); //pickup, reservation, meeting, maintenance
            $table->string('associated_type')->nullable(); //e.g. hardware, consumables, requestable
            $table->date('event_start')->nullable();
            $table->date('event_end')->nullable();
            $table->integer('buffer_pre')->nullable(); //e.g. 30
            $table->integer('buffer_post')->nullable(); //e.g. 90
            $table->string('buffer_units')->nullable();  //e.g. minutes
            $table->json('user_roles')->nullable(); //e.g. user_ID: requestor, user_ID: booking_agent
            $table->date('date_requested')->nullable();
            $table->string('requested_by')->nullable();  //userID
            $table->json('permission_roles')->nullable(); //who can edit this event
            $table->json('recurring_event')->nullable(); //graphAPI recurrence spec: https://learn.microsoft.com/en-us/graph/outlook-schedule-recurring-events
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
