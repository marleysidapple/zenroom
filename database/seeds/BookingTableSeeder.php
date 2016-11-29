<?php

use App\Booking;
use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $start_date = date('Y-m-d');
        $start_time = strtotime($start_date);

        $end_time = strtotime("+2 month", $start_time);

        for ($i = $start_time; $i < $end_time; $i += 86400) {
            $list[]     = date('l', $i);
            $day[]      = date('j', $i);
            $fullDate[] = date('Y-m-d', $i);

            Booking::create([
                'date'           => strtotime(date('Y-m-d', $i)),
                'type'           => 'single',
                'available_room' => 2,
                'price'          => '3000',
            ]);

              Booking::create([
                'date'           => strtotime(date('Y-m-d', $i)),
                'type'           => 'double',
                'available_room' => 3,
                'price'          => '4500',
            ]);

        }

    }
}
