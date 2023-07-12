<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        CREATE TRIGGER id_store BEFORE INSERT ON bookings FOR EACH ROW
            BEGIN
                INSERT INTO sequence_tbls VALUES (NULL);
                SET NEW.bkg_id = CONCAT ("BKG-", LPAD(LAST_INSERT_ID(),8,"0"));
            END
        '); 
    }
    /**
     * LPAD() is used to left-pad a string with a specific character to a certain length. In this case, it left-pads the LAST_INSERT_ID() value with zeros to a total length of 8 characters.
     */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER "id_store"');
        Schema::dropIfExists('bookings');
    }
};
