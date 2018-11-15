<?php

use Illuminate\Database\Seeder;
use App\Friend;
class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// friends 테이블 비우기
        Friend::truncate();

        $faker = \Faker\Factory::create();

        //가짜(임시) 데이터 생성
        for( $i=0; $i < 100; $i++ ) {
        	Friend::create([
        		"name" => $faker->name,
        		"city" => $faker->city,
        		"phone" => $faker->phoneNumber,
        		"email" => $faker->email,
        	]);
        }
    }
}
