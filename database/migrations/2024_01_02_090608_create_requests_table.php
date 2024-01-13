<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    

    public function up(): void
    {


      Schema::disableForeignKeyConstraints();


        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            
            $table->unsignedBigInteger('embass_id');
            $table->unsignedBigInteger('visa_id');

            $table->foreign('embass_id')->references('id')->on('embasss');
            $table->foreign('visa_id')->references('id')->on('visa_types');
            
            $table->string('video')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
//////////////////////////////////////////////
// في ملف `app/Models/User.php`

//public function embassy()
//{
  //  return $this->belongsTo('App\Models\Embassy');
//}

// في ملف `app/Models/User.php`

//public function visaType()
//{
  //  return $this->belongsTo('App\Models\VisaType');
//}
