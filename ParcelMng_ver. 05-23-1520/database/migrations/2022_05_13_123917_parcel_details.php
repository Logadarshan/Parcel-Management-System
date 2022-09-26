<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ParcelDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_details', function (Blueprint $table) {

            $table->string('p_id');
            $table->date('collect_date')->nullable();
            $table->date('receive_date')->nullable();
            $table->date('ready_date')->nullable();
            $table->string('student_receive_date')->nullable();


            $table->foreign('p_id')->references('p_id')->on('parcels');
        });

        DB::table('parcel_details')->insert([
            ['p_id' => 'P01', 'collect_date' => '2020-09-04', 'receive_date' => '2020-09-03', 'ready_date' => '2020-09-07', 'student_receive_date' => NULL],
            ['p_id' => 'P02', 'collect_date' => '2020-10-03', 'receive_date' => '2020-10-02', 'ready_date' => '2020-10-03', 'student_receive_date' => NULL],
            ['p_id' => 'P03', 'collect_date' => '2020-11-07', 'receive_date' => '2020-11-06', 'ready_date' => '2020-11-11', 'student_receive_date' => NULL],
            ['p_id' => 'P04', 'collect_date' => '2020-11-11', 'receive_date' => '2020-11-10', 'ready_date' => '2020-11-11', 'student_receive_date' => NULL],
            ['p_id' => 'P05', 'collect_date' => '2020-12-03', 'receive_date' => '2020-12-02', 'ready_date' => '2020-12-04', 'student_receive_date' => NULL],
            ['p_id' => 'P06', 'collect_date' => '2020-12-21', 'receive_date' => '2020-12-20', 'ready_date' => '2020-12-22', 'student_receive_date' => NULL],
            ['p_id' => 'P07', 'collect_date' => '2020-12-23', 'receive_date' => '2020-12-22', 'ready_date' => '2020-12-30', 'student_receive_date' => NULL],
            ['p_id' => 'P08', 'collect_date' => '2020-12-24', 'receive_date' => '2020-12-23', 'ready_date' => '2020-12-30', 'student_receive_date' => NULL],
            ['p_id' => 'P09', 'collect_date' => '2021-01-06', 'receive_date' => '2021-01-05', 'ready_date' => '2021-01-07', 'student_receive_date' => '2021-01-08'],
            ['p_id' => 'P10', 'collect_date' => '2021-01-11', 'receive_date' => '2021-01-10', 'ready_date' => '2021-01-12', 'student_receive_date' => '2021-01-13'],
            ['p_id' => 'P11', 'collect_date' => '2021-01-12', 'receive_date' => '2021-01-11', 'ready_date' => NULL, 'student_receive_date' => NULL],
            ['p_id' => 'P12', 'collect_date' => '2021-02-22', 'receive_date' => '2021-02-21', 'ready_date' => '2021-02-23', 'student_receive_date' => NULL],
            ['p_id' => 'P13', 'collect_date' => '2021-02-23', 'receive_date' => '2021-02-22', 'ready_date' => '2021-02-24', 'student_receive_date' => NULL],
            ['p_id' => 'P14', 'collect_date' => '2021-02-24', 'receive_date' => '2021-02-23', 'ready_date' => NULL, 'student_receive_date' => NULL],
            ['p_id' => 'P15', 'collect_date' => '2021-03-05', 'receive_date' => '2021-03-04', 'ready_date' => '2021-03-06', 'student_receive_date' => '2021-03-07'],
            ['p_id' => 'P16', 'collect_date' => '2021-03-16', 'receive_date' => '2021-03-15', 'ready_date' => '2021-03-17', 'student_receive_date' => '2021-03-18'],
            ['p_id' => 'P17', 'collect_date' => '2021-03-17', 'receive_date' => '2021-03-16', 'ready_date' => NULL, 'student_receive_date' => NULL],
            ['p_id' => 'P18', 'collect_date' => '2021-04-22', 'receive_date' => '2021-04-21', 'ready_date' => '2021-04-23', 'student_receive_date' => '2021-04-23'],
            ['p_id' => 'P19', 'collect_date' => NULL, 'receive_date' => '2021-04-22', 'ready_date' => NULL, 'student_receive_date' => NULL],
            ['p_id' => 'P20', 'collect_date' => NULL, 'receive_date' => '2021-04-23', 'ready_date' => NULL, 'student_receive_date' => NULL]



        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcel_details');
    }
}