<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ratings')->delete();
        
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'movie_id' => 1,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:13',
                'updated_at' => '2022-07-05 15:42:13',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'movie_id' => 1,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:13',
                'updated_at' => '2022-07-05 15:42:13',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'movie_id' => 1,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:13',
                'updated_at' => '2022-07-05 15:42:13',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 5,
                'movie_id' => 1,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:42:13',
                'updated_at' => '2022-07-05 15:42:13',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 6,
                'movie_id' => 1,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:14',
                'updated_at' => '2022-07-05 15:42:14',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 7,
                'movie_id' => 1,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:14',
                'updated_at' => '2022-07-05 15:42:14',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 8,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:14',
                'updated_at' => '2022-07-05 15:42:14',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 9,
                'movie_id' => 1,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:14',
                'updated_at' => '2022-07-05 15:42:14',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 10,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:14',
                'updated_at' => '2022-07-05 15:42:14',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 11,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:14',
                'updated_at' => '2022-07-05 15:42:14',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 12,
                'movie_id' => 1,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:15',
                'updated_at' => '2022-07-05 15:42:15',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 13,
                'movie_id' => 1,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:15',
                'updated_at' => '2022-07-05 15:42:15',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 14,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:15',
                'updated_at' => '2022-07-05 15:42:15',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 15,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:15',
                'updated_at' => '2022-07-05 15:42:15',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 16,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:15',
                'updated_at' => '2022-07-05 15:42:15',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 17,
                'movie_id' => 1,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:15',
                'updated_at' => '2022-07-05 15:42:15',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 18,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:15',
                'updated_at' => '2022-07-05 15:42:15',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 19,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:16',
                'updated_at' => '2022-07-05 15:42:16',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 20,
                'movie_id' => 1,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:16',
                'updated_at' => '2022-07-05 15:42:16',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 21,
                'movie_id' => 1,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:16',
                'updated_at' => '2022-07-05 15:42:16',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 22,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:17',
                'updated_at' => '2022-07-05 15:42:17',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 23,
                'movie_id' => 1,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:17',
                'updated_at' => '2022-07-05 15:42:17',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 24,
                'movie_id' => 1,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:17',
                'updated_at' => '2022-07-05 15:42:17',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 25,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:18',
                'updated_at' => '2022-07-05 15:42:18',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 26,
                'movie_id' => 1,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:42:18',
                'updated_at' => '2022-07-05 15:42:18',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 27,
                'movie_id' => 1,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:18',
                'updated_at' => '2022-07-05 15:42:18',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 28,
                'movie_id' => 1,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:42:18',
                'updated_at' => '2022-07-05 15:42:18',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 29,
                'movie_id' => 1,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:19',
                'updated_at' => '2022-07-05 15:42:19',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 30,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:19',
                'updated_at' => '2022-07-05 15:42:19',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 31,
                'movie_id' => 1,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:19',
                'updated_at' => '2022-07-05 15:42:19',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 32,
                'movie_id' => 1,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:19',
                'updated_at' => '2022-07-05 15:42:19',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 33,
                'movie_id' => 1,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:20',
                'updated_at' => '2022-07-05 15:42:20',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 34,
                'movie_id' => 1,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:21',
                'updated_at' => '2022-07-05 15:42:21',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 35,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:21',
                'updated_at' => '2022-07-05 15:42:21',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 36,
                'movie_id' => 1,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:22',
                'updated_at' => '2022-07-05 15:42:22',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 37,
                'movie_id' => 1,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:22',
                'updated_at' => '2022-07-05 15:42:22',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 38,
                'movie_id' => 1,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:22',
                'updated_at' => '2022-07-05 15:42:22',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 39,
                'movie_id' => 1,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:22',
                'updated_at' => '2022-07-05 15:42:22',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 40,
                'movie_id' => 1,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:22',
                'updated_at' => '2022-07-05 15:42:22',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 41,
                'movie_id' => 1,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:23',
                'updated_at' => '2022-07-05 15:42:23',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 42,
                'movie_id' => 1,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:23',
                'updated_at' => '2022-07-05 15:42:23',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 43,
                'movie_id' => 1,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:23',
                'updated_at' => '2022-07-05 15:42:23',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 44,
                'movie_id' => 2,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:23',
                'updated_at' => '2022-07-05 15:42:23',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 45,
                'movie_id' => 2,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:24',
                'updated_at' => '2022-07-05 15:42:24',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 46,
                'movie_id' => 2,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:24',
                'updated_at' => '2022-07-05 15:42:24',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 3,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:24',
                'updated_at' => '2022-07-05 15:42:24',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 8,
                'movie_id' => 2,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:24',
                'updated_at' => '2022-07-05 15:42:24',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 9,
                'movie_id' => 2,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:42:24',
                'updated_at' => '2022-07-05 15:42:24',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 13,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:25',
                'updated_at' => '2022-07-05 15:42:25',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 47,
                'movie_id' => 2,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:42:25',
                'updated_at' => '2022-07-05 15:42:25',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 48,
                'movie_id' => 2,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:25',
                'updated_at' => '2022-07-05 15:42:25',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 49,
                'movie_id' => 2,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:25',
                'updated_at' => '2022-07-05 15:42:25',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 50,
                'movie_id' => 2,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:26',
                'updated_at' => '2022-07-05 15:42:26',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 51,
                'movie_id' => 2,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:26',
                'updated_at' => '2022-07-05 15:42:26',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 21,
                'movie_id' => 2,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:26',
                'updated_at' => '2022-07-05 15:42:26',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 52,
                'movie_id' => 2,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:26',
                'updated_at' => '2022-07-05 15:42:26',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 53,
                'movie_id' => 2,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:27',
                'updated_at' => '2022-07-05 15:42:27',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 25,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:27',
                'updated_at' => '2022-07-05 15:42:27',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 54,
                'movie_id' => 2,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:42:27',
                'updated_at' => '2022-07-05 15:42:27',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 55,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:27',
                'updated_at' => '2022-07-05 15:42:27',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 56,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:27',
                'updated_at' => '2022-07-05 15:42:27',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 57,
                'movie_id' => 2,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:28',
                'updated_at' => '2022-07-05 15:42:28',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 58,
                'movie_id' => 2,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:28',
                'updated_at' => '2022-07-05 15:42:28',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 31,
                'movie_id' => 2,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:28',
                'updated_at' => '2022-07-05 15:42:28',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 59,
                'movie_id' => 2,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:28',
                'updated_at' => '2022-07-05 15:42:28',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 60,
                'movie_id' => 2,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:28',
                'updated_at' => '2022-07-05 15:42:28',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 61,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:29',
                'updated_at' => '2022-07-05 15:42:29',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 62,
                'movie_id' => 2,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:42:29',
                'updated_at' => '2022-07-05 15:42:29',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 63,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:29',
                'updated_at' => '2022-07-05 15:42:29',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 40,
                'movie_id' => 2,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:29',
                'updated_at' => '2022-07-05 15:42:29',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 64,
                'movie_id' => 2,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:29',
                'updated_at' => '2022-07-05 15:42:29',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 42,
                'movie_id' => 2,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:29',
                'updated_at' => '2022-07-05 15:42:29',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 65,
                'movie_id' => 2,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:30',
                'updated_at' => '2022-07-05 15:42:30',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 66,
                'movie_id' => 2,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:30',
                'updated_at' => '2022-07-05 15:42:30',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 67,
                'movie_id' => 3,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:42:30',
                'updated_at' => '2022-07-05 15:42:30',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 68,
                'movie_id' => 3,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:30',
                'updated_at' => '2022-07-05 15:42:30',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 69,
                'movie_id' => 3,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:30',
                'updated_at' => '2022-07-05 15:42:30',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 49,
                'movie_id' => 3,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:30',
                'updated_at' => '2022-07-05 15:42:30',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 70,
                'movie_id' => 3,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:42:31',
                'updated_at' => '2022-07-05 15:42:31',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 16,
                'movie_id' => 3,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:31',
                'updated_at' => '2022-07-05 15:42:31',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 71,
                'movie_id' => 3,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:42:31',
                'updated_at' => '2022-07-05 15:42:31',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 72,
                'movie_id' => 3,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:31',
                'updated_at' => '2022-07-05 15:42:31',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 21,
                'movie_id' => 3,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:31',
                'updated_at' => '2022-07-05 15:42:31',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 73,
                'movie_id' => 3,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:31',
                'updated_at' => '2022-07-05 15:42:31',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 74,
                'movie_id' => 3,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:32',
                'updated_at' => '2022-07-05 15:42:32',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 75,
                'movie_id' => 3,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:32',
                'updated_at' => '2022-07-05 15:42:32',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 76,
                'movie_id' => 3,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:32',
                'updated_at' => '2022-07-05 15:42:32',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 77,
                'movie_id' => 3,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:32',
                'updated_at' => '2022-07-05 15:42:32',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 78,
                'movie_id' => 3,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:32',
                'updated_at' => '2022-07-05 15:42:32',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 79,
                'movie_id' => 3,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:32',
                'updated_at' => '2022-07-05 15:42:32',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 80,
                'movie_id' => 3,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:32',
                'updated_at' => '2022-07-05 15:42:32',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 57,
                'movie_id' => 3,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:33',
                'updated_at' => '2022-07-05 15:42:33',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 58,
                'movie_id' => 3,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:33',
                'updated_at' => '2022-07-05 15:42:33',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 81,
                'movie_id' => 3,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:33',
                'updated_at' => '2022-07-05 15:42:33',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 82,
                'movie_id' => 3,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:33',
                'updated_at' => '2022-07-05 15:42:33',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 83,
                'movie_id' => 3,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:33',
                'updated_at' => '2022-07-05 15:42:33',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 40,
                'movie_id' => 3,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:42:33',
                'updated_at' => '2022-07-05 15:42:33',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 84,
                'movie_id' => 3,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:34',
                'updated_at' => '2022-07-05 15:42:34',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 85,
                'movie_id' => 3,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:34',
                'updated_at' => '2022-07-05 15:42:34',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 86,
                'movie_id' => 3,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:42:34',
                'updated_at' => '2022-07-05 15:42:34',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 87,
                'movie_id' => 3,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:34',
                'updated_at' => '2022-07-05 15:42:34',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 88,
                'movie_id' => 3,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:42:34',
                'updated_at' => '2022-07-05 15:42:34',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 89,
                'movie_id' => 4,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:34',
                'updated_at' => '2022-07-05 15:42:34',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 90,
                'movie_id' => 4,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:34',
                'updated_at' => '2022-07-05 15:42:34',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 8,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:35',
                'updated_at' => '2022-07-05 15:42:35',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 91,
                'movie_id' => 4,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:35',
                'updated_at' => '2022-07-05 15:42:35',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 92,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:35',
                'updated_at' => '2022-07-05 15:42:35',
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => 93,
                'movie_id' => 4,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:35',
                'updated_at' => '2022-07-05 15:42:35',
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => 94,
                'movie_id' => 4,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:35',
                'updated_at' => '2022-07-05 15:42:35',
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => 95,
                'movie_id' => 4,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:35',
                'updated_at' => '2022-07-05 15:42:35',
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => 96,
                'movie_id' => 4,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:36',
                'updated_at' => '2022-07-05 15:42:36',
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => 70,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:36',
                'updated_at' => '2022-07-05 15:42:36',
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => 17,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:36',
                'updated_at' => '2022-07-05 15:42:36',
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => 97,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:36',
                'updated_at' => '2022-07-05 15:42:36',
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => 98,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:36',
                'updated_at' => '2022-07-05 15:42:36',
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => 79,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:36',
                'updated_at' => '2022-07-05 15:42:36',
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => 99,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:36',
                'updated_at' => '2022-07-05 15:42:36',
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => 58,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:37',
                'updated_at' => '2022-07-05 15:42:37',
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => 100,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:37',
                'updated_at' => '2022-07-05 15:42:37',
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => 101,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:37',
                'updated_at' => '2022-07-05 15:42:37',
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => 60,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:37',
                'updated_at' => '2022-07-05 15:42:37',
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => 61,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:37',
                'updated_at' => '2022-07-05 15:42:37',
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => 102,
                'movie_id' => 4,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:37',
                'updated_at' => '2022-07-05 15:42:37',
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => 103,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:37',
                'updated_at' => '2022-07-05 15:42:37',
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => 40,
                'movie_id' => 4,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:38',
                'updated_at' => '2022-07-05 15:42:38',
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => 104,
                'movie_id' => 4,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:38',
                'updated_at' => '2022-07-05 15:42:38',
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => 105,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:38',
                'updated_at' => '2022-07-05 15:42:38',
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => 106,
                'movie_id' => 4,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:38',
                'updated_at' => '2022-07-05 15:42:38',
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => 107,
                'movie_id' => 4,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:38',
                'updated_at' => '2022-07-05 15:42:38',
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => 108,
                'movie_id' => 5,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:39',
                'updated_at' => '2022-07-05 15:42:39',
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => 109,
                'movie_id' => 5,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:39',
                'updated_at' => '2022-07-05 15:42:39',
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => 45,
                'movie_id' => 5,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:39',
                'updated_at' => '2022-07-05 15:42:39',
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => 110,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:39',
                'updated_at' => '2022-07-05 15:42:39',
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => 111,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:39',
                'updated_at' => '2022-07-05 15:42:39',
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => 112,
                'movie_id' => 5,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:42:39',
                'updated_at' => '2022-07-05 15:42:39',
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => 113,
                'movie_id' => 5,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:40',
                'updated_at' => '2022-07-05 15:42:40',
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => 114,
                'movie_id' => 5,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:40',
                'updated_at' => '2022-07-05 15:42:40',
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => 115,
                'movie_id' => 5,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:40',
                'updated_at' => '2022-07-05 15:42:40',
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => 116,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:40',
                'updated_at' => '2022-07-05 15:42:40',
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => 91,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:40',
                'updated_at' => '2022-07-05 15:42:40',
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => 117,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:40',
                'updated_at' => '2022-07-05 15:42:40',
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => 118,
                'movie_id' => 5,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:41',
                'updated_at' => '2022-07-05 15:42:41',
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => 119,
                'movie_id' => 5,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:41',
                'updated_at' => '2022-07-05 15:42:41',
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => 120,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:41',
                'updated_at' => '2022-07-05 15:42:41',
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => 121,
                'movie_id' => 5,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:41',
                'updated_at' => '2022-07-05 15:42:41',
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => 122,
                'movie_id' => 5,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:41',
                'updated_at' => '2022-07-05 15:42:41',
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => 123,
                'movie_id' => 5,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:42',
                'updated_at' => '2022-07-05 15:42:42',
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => 124,
                'movie_id' => 5,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:42:42',
                'updated_at' => '2022-07-05 15:42:42',
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => 125,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:42',
                'updated_at' => '2022-07-05 15:42:42',
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => 126,
                'movie_id' => 5,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:42',
                'updated_at' => '2022-07-05 15:42:42',
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => 127,
                'movie_id' => 5,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:42',
                'updated_at' => '2022-07-05 15:42:42',
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => 128,
                'movie_id' => 5,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:42',
                'updated_at' => '2022-07-05 15:42:42',
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => 79,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:43',
                'updated_at' => '2022-07-05 15:42:43',
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => 129,
                'movie_id' => 5,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:43',
                'updated_at' => '2022-07-05 15:42:43',
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => 99,
                'movie_id' => 5,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:43',
                'updated_at' => '2022-07-05 15:42:43',
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => 130,
                'movie_id' => 5,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:43',
                'updated_at' => '2022-07-05 15:42:43',
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => 58,
                'movie_id' => 5,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:43',
                'updated_at' => '2022-07-05 15:42:43',
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => 131,
                'movie_id' => 5,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:44',
                'updated_at' => '2022-07-05 15:42:44',
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => 132,
                'movie_id' => 5,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:44',
                'updated_at' => '2022-07-05 15:42:44',
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => 40,
                'movie_id' => 5,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:44',
                'updated_at' => '2022-07-05 15:42:44',
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => 133,
                'movie_id' => 5,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:44',
                'updated_at' => '2022-07-05 15:42:44',
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => 134,
                'movie_id' => 5,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:44',
                'updated_at' => '2022-07-05 15:42:44',
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => 64,
                'movie_id' => 5,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:42:44',
                'updated_at' => '2022-07-05 15:42:44',
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => 135,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:45',
                'updated_at' => '2022-07-05 15:42:45',
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => 136,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:45',
                'updated_at' => '2022-07-05 15:42:45',
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => 65,
                'movie_id' => 5,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:45',
                'updated_at' => '2022-07-05 15:42:45',
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => 137,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:45',
                'updated_at' => '2022-07-05 15:42:45',
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => 138,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:45',
                'updated_at' => '2022-07-05 15:42:45',
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => 139,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:46',
                'updated_at' => '2022-07-05 15:42:46',
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => 90,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:46',
                'updated_at' => '2022-07-05 15:42:46',
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => 140,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:46',
                'updated_at' => '2022-07-05 15:42:46',
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => 44,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:46',
                'updated_at' => '2022-07-05 15:42:46',
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => 141,
                'movie_id' => 6,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:47',
                'updated_at' => '2022-07-05 15:42:47',
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => 142,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:47',
                'updated_at' => '2022-07-05 15:42:47',
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => 143,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:47',
                'updated_at' => '2022-07-05 15:42:47',
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => 144,
                'movie_id' => 6,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:47',
                'updated_at' => '2022-07-05 15:42:47',
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => 145,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:47',
                'updated_at' => '2022-07-05 15:42:47',
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => 146,
                'movie_id' => 6,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:48',
                'updated_at' => '2022-07-05 15:42:48',
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => 147,
                'movie_id' => 6,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:48',
                'updated_at' => '2022-07-05 15:42:48',
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => 123,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:48',
                'updated_at' => '2022-07-05 15:42:48',
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => 124,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:48',
                'updated_at' => '2022-07-05 15:42:48',
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => 49,
                'movie_id' => 6,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:48',
                'updated_at' => '2022-07-05 15:42:48',
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => 148,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:48',
                'updated_at' => '2022-07-05 15:42:48',
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => 97,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:49',
                'updated_at' => '2022-07-05 15:42:49',
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => 149,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:49',
                'updated_at' => '2022-07-05 15:42:49',
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => 150,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:49',
                'updated_at' => '2022-07-05 15:42:49',
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => 151,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:49',
                'updated_at' => '2022-07-05 15:42:49',
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => 152,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:49',
                'updated_at' => '2022-07-05 15:42:49',
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => 153,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:50',
                'updated_at' => '2022-07-05 15:42:50',
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => 154,
                'movie_id' => 6,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:50',
                'updated_at' => '2022-07-05 15:42:50',
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => 79,
                'movie_id' => 6,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:50',
                'updated_at' => '2022-07-05 15:42:50',
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => 155,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:50',
                'updated_at' => '2022-07-05 15:42:50',
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => 156,
                'movie_id' => 6,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:50',
                'updated_at' => '2022-07-05 15:42:50',
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => 157,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:51',
                'updated_at' => '2022-07-05 15:42:51',
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => 60,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:51',
                'updated_at' => '2022-07-05 15:42:51',
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => 158,
                'movie_id' => 6,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:51',
                'updated_at' => '2022-07-05 15:42:51',
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => 159,
                'movie_id' => 6,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:51',
                'updated_at' => '2022-07-05 15:42:51',
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => 160,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:52',
                'updated_at' => '2022-07-05 15:42:52',
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => 161,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:52',
                'updated_at' => '2022-07-05 15:42:52',
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => 162,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:52',
                'updated_at' => '2022-07-05 15:42:52',
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => 134,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:52',
                'updated_at' => '2022-07-05 15:42:52',
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => 84,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:53',
                'updated_at' => '2022-07-05 15:42:53',
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => 65,
                'movie_id' => 6,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:53',
                'updated_at' => '2022-07-05 15:42:53',
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => 105,
                'movie_id' => 6,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:54',
                'updated_at' => '2022-07-05 15:42:54',
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => 44,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:54',
                'updated_at' => '2022-07-05 15:42:54',
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => 163,
                'movie_id' => 7,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:55',
                'updated_at' => '2022-07-05 15:42:55',
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => 164,
                'movie_id' => 7,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:55',
                'updated_at' => '2022-07-05 15:42:55',
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => 165,
                'movie_id' => 7,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:55',
                'updated_at' => '2022-07-05 15:42:55',
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => 8,
                'movie_id' => 7,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:56',
                'updated_at' => '2022-07-05 15:42:56',
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => 116,
                'movie_id' => 7,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:56',
                'updated_at' => '2022-07-05 15:42:56',
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => 166,
                'movie_id' => 7,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:42:56',
                'updated_at' => '2022-07-05 15:42:56',
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => 167,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:56',
                'updated_at' => '2022-07-05 15:42:56',
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => 168,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:57',
                'updated_at' => '2022-07-05 15:42:57',
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => 47,
                'movie_id' => 7,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:57',
                'updated_at' => '2022-07-05 15:42:57',
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => 69,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:57',
                'updated_at' => '2022-07-05 15:42:57',
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => 14,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:57',
                'updated_at' => '2022-07-05 15:42:57',
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => 169,
                'movie_id' => 7,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:42:57',
                'updated_at' => '2022-07-05 15:42:57',
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => 170,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:58',
                'updated_at' => '2022-07-05 15:42:58',
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => 49,
                'movie_id' => 7,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:42:58',
                'updated_at' => '2022-07-05 15:42:58',
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => 171,
                'movie_id' => 7,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:58',
                'updated_at' => '2022-07-05 15:42:58',
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => 21,
                'movie_id' => 7,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:42:58',
                'updated_at' => '2022-07-05 15:42:58',
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => 75,
                'movie_id' => 7,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:59',
                'updated_at' => '2022-07-05 15:42:59',
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => 172,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:42:59',
                'updated_at' => '2022-07-05 15:42:59',
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => 173,
                'movie_id' => 7,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:42:59',
                'updated_at' => '2022-07-05 15:42:59',
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => 55,
                'movie_id' => 7,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:42:59',
                'updated_at' => '2022-07-05 15:42:59',
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => 29,
                'movie_id' => 7,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:42:59',
                'updated_at' => '2022-07-05 15:42:59',
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => 82,
                'movie_id' => 7,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:42:59',
                'updated_at' => '2022-07-05 15:42:59',
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => 31,
                'movie_id' => 7,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:00',
                'updated_at' => '2022-07-05 15:43:00',
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => 174,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:00',
                'updated_at' => '2022-07-05 15:43:00',
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => 175,
                'movie_id' => 7,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:00',
                'updated_at' => '2022-07-05 15:43:00',
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => 60,
                'movie_id' => 7,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:00',
                'updated_at' => '2022-07-05 15:43:00',
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => 61,
                'movie_id' => 7,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:01',
                'updated_at' => '2022-07-05 15:43:01',
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => 36,
                'movie_id' => 7,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:01',
                'updated_at' => '2022-07-05 15:43:01',
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => 176,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:01',
                'updated_at' => '2022-07-05 15:43:01',
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => 160,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:01',
                'updated_at' => '2022-07-05 15:43:01',
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => 40,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:01',
                'updated_at' => '2022-07-05 15:43:01',
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => 64,
                'movie_id' => 7,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:02',
                'updated_at' => '2022-07-05 15:43:02',
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => 65,
                'movie_id' => 7,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:02',
                'updated_at' => '2022-07-05 15:43:02',
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => 177,
                'movie_id' => 7,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:02',
                'updated_at' => '2022-07-05 15:43:02',
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => 178,
                'movie_id' => 7,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:02',
                'updated_at' => '2022-07-05 15:43:02',
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => 68,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:02',
                'updated_at' => '2022-07-05 15:43:02',
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => 179,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:03',
                'updated_at' => '2022-07-05 15:43:03',
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => 140,
                'movie_id' => 8,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:03',
                'updated_at' => '2022-07-05 15:43:03',
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => 180,
                'movie_id' => 8,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:03',
                'updated_at' => '2022-07-05 15:43:03',
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => 112,
                'movie_id' => 8,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:03',
                'updated_at' => '2022-07-05 15:43:03',
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => 181,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:03',
                'updated_at' => '2022-07-05 15:43:03',
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => 182,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:03',
                'updated_at' => '2022-07-05 15:43:03',
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => 122,
                'movie_id' => 8,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:04',
                'updated_at' => '2022-07-05 15:43:04',
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => 47,
                'movie_id' => 8,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:04',
                'updated_at' => '2022-07-05 15:43:04',
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => 125,
                'movie_id' => 8,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:04',
                'updated_at' => '2022-07-05 15:43:04',
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => 183,
                'movie_id' => 8,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:04',
                'updated_at' => '2022-07-05 15:43:04',
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => 184,
                'movie_id' => 8,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:04',
                'updated_at' => '2022-07-05 15:43:04',
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => 79,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:05',
                'updated_at' => '2022-07-05 15:43:05',
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => 185,
                'movie_id' => 8,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:05',
                'updated_at' => '2022-07-05 15:43:05',
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => 186,
                'movie_id' => 8,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:05',
                'updated_at' => '2022-07-05 15:43:05',
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => 187,
                'movie_id' => 8,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:05',
                'updated_at' => '2022-07-05 15:43:05',
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => 30,
                'movie_id' => 8,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:05',
                'updated_at' => '2022-07-05 15:43:05',
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => 188,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:05',
                'updated_at' => '2022-07-05 15:43:05',
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => 159,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:06',
                'updated_at' => '2022-07-05 15:43:06',
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => 189,
                'movie_id' => 8,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:06',
                'updated_at' => '2022-07-05 15:43:06',
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => 190,
                'movie_id' => 8,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:06',
                'updated_at' => '2022-07-05 15:43:06',
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => 40,
                'movie_id' => 8,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:06',
                'updated_at' => '2022-07-05 15:43:06',
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => 191,
                'movie_id' => 8,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:06',
                'updated_at' => '2022-07-05 15:43:06',
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => 192,
                'movie_id' => 9,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:07',
                'updated_at' => '2022-07-05 15:43:07',
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => 193,
                'movie_id' => 9,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:07',
                'updated_at' => '2022-07-05 15:43:07',
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => 194,
                'movie_id' => 9,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:07',
                'updated_at' => '2022-07-05 15:43:07',
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => 195,
                'movie_id' => 9,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:43:07',
                'updated_at' => '2022-07-05 15:43:07',
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => 165,
                'movie_id' => 9,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:08',
                'updated_at' => '2022-07-05 15:43:08',
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => 196,
                'movie_id' => 9,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:08',
                'updated_at' => '2022-07-05 15:43:08',
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => 121,
                'movie_id' => 9,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:08',
                'updated_at' => '2022-07-05 15:43:08',
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => 197,
                'movie_id' => 9,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:08',
                'updated_at' => '2022-07-05 15:43:08',
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => 49,
                'movie_id' => 9,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:08',
                'updated_at' => '2022-07-05 15:43:08',
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => 16,
                'movie_id' => 9,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:09',
                'updated_at' => '2022-07-05 15:43:09',
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => 198,
                'movie_id' => 9,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:09',
                'updated_at' => '2022-07-05 15:43:09',
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => 171,
                'movie_id' => 9,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:09',
                'updated_at' => '2022-07-05 15:43:09',
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => 199,
                'movie_id' => 9,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:09',
                'updated_at' => '2022-07-05 15:43:09',
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => 21,
                'movie_id' => 9,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:09',
                'updated_at' => '2022-07-05 15:43:09',
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => 200,
                'movie_id' => 9,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:10',
                'updated_at' => '2022-07-05 15:43:10',
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => 24,
                'movie_id' => 9,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:10',
                'updated_at' => '2022-07-05 15:43:10',
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => 201,
                'movie_id' => 9,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:10',
                'updated_at' => '2022-07-05 15:43:10',
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => 81,
                'movie_id' => 9,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:10',
                'updated_at' => '2022-07-05 15:43:10',
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => 31,
                'movie_id' => 9,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:11',
                'updated_at' => '2022-07-05 15:43:11',
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => 202,
                'movie_id' => 9,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:11',
                'updated_at' => '2022-07-05 15:43:11',
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => 203,
                'movie_id' => 9,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:12',
                'updated_at' => '2022-07-05 15:43:12',
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => 40,
                'movie_id' => 9,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:12',
                'updated_at' => '2022-07-05 15:43:12',
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => 204,
                'movie_id' => 9,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:12',
                'updated_at' => '2022-07-05 15:43:12',
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => 64,
                'movie_id' => 9,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:12',
                'updated_at' => '2022-07-05 15:43:12',
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => 205,
                'movie_id' => 9,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:13',
                'updated_at' => '2022-07-05 15:43:13',
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => 65,
                'movie_id' => 9,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:13',
                'updated_at' => '2022-07-05 15:43:13',
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => 2,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:13',
                'updated_at' => '2022-07-05 15:43:13',
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => 206,
                'movie_id' => 10,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:14',
                'updated_at' => '2022-07-05 15:43:14',
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => 207,
                'movie_id' => 10,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:43:14',
                'updated_at' => '2022-07-05 15:43:14',
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => 208,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:14',
                'updated_at' => '2022-07-05 15:43:14',
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => 4,
                'movie_id' => 10,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:14',
                'updated_at' => '2022-07-05 15:43:14',
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => 5,
                'movie_id' => 10,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:15',
                'updated_at' => '2022-07-05 15:43:15',
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => 6,
                'movie_id' => 10,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:15',
                'updated_at' => '2022-07-05 15:43:15',
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => 209,
                'movie_id' => 10,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:15',
                'updated_at' => '2022-07-05 15:43:15',
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => 210,
                'movie_id' => 10,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:16',
                'updated_at' => '2022-07-05 15:43:16',
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => 211,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:16',
                'updated_at' => '2022-07-05 15:43:16',
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => 212,
                'movie_id' => 10,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:16',
                'updated_at' => '2022-07-05 15:43:16',
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => 213,
                'movie_id' => 10,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:17',
                'updated_at' => '2022-07-05 15:43:17',
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => 49,
                'movie_id' => 10,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:17',
                'updated_at' => '2022-07-05 15:43:17',
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => 214,
                'movie_id' => 10,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:17',
                'updated_at' => '2022-07-05 15:43:17',
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => 215,
                'movie_id' => 10,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:17',
                'updated_at' => '2022-07-05 15:43:17',
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => 216,
                'movie_id' => 10,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:18',
                'updated_at' => '2022-07-05 15:43:18',
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => 217,
                'movie_id' => 10,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:18',
                'updated_at' => '2022-07-05 15:43:18',
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => 19,
                'movie_id' => 10,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:18',
                'updated_at' => '2022-07-05 15:43:18',
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => 51,
                'movie_id' => 10,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:18',
                'updated_at' => '2022-07-05 15:43:18',
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => 127,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:18',
                'updated_at' => '2022-07-05 15:43:18',
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => 21,
                'movie_id' => 10,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:18',
                'updated_at' => '2022-07-05 15:43:18',
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => 218,
                'movie_id' => 10,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:19',
                'updated_at' => '2022-07-05 15:43:19',
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => 22,
                'movie_id' => 10,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:19',
                'updated_at' => '2022-07-05 15:43:19',
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => 74,
                'movie_id' => 10,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:19',
                'updated_at' => '2022-07-05 15:43:19',
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => 172,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:19',
                'updated_at' => '2022-07-05 15:43:19',
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => 27,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:19',
                'updated_at' => '2022-07-05 15:43:19',
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => 99,
                'movie_id' => 10,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:19',
                'updated_at' => '2022-07-05 15:43:19',
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => 219,
                'movie_id' => 10,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:20',
                'updated_at' => '2022-07-05 15:43:20',
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => 32,
                'movie_id' => 10,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:20',
                'updated_at' => '2022-07-05 15:43:20',
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => 174,
                'movie_id' => 10,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:20',
                'updated_at' => '2022-07-05 15:43:20',
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => 61,
                'movie_id' => 10,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:20',
                'updated_at' => '2022-07-05 15:43:20',
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => 35,
                'movie_id' => 10,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:20',
                'updated_at' => '2022-07-05 15:43:20',
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => 220,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:20',
                'updated_at' => '2022-07-05 15:43:20',
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => 38,
                'movie_id' => 10,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:21',
                'updated_at' => '2022-07-05 15:43:21',
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => 221,
                'movie_id' => 10,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:21',
                'updated_at' => '2022-07-05 15:43:21',
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => 42,
                'movie_id' => 10,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:21',
                'updated_at' => '2022-07-05 15:43:21',
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => 88,
                'movie_id' => 10,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:21',
                'updated_at' => '2022-07-05 15:43:21',
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => 222,
                'movie_id' => 11,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:21',
                'updated_at' => '2022-07-05 15:43:21',
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => 193,
                'movie_id' => 11,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:22',
                'updated_at' => '2022-07-05 15:43:22',
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => 140,
                'movie_id' => 11,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:22',
                'updated_at' => '2022-07-05 15:43:22',
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => 223,
                'movie_id' => 11,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:22',
                'updated_at' => '2022-07-05 15:43:22',
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => 224,
                'movie_id' => 11,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:22',
                'updated_at' => '2022-07-05 15:43:22',
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => 3,
                'movie_id' => 11,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:22',
                'updated_at' => '2022-07-05 15:43:22',
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => 209,
                'movie_id' => 11,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:22',
                'updated_at' => '2022-07-05 15:43:22',
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => 225,
                'movie_id' => 11,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:23',
                'updated_at' => '2022-07-05 15:43:23',
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => 226,
                'movie_id' => 11,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:23',
                'updated_at' => '2022-07-05 15:43:23',
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => 227,
                'movie_id' => 11,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:23',
                'updated_at' => '2022-07-05 15:43:23',
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => 48,
                'movie_id' => 11,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:23',
                'updated_at' => '2022-07-05 15:43:23',
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => 49,
                'movie_id' => 11,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:23',
                'updated_at' => '2022-07-05 15:43:23',
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => 228,
                'movie_id' => 11,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:23',
                'updated_at' => '2022-07-05 15:43:23',
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => 18,
                'movie_id' => 11,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:24',
                'updated_at' => '2022-07-05 15:43:24',
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => 50,
                'movie_id' => 11,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:24',
                'updated_at' => '2022-07-05 15:43:24',
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => 229,
                'movie_id' => 11,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:24',
                'updated_at' => '2022-07-05 15:43:24',
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => 230,
                'movie_id' => 11,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:24',
                'updated_at' => '2022-07-05 15:43:24',
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => 231,
                'movie_id' => 11,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:24',
                'updated_at' => '2022-07-05 15:43:24',
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => 232,
                'movie_id' => 11,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:25',
                'updated_at' => '2022-07-05 15:43:25',
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => 55,
                'movie_id' => 11,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:25',
                'updated_at' => '2022-07-05 15:43:25',
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => 219,
                'movie_id' => 11,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:25',
                'updated_at' => '2022-07-05 15:43:25',
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => 174,
                'movie_id' => 11,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:25',
                'updated_at' => '2022-07-05 15:43:25',
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => 233,
                'movie_id' => 11,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:25',
                'updated_at' => '2022-07-05 15:43:25',
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => 40,
                'movie_id' => 11,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:25',
                'updated_at' => '2022-07-05 15:43:25',
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => 234,
                'movie_id' => 11,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:26',
                'updated_at' => '2022-07-05 15:43:26',
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => 235,
                'movie_id' => 11,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:26',
                'updated_at' => '2022-07-05 15:43:26',
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => 236,
                'movie_id' => 11,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:26',
                'updated_at' => '2022-07-05 15:43:26',
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => 237,
                'movie_id' => 11,
                'rating' => 3.5,
                'created_at' => '2022-07-05 15:43:26',
                'updated_at' => '2022-07-05 15:43:26',
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => 238,
                'movie_id' => 11,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:26',
                'updated_at' => '2022-07-05 15:43:26',
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => 239,
                'movie_id' => 12,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:27',
                'updated_at' => '2022-07-05 15:43:27',
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => 90,
                'movie_id' => 12,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:27',
                'updated_at' => '2022-07-05 15:43:27',
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => 240,
                'movie_id' => 12,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:27',
                'updated_at' => '2022-07-05 15:43:27',
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => 241,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:27',
                'updated_at' => '2022-07-05 15:43:27',
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => 4,
                'movie_id' => 12,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:27',
                'updated_at' => '2022-07-05 15:43:27',
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => 242,
                'movie_id' => 12,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:27',
                'updated_at' => '2022-07-05 15:43:27',
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => 243,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:27',
                'updated_at' => '2022-07-05 15:43:27',
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => 113,
                'movie_id' => 12,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:28',
                'updated_at' => '2022-07-05 15:43:28',
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => 8,
                'movie_id' => 12,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:28',
                'updated_at' => '2022-07-05 15:43:28',
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => 244,
                'movie_id' => 12,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:28',
                'updated_at' => '2022-07-05 15:43:28',
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => 245,
                'movie_id' => 12,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:28',
                'updated_at' => '2022-07-05 15:43:28',
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => 94,
                'movie_id' => 12,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:28',
                'updated_at' => '2022-07-05 15:43:28',
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => 16,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:28',
                'updated_at' => '2022-07-05 15:43:28',
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => 17,
                'movie_id' => 12,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:29',
                'updated_at' => '2022-07-05 15:43:29',
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => 246,
                'movie_id' => 12,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:29',
                'updated_at' => '2022-07-05 15:43:29',
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => 247,
                'movie_id' => 12,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:29',
                'updated_at' => '2022-07-05 15:43:29',
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => 51,
                'movie_id' => 12,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:29',
                'updated_at' => '2022-07-05 15:43:29',
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => 248,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:29',
                'updated_at' => '2022-07-05 15:43:29',
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => 249,
                'movie_id' => 12,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:30',
                'updated_at' => '2022-07-05 15:43:30',
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => 250,
                'movie_id' => 12,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:30',
                'updated_at' => '2022-07-05 15:43:30',
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => 99,
                'movie_id' => 12,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:30',
                'updated_at' => '2022-07-05 15:43:30',
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => 57,
                'movie_id' => 12,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:30',
                'updated_at' => '2022-07-05 15:43:30',
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => 219,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:30',
                'updated_at' => '2022-07-05 15:43:30',
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => 61,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:31',
                'updated_at' => '2022-07-05 15:43:31',
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => 34,
                'movie_id' => 12,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:31',
                'updated_at' => '2022-07-05 15:43:31',
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => 103,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:31',
                'updated_at' => '2022-07-05 15:43:31',
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => 160,
                'movie_id' => 12,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:31',
                'updated_at' => '2022-07-05 15:43:31',
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => 133,
                'movie_id' => 12,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:32',
                'updated_at' => '2022-07-05 15:43:32',
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => 65,
                'movie_id' => 12,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:32',
                'updated_at' => '2022-07-05 15:43:32',
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => 43,
                'movie_id' => 12,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:32',
                'updated_at' => '2022-07-05 15:43:32',
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => 193,
                'movie_id' => 13,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:33',
                'updated_at' => '2022-07-05 15:43:33',
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => 44,
                'movie_id' => 13,
                'rating' => 3.5,
                'created_at' => '2022-07-05 15:43:33',
                'updated_at' => '2022-07-05 15:43:33',
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => 164,
                'movie_id' => 13,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:33',
                'updated_at' => '2022-07-05 15:43:33',
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => 251,
                'movie_id' => 13,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:33',
                'updated_at' => '2022-07-05 15:43:33',
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => 5,
                'movie_id' => 13,
                'rating' => 2.5,
                'created_at' => '2022-07-05 15:43:33',
                'updated_at' => '2022-07-05 15:43:33',
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => 252,
                'movie_id' => 13,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:43:34',
                'updated_at' => '2022-07-05 15:43:34',
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => 6,
                'movie_id' => 13,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:43:34',
                'updated_at' => '2022-07-05 15:43:34',
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => 253,
                'movie_id' => 13,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:34',
                'updated_at' => '2022-07-05 15:43:34',
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => 113,
                'movie_id' => 13,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:34',
                'updated_at' => '2022-07-05 15:43:34',
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => 244,
                'movie_id' => 13,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:34',
                'updated_at' => '2022-07-05 15:43:34',
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => 245,
                'movie_id' => 13,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:35',
                'updated_at' => '2022-07-05 15:43:35',
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => 254,
                'movie_id' => 13,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:35',
                'updated_at' => '2022-07-05 15:43:35',
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => 255,
                'movie_id' => 13,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:35',
                'updated_at' => '2022-07-05 15:43:35',
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => 47,
                'movie_id' => 13,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:35',
                'updated_at' => '2022-07-05 15:43:35',
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => 48,
                'movie_id' => 13,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:36',
                'updated_at' => '2022-07-05 15:43:36',
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => 256,
                'movie_id' => 13,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:36',
                'updated_at' => '2022-07-05 15:43:36',
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => 257,
                'movie_id' => 13,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:36',
                'updated_at' => '2022-07-05 15:43:36',
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => 127,
                'movie_id' => 13,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:36',
                'updated_at' => '2022-07-05 15:43:36',
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => 21,
                'movie_id' => 13,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:36',
                'updated_at' => '2022-07-05 15:43:36',
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => 218,
                'movie_id' => 13,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:37',
                'updated_at' => '2022-07-05 15:43:37',
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => 231,
                'movie_id' => 13,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:37',
                'updated_at' => '2022-07-05 15:43:37',
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => 258,
                'movie_id' => 13,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:37',
                'updated_at' => '2022-07-05 15:43:37',
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => 259,
                'movie_id' => 13,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:37',
                'updated_at' => '2022-07-05 15:43:37',
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => 260,
                'movie_id' => 13,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:38',
                'updated_at' => '2022-07-05 15:43:38',
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => 174,
                'movie_id' => 13,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:38',
                'updated_at' => '2022-07-05 15:43:38',
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => 261,
                'movie_id' => 13,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:38',
                'updated_at' => '2022-07-05 15:43:38',
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => 61,
                'movie_id' => 13,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:38',
                'updated_at' => '2022-07-05 15:43:38',
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => 262,
                'movie_id' => 13,
                'rating' => 2.5,
                'created_at' => '2022-07-05 15:43:38',
                'updated_at' => '2022-07-05 15:43:38',
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => 263,
                'movie_id' => 13,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:39',
                'updated_at' => '2022-07-05 15:43:39',
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => 235,
                'movie_id' => 13,
                'rating' => 2.5,
                'created_at' => '2022-07-05 15:43:39',
                'updated_at' => '2022-07-05 15:43:39',
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => 264,
                'movie_id' => 13,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:39',
                'updated_at' => '2022-07-05 15:43:39',
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => 238,
                'movie_id' => 13,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:39',
                'updated_at' => '2022-07-05 15:43:39',
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => 192,
                'movie_id' => 14,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:39',
                'updated_at' => '2022-07-05 15:43:39',
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => 90,
                'movie_id' => 14,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:40',
                'updated_at' => '2022-07-05 15:43:40',
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => 265,
                'movie_id' => 14,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:40',
                'updated_at' => '2022-07-05 15:43:40',
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => 4,
                'movie_id' => 14,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:40',
                'updated_at' => '2022-07-05 15:43:40',
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => 266,
                'movie_id' => 14,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:40',
                'updated_at' => '2022-07-05 15:43:40',
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => 8,
                'movie_id' => 14,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:40',
                'updated_at' => '2022-07-05 15:43:40',
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => 117,
                'movie_id' => 14,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:41',
                'updated_at' => '2022-07-05 15:43:41',
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => 267,
                'movie_id' => 14,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:41',
                'updated_at' => '2022-07-05 15:43:41',
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => 255,
                'movie_id' => 14,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:41',
                'updated_at' => '2022-07-05 15:43:41',
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => 47,
                'movie_id' => 14,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:41',
                'updated_at' => '2022-07-05 15:43:41',
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => 169,
                'movie_id' => 14,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:41',
                'updated_at' => '2022-07-05 15:43:41',
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => 48,
                'movie_id' => 14,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:41',
                'updated_at' => '2022-07-05 15:43:41',
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => 170,
                'movie_id' => 14,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:43:42',
                'updated_at' => '2022-07-05 15:43:42',
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => 268,
                'movie_id' => 14,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:43:42',
                'updated_at' => '2022-07-05 15:43:42',
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => 269,
                'movie_id' => 14,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:42',
                'updated_at' => '2022-07-05 15:43:42',
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => 199,
                'movie_id' => 14,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:42',
                'updated_at' => '2022-07-05 15:43:42',
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => 50,
                'movie_id' => 14,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:42',
                'updated_at' => '2022-07-05 15:43:42',
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => 19,
                'movie_id' => 14,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:43',
                'updated_at' => '2022-07-05 15:43:43',
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => 270,
                'movie_id' => 14,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:43',
                'updated_at' => '2022-07-05 15:43:43',
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => 21,
                'movie_id' => 14,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:43',
                'updated_at' => '2022-07-05 15:43:43',
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => 80,
                'movie_id' => 14,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:43',
                'updated_at' => '2022-07-05 15:43:43',
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => 24,
                'movie_id' => 14,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:43',
                'updated_at' => '2022-07-05 15:43:43',
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => 25,
                'movie_id' => 14,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:44',
                'updated_at' => '2022-07-05 15:43:44',
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => 271,
                'movie_id' => 14,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:44',
                'updated_at' => '2022-07-05 15:43:44',
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => 57,
                'movie_id' => 14,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:44',
                'updated_at' => '2022-07-05 15:43:44',
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => 29,
                'movie_id' => 14,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:44',
                'updated_at' => '2022-07-05 15:43:44',
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => 157,
                'movie_id' => 14,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:44',
                'updated_at' => '2022-07-05 15:43:44',
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => 31,
                'movie_id' => 14,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:45',
                'updated_at' => '2022-07-05 15:43:45',
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => 33,
                'movie_id' => 14,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:45',
                'updated_at' => '2022-07-05 15:43:45',
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => 261,
                'movie_id' => 14,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:43:45',
                'updated_at' => '2022-07-05 15:43:45',
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => 190,
                'movie_id' => 14,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:45',
                'updated_at' => '2022-07-05 15:43:45',
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => 135,
                'movie_id' => 14,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:45',
                'updated_at' => '2022-07-05 15:43:45',
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => 65,
                'movie_id' => 14,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:46',
                'updated_at' => '2022-07-05 15:43:46',
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => 272,
                'movie_id' => 14,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:46',
                'updated_at' => '2022-07-05 15:43:46',
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => 2,
                'movie_id' => 15,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:46',
                'updated_at' => '2022-07-05 15:43:46',
            ),
            452 => 
            array (
                'id' => 453,
                'user_id' => 223,
                'movie_id' => 15,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:46',
                'updated_at' => '2022-07-05 15:43:46',
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => 273,
                'movie_id' => 15,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:46',
                'updated_at' => '2022-07-05 15:43:46',
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => 274,
                'movie_id' => 15,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:47',
                'updated_at' => '2022-07-05 15:43:47',
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => 114,
                'movie_id' => 15,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:47',
                'updated_at' => '2022-07-05 15:43:47',
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => 116,
                'movie_id' => 15,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:47',
                'updated_at' => '2022-07-05 15:43:47',
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => 11,
                'movie_id' => 15,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:47',
                'updated_at' => '2022-07-05 15:43:47',
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => 122,
                'movie_id' => 15,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:47',
                'updated_at' => '2022-07-05 15:43:47',
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => 275,
                'movie_id' => 15,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:48',
                'updated_at' => '2022-07-05 15:43:48',
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => 276,
                'movie_id' => 15,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:48',
                'updated_at' => '2022-07-05 15:43:48',
            ),
            461 => 
            array (
                'id' => 462,
                'user_id' => 47,
                'movie_id' => 15,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:48',
                'updated_at' => '2022-07-05 15:43:48',
            ),
            462 => 
            array (
                'id' => 463,
                'user_id' => 277,
                'movie_id' => 15,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:48',
                'updated_at' => '2022-07-05 15:43:48',
            ),
            463 => 
            array (
                'id' => 464,
                'user_id' => 278,
                'movie_id' => 15,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:48',
                'updated_at' => '2022-07-05 15:43:48',
            ),
            464 => 
            array (
                'id' => 465,
                'user_id' => 279,
                'movie_id' => 15,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:49',
                'updated_at' => '2022-07-05 15:43:49',
            ),
            465 => 
            array (
                'id' => 466,
                'user_id' => 21,
                'movie_id' => 15,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:49',
                'updated_at' => '2022-07-05 15:43:49',
            ),
            466 => 
            array (
                'id' => 467,
                'user_id' => 280,
                'movie_id' => 15,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:49',
                'updated_at' => '2022-07-05 15:43:49',
            ),
            467 => 
            array (
                'id' => 468,
                'user_id' => 185,
                'movie_id' => 15,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:49',
                'updated_at' => '2022-07-05 15:43:49',
            ),
            468 => 
            array (
                'id' => 469,
                'user_id' => 55,
                'movie_id' => 15,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:49',
                'updated_at' => '2022-07-05 15:43:49',
            ),
            469 => 
            array (
                'id' => 470,
                'user_id' => 57,
                'movie_id' => 15,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:50',
                'updated_at' => '2022-07-05 15:43:50',
            ),
            470 => 
            array (
                'id' => 471,
                'user_id' => 58,
                'movie_id' => 15,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:50',
                'updated_at' => '2022-07-05 15:43:50',
            ),
            471 => 
            array (
                'id' => 472,
                'user_id' => 260,
                'movie_id' => 15,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:50',
                'updated_at' => '2022-07-05 15:43:50',
            ),
            472 => 
            array (
                'id' => 473,
                'user_id' => 61,
                'movie_id' => 15,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:50',
                'updated_at' => '2022-07-05 15:43:50',
            ),
            473 => 
            array (
                'id' => 474,
                'user_id' => 35,
                'movie_id' => 15,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:50',
                'updated_at' => '2022-07-05 15:43:50',
            ),
            474 => 
            array (
                'id' => 475,
                'user_id' => 36,
                'movie_id' => 15,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:43:51',
                'updated_at' => '2022-07-05 15:43:51',
            ),
            475 => 
            array (
                'id' => 476,
                'user_id' => 281,
                'movie_id' => 15,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:51',
                'updated_at' => '2022-07-05 15:43:51',
            ),
            476 => 
            array (
                'id' => 477,
                'user_id' => 282,
                'movie_id' => 15,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:51',
                'updated_at' => '2022-07-05 15:43:51',
            ),
            477 => 
            array (
                'id' => 478,
                'user_id' => 40,
                'movie_id' => 15,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:51',
                'updated_at' => '2022-07-05 15:43:51',
            ),
            478 => 
            array (
                'id' => 479,
                'user_id' => 43,
                'movie_id' => 15,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:51',
                'updated_at' => '2022-07-05 15:43:51',
            ),
            479 => 
            array (
                'id' => 480,
                'user_id' => 107,
                'movie_id' => 15,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:52',
                'updated_at' => '2022-07-05 15:43:52',
            ),
            480 => 
            array (
                'id' => 481,
                'user_id' => 239,
                'movie_id' => 16,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:52',
                'updated_at' => '2022-07-05 15:43:52',
            ),
            481 => 
            array (
                'id' => 482,
                'user_id' => 194,
                'movie_id' => 16,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:52',
                'updated_at' => '2022-07-05 15:43:52',
            ),
            482 => 
            array (
                'id' => 483,
                'user_id' => 163,
                'movie_id' => 16,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:52',
                'updated_at' => '2022-07-05 15:43:52',
            ),
            483 => 
            array (
                'id' => 484,
                'user_id' => 45,
                'movie_id' => 16,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:52',
                'updated_at' => '2022-07-05 15:43:52',
            ),
            484 => 
            array (
                'id' => 485,
                'user_id' => 283,
                'movie_id' => 16,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:43:52',
                'updated_at' => '2022-07-05 15:43:52',
            ),
            485 => 
            array (
                'id' => 486,
                'user_id' => 284,
                'movie_id' => 16,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:53',
                'updated_at' => '2022-07-05 15:43:53',
            ),
            486 => 
            array (
                'id' => 487,
                'user_id' => 285,
                'movie_id' => 16,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:43:53',
                'updated_at' => '2022-07-05 15:43:53',
            ),
            487 => 
            array (
                'id' => 488,
                'user_id' => 8,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:53',
                'updated_at' => '2022-07-05 15:43:53',
            ),
            488 => 
            array (
                'id' => 489,
                'user_id' => 167,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:53',
                'updated_at' => '2022-07-05 15:43:53',
            ),
            489 => 
            array (
                'id' => 490,
                'user_id' => 286,
                'movie_id' => 16,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:53',
                'updated_at' => '2022-07-05 15:43:53',
            ),
            490 => 
            array (
                'id' => 491,
                'user_id' => 254,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:54',
                'updated_at' => '2022-07-05 15:43:54',
            ),
            491 => 
            array (
                'id' => 492,
                'user_id' => 287,
                'movie_id' => 16,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:54',
                'updated_at' => '2022-07-05 15:43:54',
            ),
            492 => 
            array (
                'id' => 493,
                'user_id' => 288,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:54',
                'updated_at' => '2022-07-05 15:43:54',
            ),
            493 => 
            array (
                'id' => 494,
                'user_id' => 47,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:54',
                'updated_at' => '2022-07-05 15:43:54',
            ),
            494 => 
            array (
                'id' => 495,
                'user_id' => 169,
                'movie_id' => 16,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:54',
                'updated_at' => '2022-07-05 15:43:54',
            ),
            495 => 
            array (
                'id' => 496,
                'user_id' => 49,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:55',
                'updated_at' => '2022-07-05 15:43:55',
            ),
            496 => 
            array (
                'id' => 497,
                'user_id' => 125,
                'movie_id' => 16,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:55',
                'updated_at' => '2022-07-05 15:43:55',
            ),
            497 => 
            array (
                'id' => 498,
                'user_id' => 289,
                'movie_id' => 16,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:43:55',
                'updated_at' => '2022-07-05 15:43:55',
            ),
            498 => 
            array (
                'id' => 499,
                'user_id' => 214,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:55',
                'updated_at' => '2022-07-05 15:43:55',
            ),
            499 => 
            array (
                'id' => 500,
                'user_id' => 199,
                'movie_id' => 16,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:43:55',
                'updated_at' => '2022-07-05 15:43:55',
            ),
        ));
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 501,
                'user_id' => 290,
                'movie_id' => 16,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:56',
                'updated_at' => '2022-07-05 15:43:56',
            ),
            1 => 
            array (
                'id' => 502,
                'user_id' => 291,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:56',
                'updated_at' => '2022-07-05 15:43:56',
            ),
            2 => 
            array (
                'id' => 503,
                'user_id' => 292,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:56',
                'updated_at' => '2022-07-05 15:43:56',
            ),
            3 => 
            array (
                'id' => 504,
                'user_id' => 229,
                'movie_id' => 16,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:56',
                'updated_at' => '2022-07-05 15:43:56',
            ),
            4 => 
            array (
                'id' => 505,
                'user_id' => 21,
                'movie_id' => 16,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:56',
                'updated_at' => '2022-07-05 15:43:56',
            ),
            5 => 
            array (
                'id' => 506,
                'user_id' => 80,
                'movie_id' => 16,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:57',
                'updated_at' => '2022-07-05 15:43:57',
            ),
            6 => 
            array (
                'id' => 507,
                'user_id' => 200,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:57',
                'updated_at' => '2022-07-05 15:43:57',
            ),
            7 => 
            array (
                'id' => 508,
                'user_id' => 293,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:43:57',
                'updated_at' => '2022-07-05 15:43:57',
            ),
            8 => 
            array (
                'id' => 509,
                'user_id' => 55,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:57',
                'updated_at' => '2022-07-05 15:43:57',
            ),
            9 => 
            array (
                'id' => 510,
                'user_id' => 58,
                'movie_id' => 16,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:43:57',
                'updated_at' => '2022-07-05 15:43:57',
            ),
            10 => 
            array (
                'id' => 511,
                'user_id' => 33,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:58',
                'updated_at' => '2022-07-05 15:43:58',
            ),
            11 => 
            array (
                'id' => 512,
                'user_id' => 261,
                'movie_id' => 16,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:43:58',
                'updated_at' => '2022-07-05 15:43:58',
            ),
            12 => 
            array (
                'id' => 513,
                'user_id' => 61,
                'movie_id' => 16,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:43:58',
                'updated_at' => '2022-07-05 15:43:58',
            ),
            13 => 
            array (
                'id' => 514,
                'user_id' => 294,
                'movie_id' => 16,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:43:58',
                'updated_at' => '2022-07-05 15:43:58',
            ),
            14 => 
            array (
                'id' => 515,
                'user_id' => 160,
                'movie_id' => 16,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:43:58',
                'updated_at' => '2022-07-05 15:43:58',
            ),
            15 => 
            array (
                'id' => 516,
                'user_id' => 295,
                'movie_id' => 16,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:59',
                'updated_at' => '2022-07-05 15:43:59',
            ),
            16 => 
            array (
                'id' => 517,
                'user_id' => 40,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:59',
                'updated_at' => '2022-07-05 15:43:59',
            ),
            17 => 
            array (
                'id' => 518,
                'user_id' => 204,
                'movie_id' => 16,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:43:59',
                'updated_at' => '2022-07-05 15:43:59',
            ),
            18 => 
            array (
                'id' => 519,
                'user_id' => 237,
                'movie_id' => 16,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:43:59',
                'updated_at' => '2022-07-05 15:43:59',
            ),
            19 => 
            array (
                'id' => 520,
                'user_id' => 296,
                'movie_id' => 16,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:43:59',
                'updated_at' => '2022-07-05 15:43:59',
            ),
            20 => 
            array (
                'id' => 521,
                'user_id' => 65,
                'movie_id' => 16,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:00',
                'updated_at' => '2022-07-05 15:44:00',
            ),
            21 => 
            array (
                'id' => 522,
                'user_id' => 239,
                'movie_id' => 17,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:00',
                'updated_at' => '2022-07-05 15:44:00',
            ),
            22 => 
            array (
                'id' => 523,
                'user_id' => 297,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:00',
                'updated_at' => '2022-07-05 15:44:00',
            ),
            23 => 
            array (
                'id' => 524,
                'user_id' => 223,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:00',
                'updated_at' => '2022-07-05 15:44:00',
            ),
            24 => 
            array (
                'id' => 525,
                'user_id' => 273,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:00',
                'updated_at' => '2022-07-05 15:44:00',
            ),
            25 => 
            array (
                'id' => 526,
                'user_id' => 298,
                'movie_id' => 17,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:01',
                'updated_at' => '2022-07-05 15:44:01',
            ),
            26 => 
            array (
                'id' => 527,
                'user_id' => 141,
                'movie_id' => 17,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:01',
                'updated_at' => '2022-07-05 15:44:01',
            ),
            27 => 
            array (
                'id' => 528,
                'user_id' => 299,
                'movie_id' => 17,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:01',
                'updated_at' => '2022-07-05 15:44:01',
            ),
            28 => 
            array (
                'id' => 529,
                'user_id' => 45,
                'movie_id' => 17,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:01',
                'updated_at' => '2022-07-05 15:44:01',
            ),
            29 => 
            array (
                'id' => 530,
                'user_id' => 266,
                'movie_id' => 17,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:01',
                'updated_at' => '2022-07-05 15:44:01',
            ),
            30 => 
            array (
                'id' => 531,
                'user_id' => 284,
                'movie_id' => 17,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:02',
                'updated_at' => '2022-07-05 15:44:02',
            ),
            31 => 
            array (
                'id' => 532,
                'user_id' => 8,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:02',
                'updated_at' => '2022-07-05 15:44:02',
            ),
            32 => 
            array (
                'id' => 533,
                'user_id' => 300,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:02',
                'updated_at' => '2022-07-05 15:44:02',
            ),
            33 => 
            array (
                'id' => 534,
                'user_id' => 301,
                'movie_id' => 17,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:02',
                'updated_at' => '2022-07-05 15:44:02',
            ),
            34 => 
            array (
                'id' => 535,
                'user_id' => 302,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:02',
                'updated_at' => '2022-07-05 15:44:02',
            ),
            35 => 
            array (
                'id' => 536,
                'user_id' => 13,
                'movie_id' => 17,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:03',
                'updated_at' => '2022-07-05 15:44:03',
            ),
            36 => 
            array (
                'id' => 537,
                'user_id' => 303,
                'movie_id' => 17,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:03',
                'updated_at' => '2022-07-05 15:44:03',
            ),
            37 => 
            array (
                'id' => 538,
                'user_id' => 49,
                'movie_id' => 17,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:03',
                'updated_at' => '2022-07-05 15:44:03',
            ),
            38 => 
            array (
                'id' => 539,
                'user_id' => 125,
                'movie_id' => 17,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:03',
                'updated_at' => '2022-07-05 15:44:03',
            ),
            39 => 
            array (
                'id' => 540,
                'user_id' => 289,
                'movie_id' => 17,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:03',
                'updated_at' => '2022-07-05 15:44:03',
            ),
            40 => 
            array (
                'id' => 541,
                'user_id' => 19,
                'movie_id' => 17,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:03',
                'updated_at' => '2022-07-05 15:44:03',
            ),
            41 => 
            array (
                'id' => 542,
                'user_id' => 257,
                'movie_id' => 17,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:04',
                'updated_at' => '2022-07-05 15:44:04',
            ),
            42 => 
            array (
                'id' => 543,
                'user_id' => 152,
                'movie_id' => 17,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:04',
                'updated_at' => '2022-07-05 15:44:04',
            ),
            43 => 
            array (
                'id' => 544,
                'user_id' => 21,
                'movie_id' => 17,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:04',
                'updated_at' => '2022-07-05 15:44:04',
            ),
            44 => 
            array (
                'id' => 545,
                'user_id' => 304,
                'movie_id' => 17,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:04',
                'updated_at' => '2022-07-05 15:44:04',
            ),
            45 => 
            array (
                'id' => 546,
                'user_id' => 305,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:04',
                'updated_at' => '2022-07-05 15:44:04',
            ),
            46 => 
            array (
                'id' => 547,
                'user_id' => 55,
                'movie_id' => 17,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:05',
                'updated_at' => '2022-07-05 15:44:05',
            ),
            47 => 
            array (
                'id' => 548,
                'user_id' => 259,
                'movie_id' => 17,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:05',
                'updated_at' => '2022-07-05 15:44:05',
            ),
            48 => 
            array (
                'id' => 549,
                'user_id' => 306,
                'movie_id' => 17,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:05',
                'updated_at' => '2022-07-05 15:44:05',
            ),
            49 => 
            array (
                'id' => 550,
                'user_id' => 307,
                'movie_id' => 17,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:05',
                'updated_at' => '2022-07-05 15:44:05',
            ),
            50 => 
            array (
                'id' => 551,
                'user_id' => 35,
                'movie_id' => 17,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:05',
                'updated_at' => '2022-07-05 15:44:05',
            ),
            51 => 
            array (
                'id' => 552,
                'user_id' => 36,
                'movie_id' => 17,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:06',
                'updated_at' => '2022-07-05 15:44:06',
            ),
            52 => 
            array (
                'id' => 553,
                'user_id' => 308,
                'movie_id' => 17,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:06',
                'updated_at' => '2022-07-05 15:44:06',
            ),
            53 => 
            array (
                'id' => 554,
                'user_id' => 160,
                'movie_id' => 17,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:06',
                'updated_at' => '2022-07-05 15:44:06',
            ),
            54 => 
            array (
                'id' => 555,
                'user_id' => 40,
                'movie_id' => 17,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:06',
                'updated_at' => '2022-07-05 15:44:06',
            ),
            55 => 
            array (
                'id' => 556,
                'user_id' => 234,
                'movie_id' => 17,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:07',
                'updated_at' => '2022-07-05 15:44:07',
            ),
            56 => 
            array (
                'id' => 557,
                'user_id' => 236,
                'movie_id' => 17,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:07',
                'updated_at' => '2022-07-05 15:44:07',
            ),
            57 => 
            array (
                'id' => 558,
                'user_id' => 42,
                'movie_id' => 17,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:07',
                'updated_at' => '2022-07-05 15:44:07',
            ),
            58 => 
            array (
                'id' => 559,
                'user_id' => 65,
                'movie_id' => 17,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:07',
                'updated_at' => '2022-07-05 15:44:07',
            ),
            59 => 
            array (
                'id' => 560,
                'user_id' => 43,
                'movie_id' => 17,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:07',
                'updated_at' => '2022-07-05 15:44:07',
            ),
            60 => 
            array (
                'id' => 561,
                'user_id' => 193,
                'movie_id' => 18,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:08',
                'updated_at' => '2022-07-05 15:44:08',
            ),
            61 => 
            array (
                'id' => 562,
                'user_id' => 309,
                'movie_id' => 18,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:08',
                'updated_at' => '2022-07-05 15:44:08',
            ),
            62 => 
            array (
                'id' => 563,
                'user_id' => 310,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:08',
                'updated_at' => '2022-07-05 15:44:08',
            ),
            63 => 
            array (
                'id' => 564,
                'user_id' => 266,
                'movie_id' => 18,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:08',
                'updated_at' => '2022-07-05 15:44:08',
            ),
            64 => 
            array (
                'id' => 565,
                'user_id' => 311,
                'movie_id' => 18,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:08',
                'updated_at' => '2022-07-05 15:44:08',
            ),
            65 => 
            array (
                'id' => 566,
                'user_id' => 8,
                'movie_id' => 18,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:09',
                'updated_at' => '2022-07-05 15:44:09',
            ),
            66 => 
            array (
                'id' => 567,
                'user_id' => 301,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:09',
                'updated_at' => '2022-07-05 15:44:09',
            ),
            67 => 
            array (
                'id' => 568,
                'user_id' => 226,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:09',
                'updated_at' => '2022-07-05 15:44:09',
            ),
            68 => 
            array (
                'id' => 569,
                'user_id' => 302,
                'movie_id' => 18,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:09',
                'updated_at' => '2022-07-05 15:44:09',
            ),
            69 => 
            array (
                'id' => 570,
                'user_id' => 256,
                'movie_id' => 18,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:44:09',
                'updated_at' => '2022-07-05 15:44:09',
            ),
            70 => 
            array (
                'id' => 571,
                'user_id' => 16,
                'movie_id' => 18,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:10',
                'updated_at' => '2022-07-05 15:44:10',
            ),
            71 => 
            array (
                'id' => 572,
                'user_id' => 312,
                'movie_id' => 18,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:10',
                'updated_at' => '2022-07-05 15:44:10',
            ),
            72 => 
            array (
                'id' => 573,
                'user_id' => 19,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:10',
                'updated_at' => '2022-07-05 15:44:10',
            ),
            73 => 
            array (
                'id' => 574,
                'user_id' => 150,
                'movie_id' => 18,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:10',
                'updated_at' => '2022-07-05 15:44:10',
            ),
            74 => 
            array (
                'id' => 575,
                'user_id' => 21,
                'movie_id' => 18,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:10',
                'updated_at' => '2022-07-05 15:44:10',
            ),
            75 => 
            array (
                'id' => 576,
                'user_id' => 249,
                'movie_id' => 18,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:11',
                'updated_at' => '2022-07-05 15:44:11',
            ),
            76 => 
            array (
                'id' => 577,
                'user_id' => 172,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:11',
                'updated_at' => '2022-07-05 15:44:11',
            ),
            77 => 
            array (
                'id' => 578,
                'user_id' => 271,
                'movie_id' => 18,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:11',
                'updated_at' => '2022-07-05 15:44:11',
            ),
            78 => 
            array (
                'id' => 579,
                'user_id' => 313,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:11',
                'updated_at' => '2022-07-05 15:44:11',
            ),
            79 => 
            array (
                'id' => 580,
                'user_id' => 259,
                'movie_id' => 18,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:11',
                'updated_at' => '2022-07-05 15:44:11',
            ),
            80 => 
            array (
                'id' => 581,
                'user_id' => 61,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:12',
                'updated_at' => '2022-07-05 15:44:12',
            ),
            81 => 
            array (
                'id' => 582,
                'user_id' => 314,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:12',
                'updated_at' => '2022-07-05 15:44:12',
            ),
            82 => 
            array (
                'id' => 583,
                'user_id' => 221,
                'movie_id' => 18,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:12',
                'updated_at' => '2022-07-05 15:44:12',
            ),
            83 => 
            array (
                'id' => 584,
                'user_id' => 43,
                'movie_id' => 18,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:12',
                'updated_at' => '2022-07-05 15:44:12',
            ),
            84 => 
            array (
                'id' => 585,
                'user_id' => 315,
                'movie_id' => 19,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:12',
                'updated_at' => '2022-07-05 15:44:12',
            ),
            85 => 
            array (
                'id' => 586,
                'user_id' => 273,
                'movie_id' => 19,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:12',
                'updated_at' => '2022-07-05 15:44:12',
            ),
            86 => 
            array (
                'id' => 587,
                'user_id' => 298,
                'movie_id' => 19,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:13',
                'updated_at' => '2022-07-05 15:44:13',
            ),
            87 => 
            array (
                'id' => 588,
                'user_id' => 274,
                'movie_id' => 19,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:13',
                'updated_at' => '2022-07-05 15:44:13',
            ),
            88 => 
            array (
                'id' => 589,
                'user_id' => 242,
                'movie_id' => 19,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:13',
                'updated_at' => '2022-07-05 15:44:13',
            ),
            89 => 
            array (
                'id' => 590,
                'user_id' => 6,
                'movie_id' => 19,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:13',
                'updated_at' => '2022-07-05 15:44:13',
            ),
            90 => 
            array (
                'id' => 591,
                'user_id' => 116,
                'movie_id' => 19,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:13',
                'updated_at' => '2022-07-05 15:44:13',
            ),
            91 => 
            array (
                'id' => 592,
                'user_id' => 316,
                'movie_id' => 19,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:14',
                'updated_at' => '2022-07-05 15:44:14',
            ),
            92 => 
            array (
                'id' => 593,
                'user_id' => 117,
                'movie_id' => 19,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:14',
                'updated_at' => '2022-07-05 15:44:14',
            ),
            93 => 
            array (
                'id' => 594,
                'user_id' => 120,
                'movie_id' => 19,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:14',
                'updated_at' => '2022-07-05 15:44:14',
            ),
            94 => 
            array (
                'id' => 595,
                'user_id' => 47,
                'movie_id' => 19,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:14',
                'updated_at' => '2022-07-05 15:44:14',
            ),
            95 => 
            array (
                'id' => 596,
                'user_id' => 49,
                'movie_id' => 19,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:14',
                'updated_at' => '2022-07-05 15:44:14',
            ),
            96 => 
            array (
                'id' => 597,
                'user_id' => 278,
                'movie_id' => 19,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:15',
                'updated_at' => '2022-07-05 15:44:15',
            ),
            97 => 
            array (
                'id' => 598,
                'user_id' => 148,
                'movie_id' => 19,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:15',
                'updated_at' => '2022-07-05 15:44:15',
            ),
            98 => 
            array (
                'id' => 599,
                'user_id' => 71,
                'movie_id' => 19,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:15',
                'updated_at' => '2022-07-05 15:44:15',
            ),
            99 => 
            array (
                'id' => 600,
                'user_id' => 126,
                'movie_id' => 19,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:15',
                'updated_at' => '2022-07-05 15:44:15',
            ),
            100 => 
            array (
                'id' => 601,
                'user_id' => 229,
                'movie_id' => 19,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:15',
                'updated_at' => '2022-07-05 15:44:15',
            ),
            101 => 
            array (
                'id' => 602,
                'user_id' => 21,
                'movie_id' => 19,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:16',
                'updated_at' => '2022-07-05 15:44:16',
            ),
            102 => 
            array (
                'id' => 603,
                'user_id' => 79,
                'movie_id' => 19,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:16',
                'updated_at' => '2022-07-05 15:44:16',
            ),
            103 => 
            array (
                'id' => 604,
                'user_id' => 231,
                'movie_id' => 19,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:16',
                'updated_at' => '2022-07-05 15:44:16',
            ),
            104 => 
            array (
                'id' => 605,
                'user_id' => 55,
                'movie_id' => 19,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:16',
                'updated_at' => '2022-07-05 15:44:16',
            ),
            105 => 
            array (
                'id' => 606,
                'user_id' => 57,
                'movie_id' => 19,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:16',
                'updated_at' => '2022-07-05 15:44:16',
            ),
            106 => 
            array (
                'id' => 607,
                'user_id' => 175,
                'movie_id' => 19,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:17',
                'updated_at' => '2022-07-05 15:44:17',
            ),
            107 => 
            array (
                'id' => 608,
                'user_id' => 35,
                'movie_id' => 19,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:17',
                'updated_at' => '2022-07-05 15:44:17',
            ),
            108 => 
            array (
                'id' => 609,
                'user_id' => 317,
                'movie_id' => 19,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:17',
                'updated_at' => '2022-07-05 15:44:17',
            ),
            109 => 
            array (
                'id' => 610,
                'user_id' => 36,
                'movie_id' => 19,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:17',
                'updated_at' => '2022-07-05 15:44:17',
            ),
            110 => 
            array (
                'id' => 611,
                'user_id' => 63,
                'movie_id' => 19,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:17',
                'updated_at' => '2022-07-05 15:44:17',
            ),
            111 => 
            array (
                'id' => 612,
                'user_id' => 40,
                'movie_id' => 19,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:17',
                'updated_at' => '2022-07-05 15:44:17',
            ),
            112 => 
            array (
                'id' => 613,
                'user_id' => 64,
                'movie_id' => 19,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:18',
                'updated_at' => '2022-07-05 15:44:18',
            ),
            113 => 
            array (
                'id' => 614,
                'user_id' => 43,
                'movie_id' => 19,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:18',
                'updated_at' => '2022-07-05 15:44:18',
            ),
            114 => 
            array (
                'id' => 615,
                'user_id' => 66,
                'movie_id' => 19,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:18',
                'updated_at' => '2022-07-05 15:44:18',
            ),
            115 => 
            array (
                'id' => 616,
                'user_id' => 90,
                'movie_id' => 20,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:18',
                'updated_at' => '2022-07-05 15:44:18',
            ),
            116 => 
            array (
                'id' => 617,
                'user_id' => 318,
                'movie_id' => 20,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:18',
                'updated_at' => '2022-07-05 15:44:18',
            ),
            117 => 
            array (
                'id' => 618,
                'user_id' => 144,
                'movie_id' => 20,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:19',
                'updated_at' => '2022-07-05 15:44:19',
            ),
            118 => 
            array (
                'id' => 619,
                'user_id' => 209,
                'movie_id' => 20,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:19',
                'updated_at' => '2022-07-05 15:44:19',
            ),
            119 => 
            array (
                'id' => 620,
                'user_id' => 319,
                'movie_id' => 20,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:19',
                'updated_at' => '2022-07-05 15:44:19',
            ),
            120 => 
            array (
                'id' => 621,
                'user_id' => 320,
                'movie_id' => 20,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:19',
                'updated_at' => '2022-07-05 15:44:19',
            ),
            121 => 
            array (
                'id' => 622,
                'user_id' => 278,
                'movie_id' => 20,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:19',
                'updated_at' => '2022-07-05 15:44:19',
            ),
            122 => 
            array (
                'id' => 623,
                'user_id' => 148,
                'movie_id' => 20,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:20',
                'updated_at' => '2022-07-05 15:44:20',
            ),
            123 => 
            array (
                'id' => 624,
                'user_id' => 291,
                'movie_id' => 20,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:20',
                'updated_at' => '2022-07-05 15:44:20',
            ),
            124 => 
            array (
                'id' => 625,
                'user_id' => 21,
                'movie_id' => 20,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:20',
                'updated_at' => '2022-07-05 15:44:20',
            ),
            125 => 
            array (
                'id' => 626,
                'user_id' => 321,
                'movie_id' => 20,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:20',
                'updated_at' => '2022-07-05 15:44:20',
            ),
            126 => 
            array (
                'id' => 627,
                'user_id' => 74,
                'movie_id' => 20,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:20',
                'updated_at' => '2022-07-05 15:44:20',
            ),
            127 => 
            array (
                'id' => 628,
                'user_id' => 185,
                'movie_id' => 20,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:21',
                'updated_at' => '2022-07-05 15:44:21',
            ),
            128 => 
            array (
                'id' => 629,
                'user_id' => 55,
                'movie_id' => 20,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:44:21',
                'updated_at' => '2022-07-05 15:44:21',
            ),
            129 => 
            array (
                'id' => 630,
                'user_id' => 57,
                'movie_id' => 20,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:21',
                'updated_at' => '2022-07-05 15:44:21',
            ),
            130 => 
            array (
                'id' => 631,
                'user_id' => 60,
                'movie_id' => 20,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:44:21',
                'updated_at' => '2022-07-05 15:44:21',
            ),
            131 => 
            array (
                'id' => 632,
                'user_id' => 295,
                'movie_id' => 20,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:21',
                'updated_at' => '2022-07-05 15:44:21',
            ),
            132 => 
            array (
                'id' => 633,
                'user_id' => 40,
                'movie_id' => 20,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:22',
                'updated_at' => '2022-07-05 15:44:22',
            ),
            133 => 
            array (
                'id' => 634,
                'user_id' => 43,
                'movie_id' => 20,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:22',
                'updated_at' => '2022-07-05 15:44:22',
            ),
            134 => 
            array (
                'id' => 635,
                'user_id' => 105,
                'movie_id' => 20,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:22',
                'updated_at' => '2022-07-05 15:44:22',
            ),
            135 => 
            array (
                'id' => 636,
                'user_id' => 322,
                'movie_id' => 21,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:22',
                'updated_at' => '2022-07-05 15:44:22',
            ),
            136 => 
            array (
                'id' => 637,
                'user_id' => 139,
                'movie_id' => 21,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:22',
                'updated_at' => '2022-07-05 15:44:22',
            ),
            137 => 
            array (
                'id' => 638,
                'user_id' => 323,
                'movie_id' => 21,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:23',
                'updated_at' => '2022-07-05 15:44:23',
            ),
            138 => 
            array (
                'id' => 639,
                'user_id' => 324,
                'movie_id' => 21,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:23',
                'updated_at' => '2022-07-05 15:44:23',
            ),
            139 => 
            array (
                'id' => 640,
                'user_id' => 318,
                'movie_id' => 21,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:23',
                'updated_at' => '2022-07-05 15:44:23',
            ),
            140 => 
            array (
                'id' => 641,
                'user_id' => 44,
                'movie_id' => 21,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:23',
                'updated_at' => '2022-07-05 15:44:23',
            ),
            141 => 
            array (
                'id' => 642,
                'user_id' => 45,
                'movie_id' => 21,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:23',
                'updated_at' => '2022-07-05 15:44:23',
            ),
            142 => 
            array (
                'id' => 643,
                'user_id' => 4,
                'movie_id' => 21,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:23',
                'updated_at' => '2022-07-05 15:44:23',
            ),
            143 => 
            array (
                'id' => 644,
                'user_id' => 284,
                'movie_id' => 21,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:24',
                'updated_at' => '2022-07-05 15:44:24',
            ),
            144 => 
            array (
                'id' => 645,
                'user_id' => 311,
                'movie_id' => 21,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:24',
                'updated_at' => '2022-07-05 15:44:24',
            ),
            145 => 
            array (
                'id' => 646,
                'user_id' => 325,
                'movie_id' => 21,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:24',
                'updated_at' => '2022-07-05 15:44:24',
            ),
            146 => 
            array (
                'id' => 647,
                'user_id' => 166,
                'movie_id' => 21,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:24',
                'updated_at' => '2022-07-05 15:44:24',
            ),
            147 => 
            array (
                'id' => 648,
                'user_id' => 92,
                'movie_id' => 21,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:44:24',
                'updated_at' => '2022-07-05 15:44:24',
            ),
            148 => 
            array (
                'id' => 649,
                'user_id' => 167,
                'movie_id' => 21,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:25',
                'updated_at' => '2022-07-05 15:44:25',
            ),
            149 => 
            array (
                'id' => 650,
                'user_id' => 326,
                'movie_id' => 21,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:25',
                'updated_at' => '2022-07-05 15:44:25',
            ),
            150 => 
            array (
                'id' => 651,
                'user_id' => 47,
                'movie_id' => 21,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:25',
                'updated_at' => '2022-07-05 15:44:25',
            ),
            151 => 
            array (
                'id' => 652,
                'user_id' => 14,
                'movie_id' => 21,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:25',
                'updated_at' => '2022-07-05 15:44:25',
            ),
            152 => 
            array (
                'id' => 653,
                'user_id' => 169,
                'movie_id' => 21,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:25',
                'updated_at' => '2022-07-05 15:44:25',
            ),
            153 => 
            array (
                'id' => 654,
                'user_id' => 278,
                'movie_id' => 21,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:26',
                'updated_at' => '2022-07-05 15:44:26',
            ),
            154 => 
            array (
                'id' => 655,
                'user_id' => 125,
                'movie_id' => 21,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:26',
                'updated_at' => '2022-07-05 15:44:26',
            ),
            155 => 
            array (
                'id' => 656,
                'user_id' => 126,
                'movie_id' => 21,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:26',
                'updated_at' => '2022-07-05 15:44:26',
            ),
            156 => 
            array (
                'id' => 657,
                'user_id' => 268,
                'movie_id' => 21,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:44:26',
                'updated_at' => '2022-07-05 15:44:26',
            ),
            157 => 
            array (
                'id' => 658,
                'user_id' => 21,
                'movie_id' => 21,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:26',
                'updated_at' => '2022-07-05 15:44:26',
            ),
            158 => 
            array (
                'id' => 659,
                'user_id' => 80,
                'movie_id' => 21,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:27',
                'updated_at' => '2022-07-05 15:44:27',
            ),
            159 => 
            array (
                'id' => 660,
                'user_id' => 24,
                'movie_id' => 21,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:27',
                'updated_at' => '2022-07-05 15:44:27',
            ),
            160 => 
            array (
                'id' => 661,
                'user_id' => 55,
                'movie_id' => 21,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:27',
                'updated_at' => '2022-07-05 15:44:27',
            ),
            161 => 
            array (
                'id' => 662,
                'user_id' => 327,
                'movie_id' => 21,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:27',
                'updated_at' => '2022-07-05 15:44:27',
            ),
            162 => 
            array (
                'id' => 663,
                'user_id' => 202,
                'movie_id' => 21,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:27',
                'updated_at' => '2022-07-05 15:44:27',
            ),
            163 => 
            array (
                'id' => 664,
                'user_id' => 33,
                'movie_id' => 21,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:27',
                'updated_at' => '2022-07-05 15:44:27',
            ),
            164 => 
            array (
                'id' => 665,
                'user_id' => 261,
                'movie_id' => 21,
                'rating' => 2.5,
                'created_at' => '2022-07-05 15:44:28',
                'updated_at' => '2022-07-05 15:44:28',
            ),
            165 => 
            array (
                'id' => 666,
                'user_id' => 307,
                'movie_id' => 21,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:28',
                'updated_at' => '2022-07-05 15:44:28',
            ),
            166 => 
            array (
                'id' => 667,
                'user_id' => 294,
                'movie_id' => 21,
                'rating' => 3.5,
                'created_at' => '2022-07-05 15:44:28',
                'updated_at' => '2022-07-05 15:44:28',
            ),
            167 => 
            array (
                'id' => 668,
                'user_id' => 328,
                'movie_id' => 21,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:28',
                'updated_at' => '2022-07-05 15:44:28',
            ),
            168 => 
            array (
                'id' => 669,
                'user_id' => 160,
                'movie_id' => 21,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:28',
                'updated_at' => '2022-07-05 15:44:28',
            ),
            169 => 
            array (
                'id' => 670,
                'user_id' => 40,
                'movie_id' => 21,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:29',
                'updated_at' => '2022-07-05 15:44:29',
            ),
            170 => 
            array (
                'id' => 671,
                'user_id' => 64,
                'movie_id' => 21,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:29',
                'updated_at' => '2022-07-05 15:44:29',
            ),
            171 => 
            array (
                'id' => 672,
                'user_id' => 135,
                'movie_id' => 21,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:29',
                'updated_at' => '2022-07-05 15:44:29',
            ),
            172 => 
            array (
                'id' => 673,
                'user_id' => 86,
                'movie_id' => 21,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:29',
                'updated_at' => '2022-07-05 15:44:29',
            ),
            173 => 
            array (
                'id' => 674,
                'user_id' => 108,
                'movie_id' => 22,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:29',
                'updated_at' => '2022-07-05 15:44:29',
            ),
            174 => 
            array (
                'id' => 675,
                'user_id' => 207,
                'movie_id' => 22,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:30',
                'updated_at' => '2022-07-05 15:44:30',
            ),
            175 => 
            array (
                'id' => 676,
                'user_id' => 329,
                'movie_id' => 22,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:30',
                'updated_at' => '2022-07-05 15:44:30',
            ),
            176 => 
            array (
                'id' => 677,
                'user_id' => 330,
                'movie_id' => 22,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:30',
                'updated_at' => '2022-07-05 15:44:30',
            ),
            177 => 
            array (
                'id' => 678,
                'user_id' => 252,
                'movie_id' => 22,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:30',
                'updated_at' => '2022-07-05 15:44:30',
            ),
            178 => 
            array (
                'id' => 679,
                'user_id' => 7,
                'movie_id' => 22,
                'rating' => 2.0,
                'created_at' => '2022-07-05 15:44:30',
                'updated_at' => '2022-07-05 15:44:30',
            ),
            179 => 
            array (
                'id' => 680,
                'user_id' => 285,
                'movie_id' => 22,
                'rating' => 1.5,
                'created_at' => '2022-07-05 15:44:30',
                'updated_at' => '2022-07-05 15:44:30',
            ),
            180 => 
            array (
                'id' => 681,
                'user_id' => 254,
                'movie_id' => 22,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:31',
                'updated_at' => '2022-07-05 15:44:31',
            ),
            181 => 
            array (
                'id' => 682,
                'user_id' => 255,
                'movie_id' => 22,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:31',
                'updated_at' => '2022-07-05 15:44:31',
            ),
            182 => 
            array (
                'id' => 683,
                'user_id' => 15,
                'movie_id' => 22,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:31',
                'updated_at' => '2022-07-05 15:44:31',
            ),
            183 => 
            array (
                'id' => 684,
                'user_id' => 303,
                'movie_id' => 22,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:31',
                'updated_at' => '2022-07-05 15:44:31',
            ),
            184 => 
            array (
                'id' => 685,
                'user_id' => 48,
                'movie_id' => 22,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:31',
                'updated_at' => '2022-07-05 15:44:31',
            ),
            185 => 
            array (
                'id' => 686,
                'user_id' => 269,
                'movie_id' => 22,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:32',
                'updated_at' => '2022-07-05 15:44:32',
            ),
            186 => 
            array (
                'id' => 687,
                'user_id' => 331,
                'movie_id' => 22,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:32',
                'updated_at' => '2022-07-05 15:44:32',
            ),
            187 => 
            array (
                'id' => 688,
                'user_id' => 19,
                'movie_id' => 22,
                'rating' => 3.5,
                'created_at' => '2022-07-05 15:44:32',
                'updated_at' => '2022-07-05 15:44:32',
            ),
            188 => 
            array (
                'id' => 689,
                'user_id' => 149,
                'movie_id' => 22,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:32',
                'updated_at' => '2022-07-05 15:44:32',
            ),
            189 => 
            array (
                'id' => 690,
                'user_id' => 321,
                'movie_id' => 22,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:32',
                'updated_at' => '2022-07-05 15:44:32',
            ),
            190 => 
            array (
                'id' => 691,
                'user_id' => 280,
                'movie_id' => 22,
                'rating' => 2.0,
                'created_at' => '2022-07-05 15:44:32',
                'updated_at' => '2022-07-05 15:44:32',
            ),
            191 => 
            array (
                'id' => 692,
                'user_id' => 75,
                'movie_id' => 22,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:33',
                'updated_at' => '2022-07-05 15:44:33',
            ),
            192 => 
            array (
                'id' => 693,
                'user_id' => 155,
                'movie_id' => 22,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:44:33',
                'updated_at' => '2022-07-05 15:44:33',
            ),
            193 => 
            array (
                'id' => 694,
                'user_id' => 187,
                'movie_id' => 22,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:33',
                'updated_at' => '2022-07-05 15:44:33',
            ),
            194 => 
            array (
                'id' => 695,
                'user_id' => 332,
                'movie_id' => 22,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:33',
                'updated_at' => '2022-07-05 15:44:33',
            ),
            195 => 
            array (
                'id' => 696,
                'user_id' => 55,
                'movie_id' => 22,
                'rating' => 2.5,
                'created_at' => '2022-07-05 15:44:33',
                'updated_at' => '2022-07-05 15:44:33',
            ),
            196 => 
            array (
                'id' => 697,
                'user_id' => 99,
                'movie_id' => 22,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:44:34',
                'updated_at' => '2022-07-05 15:44:34',
            ),
            197 => 
            array (
                'id' => 698,
                'user_id' => 327,
                'movie_id' => 22,
                'rating' => 2.0,
                'created_at' => '2022-07-05 15:44:34',
                'updated_at' => '2022-07-05 15:44:34',
            ),
            198 => 
            array (
                'id' => 699,
                'user_id' => 333,
                'movie_id' => 22,
                'rating' => 2.0,
                'created_at' => '2022-07-05 15:44:34',
                'updated_at' => '2022-07-05 15:44:34',
            ),
            199 => 
            array (
                'id' => 700,
                'user_id' => 174,
                'movie_id' => 22,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:34',
                'updated_at' => '2022-07-05 15:44:34',
            ),
            200 => 
            array (
                'id' => 701,
                'user_id' => 317,
                'movie_id' => 22,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:34',
                'updated_at' => '2022-07-05 15:44:34',
            ),
            201 => 
            array (
                'id' => 702,
                'user_id' => 36,
                'movie_id' => 22,
                'rating' => 1.5,
                'created_at' => '2022-07-05 15:44:35',
                'updated_at' => '2022-07-05 15:44:35',
            ),
            202 => 
            array (
                'id' => 703,
                'user_id' => 334,
                'movie_id' => 22,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:35',
                'updated_at' => '2022-07-05 15:44:35',
            ),
            203 => 
            array (
                'id' => 704,
                'user_id' => 335,
                'movie_id' => 22,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:35',
                'updated_at' => '2022-07-05 15:44:35',
            ),
            204 => 
            array (
                'id' => 705,
                'user_id' => 135,
                'movie_id' => 22,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:35',
                'updated_at' => '2022-07-05 15:44:35',
            ),
            205 => 
            array (
                'id' => 706,
                'user_id' => 85,
                'movie_id' => 22,
                'rating' => 2.5,
                'created_at' => '2022-07-05 15:44:35',
                'updated_at' => '2022-07-05 15:44:35',
            ),
            206 => 
            array (
                'id' => 707,
                'user_id' => 336,
                'movie_id' => 22,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:35',
                'updated_at' => '2022-07-05 15:44:35',
            ),
            207 => 
            array (
                'id' => 708,
                'user_id' => 337,
                'movie_id' => 22,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:36',
                'updated_at' => '2022-07-05 15:44:36',
            ),
            208 => 
            array (
                'id' => 709,
                'user_id' => 143,
                'movie_id' => 23,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:36',
                'updated_at' => '2022-07-05 15:44:36',
            ),
            209 => 
            array (
                'id' => 710,
                'user_id' => 338,
                'movie_id' => 23,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:36',
                'updated_at' => '2022-07-05 15:44:36',
            ),
            210 => 
            array (
                'id' => 711,
                'user_id' => 3,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:36',
                'updated_at' => '2022-07-05 15:44:36',
            ),
            211 => 
            array (
                'id' => 712,
                'user_id' => 339,
                'movie_id' => 23,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:36',
                'updated_at' => '2022-07-05 15:44:36',
            ),
            212 => 
            array (
                'id' => 713,
                'user_id' => 340,
                'movie_id' => 23,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:37',
                'updated_at' => '2022-07-05 15:44:37',
            ),
            213 => 
            array (
                'id' => 714,
                'user_id' => 341,
                'movie_id' => 23,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:37',
                'updated_at' => '2022-07-05 15:44:37',
            ),
            214 => 
            array (
                'id' => 715,
                'user_id' => 169,
                'movie_id' => 23,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:37',
                'updated_at' => '2022-07-05 15:44:37',
            ),
            215 => 
            array (
                'id' => 716,
                'user_id' => 17,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:37',
                'updated_at' => '2022-07-05 15:44:37',
            ),
            216 => 
            array (
                'id' => 717,
                'user_id' => 342,
                'movie_id' => 23,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:37',
                'updated_at' => '2022-07-05 15:44:37',
            ),
            217 => 
            array (
                'id' => 718,
                'user_id' => 198,
                'movie_id' => 23,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:38',
                'updated_at' => '2022-07-05 15:44:38',
            ),
            218 => 
            array (
                'id' => 719,
                'user_id' => 343,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:38',
                'updated_at' => '2022-07-05 15:44:38',
            ),
            219 => 
            array (
                'id' => 720,
                'user_id' => 127,
                'movie_id' => 23,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:38',
                'updated_at' => '2022-07-05 15:44:38',
            ),
            220 => 
            array (
                'id' => 721,
                'user_id' => 344,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:38',
                'updated_at' => '2022-07-05 15:44:38',
            ),
            221 => 
            array (
                'id' => 722,
                'user_id' => 54,
                'movie_id' => 23,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:38',
                'updated_at' => '2022-07-05 15:44:38',
            ),
            222 => 
            array (
                'id' => 723,
                'user_id' => 82,
                'movie_id' => 23,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:38',
                'updated_at' => '2022-07-05 15:44:38',
            ),
            223 => 
            array (
                'id' => 724,
                'user_id' => 333,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:39',
                'updated_at' => '2022-07-05 15:44:39',
            ),
            224 => 
            array (
                'id' => 725,
                'user_id' => 174,
                'movie_id' => 23,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:39',
                'updated_at' => '2022-07-05 15:44:39',
            ),
            225 => 
            array (
                'id' => 726,
                'user_id' => 317,
                'movie_id' => 23,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:39',
                'updated_at' => '2022-07-05 15:44:39',
            ),
            226 => 
            array (
                'id' => 727,
                'user_id' => 40,
                'movie_id' => 23,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:39',
                'updated_at' => '2022-07-05 15:44:39',
            ),
            227 => 
            array (
                'id' => 728,
                'user_id' => 205,
                'movie_id' => 23,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:39',
                'updated_at' => '2022-07-05 15:44:39',
            ),
            228 => 
            array (
                'id' => 729,
                'user_id' => 65,
                'movie_id' => 23,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:40',
                'updated_at' => '2022-07-05 15:44:40',
            ),
            229 => 
            array (
                'id' => 730,
                'user_id' => 345,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:40',
                'updated_at' => '2022-07-05 15:44:40',
            ),
            230 => 
            array (
                'id' => 731,
                'user_id' => 337,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:40',
                'updated_at' => '2022-07-05 15:44:40',
            ),
            231 => 
            array (
                'id' => 732,
                'user_id' => 86,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:40',
                'updated_at' => '2022-07-05 15:44:40',
            ),
            232 => 
            array (
                'id' => 733,
                'user_id' => 87,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:40',
                'updated_at' => '2022-07-05 15:44:40',
            ),
            233 => 
            array (
                'id' => 734,
                'user_id' => 88,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:41',
                'updated_at' => '2022-07-05 15:44:41',
            ),
            234 => 
            array (
                'id' => 735,
                'user_id' => 346,
                'movie_id' => 23,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:41',
                'updated_at' => '2022-07-05 15:44:41',
            ),
            235 => 
            array (
                'id' => 736,
                'user_id' => 347,
                'movie_id' => 24,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:41',
                'updated_at' => '2022-07-05 15:44:41',
            ),
            236 => 
            array (
                'id' => 737,
                'user_id' => 137,
                'movie_id' => 24,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:41',
                'updated_at' => '2022-07-05 15:44:41',
            ),
            237 => 
            array (
                'id' => 738,
                'user_id' => 139,
                'movie_id' => 24,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:41',
                'updated_at' => '2022-07-05 15:44:41',
            ),
            238 => 
            array (
                'id' => 739,
                'user_id' => 273,
                'movie_id' => 24,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:41',
                'updated_at' => '2022-07-05 15:44:41',
            ),
            239 => 
            array (
                'id' => 740,
                'user_id' => 165,
                'movie_id' => 24,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:42',
                'updated_at' => '2022-07-05 15:44:42',
            ),
            240 => 
            array (
                'id' => 741,
                'user_id' => 46,
                'movie_id' => 24,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:42',
                'updated_at' => '2022-07-05 15:44:42',
            ),
            241 => 
            array (
                'id' => 742,
                'user_id' => 6,
                'movie_id' => 24,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:42',
                'updated_at' => '2022-07-05 15:44:42',
            ),
            242 => 
            array (
                'id' => 743,
                'user_id' => 145,
                'movie_id' => 24,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:42',
                'updated_at' => '2022-07-05 15:44:42',
            ),
            243 => 
            array (
                'id' => 744,
                'user_id' => 209,
                'movie_id' => 24,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:42',
                'updated_at' => '2022-07-05 15:44:42',
            ),
            244 => 
            array (
                'id' => 745,
                'user_id' => 348,
                'movie_id' => 24,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:43',
                'updated_at' => '2022-07-05 15:44:43',
            ),
            245 => 
            array (
                'id' => 746,
                'user_id' => 316,
                'movie_id' => 24,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:43',
                'updated_at' => '2022-07-05 15:44:43',
            ),
            246 => 
            array (
                'id' => 747,
                'user_id' => 254,
                'movie_id' => 24,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:43',
                'updated_at' => '2022-07-05 15:44:43',
            ),
            247 => 
            array (
                'id' => 748,
                'user_id' => 319,
                'movie_id' => 24,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:43',
                'updated_at' => '2022-07-05 15:44:43',
            ),
            248 => 
            array (
                'id' => 749,
                'user_id' => 227,
                'movie_id' => 24,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:43',
                'updated_at' => '2022-07-05 15:44:43',
            ),
            249 => 
            array (
                'id' => 750,
                'user_id' => 320,
                'movie_id' => 24,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:44',
                'updated_at' => '2022-07-05 15:44:44',
            ),
            250 => 
            array (
                'id' => 751,
                'user_id' => 278,
                'movie_id' => 24,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:44',
                'updated_at' => '2022-07-05 15:44:44',
            ),
            251 => 
            array (
                'id' => 752,
                'user_id' => 331,
                'movie_id' => 24,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:44',
                'updated_at' => '2022-07-05 15:44:44',
            ),
            252 => 
            array (
                'id' => 753,
                'user_id' => 150,
                'movie_id' => 24,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:44',
                'updated_at' => '2022-07-05 15:44:44',
            ),
            253 => 
            array (
                'id' => 754,
                'user_id' => 21,
                'movie_id' => 24,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:44',
                'updated_at' => '2022-07-05 15:44:44',
            ),
            254 => 
            array (
                'id' => 755,
                'user_id' => 321,
                'movie_id' => 24,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:44',
                'updated_at' => '2022-07-05 15:44:44',
            ),
            255 => 
            array (
                'id' => 756,
                'user_id' => 344,
                'movie_id' => 24,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:45',
                'updated_at' => '2022-07-05 15:44:45',
            ),
            256 => 
            array (
                'id' => 757,
                'user_id' => 332,
                'movie_id' => 24,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:45',
                'updated_at' => '2022-07-05 15:44:45',
            ),
            257 => 
            array (
                'id' => 758,
                'user_id' => 349,
                'movie_id' => 24,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:45',
                'updated_at' => '2022-07-05 15:44:45',
            ),
            258 => 
            array (
                'id' => 759,
                'user_id' => 174,
                'movie_id' => 24,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:45',
                'updated_at' => '2022-07-05 15:44:45',
            ),
            259 => 
            array (
                'id' => 760,
                'user_id' => 61,
                'movie_id' => 24,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:45',
                'updated_at' => '2022-07-05 15:44:45',
            ),
            260 => 
            array (
                'id' => 761,
                'user_id' => 328,
                'movie_id' => 24,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:46',
                'updated_at' => '2022-07-05 15:44:46',
            ),
            261 => 
            array (
                'id' => 762,
                'user_id' => 40,
                'movie_id' => 24,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:46',
                'updated_at' => '2022-07-05 15:44:46',
            ),
            262 => 
            array (
                'id' => 763,
                'user_id' => 135,
                'movie_id' => 24,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:46',
                'updated_at' => '2022-07-05 15:44:46',
            ),
            263 => 
            array (
                'id' => 764,
                'user_id' => 350,
                'movie_id' => 24,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:46',
                'updated_at' => '2022-07-05 15:44:46',
            ),
            264 => 
            array (
                'id' => 765,
                'user_id' => 273,
                'movie_id' => 25,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:46',
                'updated_at' => '2022-07-05 15:44:46',
            ),
            265 => 
            array (
                'id' => 766,
                'user_id' => 180,
                'movie_id' => 25,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:47',
                'updated_at' => '2022-07-05 15:44:47',
            ),
            266 => 
            array (
                'id' => 767,
                'user_id' => 351,
                'movie_id' => 25,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:47',
                'updated_at' => '2022-07-05 15:44:47',
            ),
            267 => 
            array (
                'id' => 768,
                'user_id' => 45,
                'movie_id' => 25,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:47',
                'updated_at' => '2022-07-05 15:44:47',
            ),
            268 => 
            array (
                'id' => 769,
                'user_id' => 110,
                'movie_id' => 25,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:47',
                'updated_at' => '2022-07-05 15:44:47',
            ),
            269 => 
            array (
                'id' => 770,
                'user_id' => 352,
                'movie_id' => 25,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:47',
                'updated_at' => '2022-07-05 15:44:47',
            ),
            270 => 
            array (
                'id' => 771,
                'user_id' => 111,
                'movie_id' => 25,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:47',
                'updated_at' => '2022-07-05 15:44:47',
            ),
            271 => 
            array (
                'id' => 772,
                'user_id' => 325,
                'movie_id' => 25,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:48',
                'updated_at' => '2022-07-05 15:44:48',
            ),
            272 => 
            array (
                'id' => 773,
                'user_id' => 209,
                'movie_id' => 25,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:48',
                'updated_at' => '2022-07-05 15:44:48',
            ),
            273 => 
            array (
                'id' => 774,
                'user_id' => 353,
                'movie_id' => 25,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:48',
                'updated_at' => '2022-07-05 15:44:48',
            ),
            274 => 
            array (
                'id' => 775,
                'user_id' => 354,
                'movie_id' => 25,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:44:48',
                'updated_at' => '2022-07-05 15:44:48',
            ),
            275 => 
            array (
                'id' => 776,
                'user_id' => 254,
                'movie_id' => 25,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:48',
                'updated_at' => '2022-07-05 15:44:48',
            ),
            276 => 
            array (
                'id' => 777,
                'user_id' => 319,
                'movie_id' => 25,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:49',
                'updated_at' => '2022-07-05 15:44:49',
            ),
            277 => 
            array (
                'id' => 778,
                'user_id' => 277,
                'movie_id' => 25,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:49',
                'updated_at' => '2022-07-05 15:44:49',
            ),
            278 => 
            array (
                'id' => 779,
                'user_id' => 320,
                'movie_id' => 25,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:49',
                'updated_at' => '2022-07-05 15:44:49',
            ),
            279 => 
            array (
                'id' => 780,
                'user_id' => 49,
                'movie_id' => 25,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:49',
                'updated_at' => '2022-07-05 15:44:49',
            ),
            280 => 
            array (
                'id' => 781,
                'user_id' => 148,
                'movie_id' => 25,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:49',
                'updated_at' => '2022-07-05 15:44:49',
            ),
            281 => 
            array (
                'id' => 782,
                'user_id' => 125,
                'movie_id' => 25,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:50',
                'updated_at' => '2022-07-05 15:44:50',
            ),
            282 => 
            array (
                'id' => 783,
                'user_id' => 291,
                'movie_id' => 25,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:50',
                'updated_at' => '2022-07-05 15:44:50',
            ),
            283 => 
            array (
                'id' => 784,
                'user_id' => 355,
                'movie_id' => 25,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:50',
                'updated_at' => '2022-07-05 15:44:50',
            ),
            284 => 
            array (
                'id' => 785,
                'user_id' => 344,
                'movie_id' => 25,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:50',
                'updated_at' => '2022-07-05 15:44:50',
            ),
            285 => 
            array (
                'id' => 786,
                'user_id' => 55,
                'movie_id' => 25,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:50',
                'updated_at' => '2022-07-05 15:44:50',
            ),
            286 => 
            array (
                'id' => 787,
                'user_id' => 82,
                'movie_id' => 25,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:50',
                'updated_at' => '2022-07-05 15:44:50',
            ),
            287 => 
            array (
                'id' => 788,
                'user_id' => 356,
                'movie_id' => 25,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:51',
                'updated_at' => '2022-07-05 15:44:51',
            ),
            288 => 
            array (
                'id' => 789,
                'user_id' => 175,
                'movie_id' => 25,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:51',
                'updated_at' => '2022-07-05 15:44:51',
            ),
            289 => 
            array (
                'id' => 790,
                'user_id' => 36,
                'movie_id' => 25,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:51',
                'updated_at' => '2022-07-05 15:44:51',
            ),
            290 => 
            array (
                'id' => 791,
                'user_id' => 282,
                'movie_id' => 25,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:51',
                'updated_at' => '2022-07-05 15:44:51',
            ),
            291 => 
            array (
                'id' => 792,
                'user_id' => 40,
                'movie_id' => 25,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:51',
                'updated_at' => '2022-07-05 15:44:51',
            ),
            292 => 
            array (
                'id' => 793,
                'user_id' => 357,
                'movie_id' => 25,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:52',
                'updated_at' => '2022-07-05 15:44:52',
            ),
            293 => 
            array (
                'id' => 794,
                'user_id' => 135,
                'movie_id' => 25,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:52',
                'updated_at' => '2022-07-05 15:44:52',
            ),
            294 => 
            array (
                'id' => 795,
                'user_id' => 88,
                'movie_id' => 25,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:44:52',
                'updated_at' => '2022-07-05 15:44:52',
            ),
            295 => 
            array (
                'id' => 796,
                'user_id' => 358,
                'movie_id' => 26,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:52',
                'updated_at' => '2022-07-05 15:44:52',
            ),
            296 => 
            array (
                'id' => 797,
                'user_id' => 206,
                'movie_id' => 26,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:52',
                'updated_at' => '2022-07-05 15:44:52',
            ),
            297 => 
            array (
                'id' => 798,
                'user_id' => 44,
                'movie_id' => 26,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:53',
                'updated_at' => '2022-07-05 15:44:53',
            ),
            298 => 
            array (
                'id' => 799,
                'user_id' => 359,
                'movie_id' => 26,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:53',
                'updated_at' => '2022-07-05 15:44:53',
            ),
            299 => 
            array (
                'id' => 800,
                'user_id' => 165,
                'movie_id' => 26,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:53',
                'updated_at' => '2022-07-05 15:44:53',
            ),
            300 => 
            array (
                'id' => 801,
                'user_id' => 208,
                'movie_id' => 26,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:53',
                'updated_at' => '2022-07-05 15:44:53',
            ),
            301 => 
            array (
                'id' => 802,
                'user_id' => 360,
                'movie_id' => 26,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:53',
                'updated_at' => '2022-07-05 15:44:53',
            ),
            302 => 
            array (
                'id' => 803,
                'user_id' => 310,
                'movie_id' => 26,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:53',
                'updated_at' => '2022-07-05 15:44:53',
            ),
            303 => 
            array (
                'id' => 804,
                'user_id' => 45,
                'movie_id' => 26,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:54',
                'updated_at' => '2022-07-05 15:44:54',
            ),
            304 => 
            array (
                'id' => 805,
                'user_id' => 252,
                'movie_id' => 26,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:44:54',
                'updated_at' => '2022-07-05 15:44:54',
            ),
            305 => 
            array (
                'id' => 806,
                'user_id' => 284,
                'movie_id' => 26,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:54',
                'updated_at' => '2022-07-05 15:44:54',
            ),
            306 => 
            array (
                'id' => 807,
                'user_id' => 8,
                'movie_id' => 26,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:54',
                'updated_at' => '2022-07-05 15:44:54',
            ),
            307 => 
            array (
                'id' => 808,
                'user_id' => 361,
                'movie_id' => 26,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:54',
                'updated_at' => '2022-07-05 15:44:54',
            ),
            308 => 
            array (
                'id' => 809,
                'user_id' => 13,
                'movie_id' => 26,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:44:55',
                'updated_at' => '2022-07-05 15:44:55',
            ),
            309 => 
            array (
                'id' => 810,
                'user_id' => 277,
                'movie_id' => 26,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:55',
                'updated_at' => '2022-07-05 15:44:55',
            ),
            310 => 
            array (
                'id' => 811,
                'user_id' => 362,
                'movie_id' => 26,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:55',
                'updated_at' => '2022-07-05 15:44:55',
            ),
            311 => 
            array (
                'id' => 812,
                'user_id' => 279,
                'movie_id' => 26,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:55',
                'updated_at' => '2022-07-05 15:44:55',
            ),
            312 => 
            array (
                'id' => 813,
                'user_id' => 21,
                'movie_id' => 26,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:55',
                'updated_at' => '2022-07-05 15:44:55',
            ),
            313 => 
            array (
                'id' => 814,
                'user_id' => 363,
                'movie_id' => 26,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:56',
                'updated_at' => '2022-07-05 15:44:56',
            ),
            314 => 
            array (
                'id' => 815,
                'user_id' => 79,
                'movie_id' => 26,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:56',
                'updated_at' => '2022-07-05 15:44:56',
            ),
            315 => 
            array (
                'id' => 816,
                'user_id' => 344,
                'movie_id' => 26,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:56',
                'updated_at' => '2022-07-05 15:44:56',
            ),
            316 => 
            array (
                'id' => 817,
                'user_id' => 187,
                'movie_id' => 26,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:56',
                'updated_at' => '2022-07-05 15:44:56',
            ),
            317 => 
            array (
                'id' => 818,
                'user_id' => 364,
                'movie_id' => 26,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:56',
                'updated_at' => '2022-07-05 15:44:56',
            ),
            318 => 
            array (
                'id' => 819,
                'user_id' => 172,
                'movie_id' => 26,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:56',
                'updated_at' => '2022-07-05 15:44:56',
            ),
            319 => 
            array (
                'id' => 820,
                'user_id' => 201,
                'movie_id' => 26,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:57',
                'updated_at' => '2022-07-05 15:44:57',
            ),
            320 => 
            array (
                'id' => 821,
                'user_id' => 356,
                'movie_id' => 26,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:57',
                'updated_at' => '2022-07-05 15:44:57',
            ),
            321 => 
            array (
                'id' => 822,
                'user_id' => 61,
                'movie_id' => 26,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:44:57',
                'updated_at' => '2022-07-05 15:44:57',
            ),
            322 => 
            array (
                'id' => 823,
                'user_id' => 317,
                'movie_id' => 26,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:44:57',
                'updated_at' => '2022-07-05 15:44:57',
            ),
            323 => 
            array (
                'id' => 824,
                'user_id' => 365,
                'movie_id' => 26,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:44:57',
                'updated_at' => '2022-07-05 15:44:57',
            ),
            324 => 
            array (
                'id' => 825,
                'user_id' => 40,
                'movie_id' => 26,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:44:58',
                'updated_at' => '2022-07-05 15:44:58',
            ),
            325 => 
            array (
                'id' => 826,
                'user_id' => 357,
                'movie_id' => 26,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:58',
                'updated_at' => '2022-07-05 15:44:58',
            ),
            326 => 
            array (
                'id' => 827,
                'user_id' => 42,
                'movie_id' => 26,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:44:58',
                'updated_at' => '2022-07-05 15:44:58',
            ),
            327 => 
            array (
                'id' => 828,
                'user_id' => 65,
                'movie_id' => 26,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:58',
                'updated_at' => '2022-07-05 15:44:58',
            ),
            328 => 
            array (
                'id' => 829,
                'user_id' => 107,
                'movie_id' => 26,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:58',
                'updated_at' => '2022-07-05 15:44:58',
            ),
            329 => 
            array (
                'id' => 830,
                'user_id' => 178,
                'movie_id' => 26,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:44:58',
                'updated_at' => '2022-07-05 15:44:58',
            ),
            330 => 
            array (
                'id' => 831,
                'user_id' => 322,
                'movie_id' => 27,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:59',
                'updated_at' => '2022-07-05 15:44:59',
            ),
            331 => 
            array (
                'id' => 832,
                'user_id' => 347,
                'movie_id' => 27,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:59',
                'updated_at' => '2022-07-05 15:44:59',
            ),
            332 => 
            array (
                'id' => 833,
                'user_id' => 4,
                'movie_id' => 27,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:44:59',
                'updated_at' => '2022-07-05 15:44:59',
            ),
            333 => 
            array (
                'id' => 834,
                'user_id' => 116,
                'movie_id' => 27,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:44:59',
                'updated_at' => '2022-07-05 15:44:59',
            ),
            334 => 
            array (
                'id' => 835,
                'user_id' => 316,
                'movie_id' => 27,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:44:59',
                'updated_at' => '2022-07-05 15:44:59',
            ),
            335 => 
            array (
                'id' => 836,
                'user_id' => 354,
                'movie_id' => 27,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:00',
                'updated_at' => '2022-07-05 15:45:00',
            ),
            336 => 
            array (
                'id' => 837,
                'user_id' => 254,
                'movie_id' => 27,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:00',
                'updated_at' => '2022-07-05 15:45:00',
            ),
            337 => 
            array (
                'id' => 838,
                'user_id' => 366,
                'movie_id' => 27,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:00',
                'updated_at' => '2022-07-05 15:45:00',
            ),
            338 => 
            array (
                'id' => 839,
                'user_id' => 278,
                'movie_id' => 27,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:00',
                'updated_at' => '2022-07-05 15:45:00',
            ),
            339 => 
            array (
                'id' => 840,
                'user_id' => 125,
                'movie_id' => 27,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:00',
                'updated_at' => '2022-07-05 15:45:00',
            ),
            340 => 
            array (
                'id' => 841,
                'user_id' => 229,
                'movie_id' => 27,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:01',
                'updated_at' => '2022-07-05 15:45:01',
            ),
            341 => 
            array (
                'id' => 842,
                'user_id' => 53,
                'movie_id' => 27,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:01',
                'updated_at' => '2022-07-05 15:45:01',
            ),
            342 => 
            array (
                'id' => 843,
                'user_id' => 172,
                'movie_id' => 27,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:01',
                'updated_at' => '2022-07-05 15:45:01',
            ),
            343 => 
            array (
                'id' => 844,
                'user_id' => 56,
                'movie_id' => 27,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:01',
                'updated_at' => '2022-07-05 15:45:01',
            ),
            344 => 
            array (
                'id' => 845,
                'user_id' => 174,
                'movie_id' => 27,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:01',
                'updated_at' => '2022-07-05 15:45:01',
            ),
            345 => 
            array (
                'id' => 846,
                'user_id' => 36,
                'movie_id' => 27,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:02',
                'updated_at' => '2022-07-05 15:45:02',
            ),
            346 => 
            array (
                'id' => 847,
                'user_id' => 40,
                'movie_id' => 27,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:02',
                'updated_at' => '2022-07-05 15:45:02',
            ),
            347 => 
            array (
                'id' => 848,
                'user_id' => 64,
                'movie_id' => 27,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:02',
                'updated_at' => '2022-07-05 15:45:02',
            ),
            348 => 
            array (
                'id' => 849,
                'user_id' => 65,
                'movie_id' => 27,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:02',
                'updated_at' => '2022-07-05 15:45:02',
            ),
            349 => 
            array (
                'id' => 850,
                'user_id' => 87,
                'movie_id' => 27,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:02',
                'updated_at' => '2022-07-05 15:45:02',
            ),
            350 => 
            array (
                'id' => 851,
                'user_id' => 44,
                'movie_id' => 28,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:03',
                'updated_at' => '2022-07-05 15:45:03',
            ),
            351 => 
            array (
                'id' => 852,
                'user_id' => 223,
                'movie_id' => 28,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:03',
                'updated_at' => '2022-07-05 15:45:03',
            ),
            352 => 
            array (
                'id' => 853,
                'user_id' => 367,
                'movie_id' => 28,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:03',
                'updated_at' => '2022-07-05 15:45:03',
            ),
            353 => 
            array (
                'id' => 854,
                'user_id' => 329,
                'movie_id' => 28,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:03',
                'updated_at' => '2022-07-05 15:45:03',
            ),
            354 => 
            array (
                'id' => 855,
                'user_id' => 252,
                'movie_id' => 28,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:03',
                'updated_at' => '2022-07-05 15:45:03',
            ),
            355 => 
            array (
                'id' => 856,
                'user_id' => 284,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:04',
                'updated_at' => '2022-07-05 15:45:04',
            ),
            356 => 
            array (
                'id' => 857,
                'user_id' => 361,
                'movie_id' => 28,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:04',
                'updated_at' => '2022-07-05 15:45:04',
            ),
            357 => 
            array (
                'id' => 858,
                'user_id' => 210,
                'movie_id' => 28,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:04',
                'updated_at' => '2022-07-05 15:45:04',
            ),
            358 => 
            array (
                'id' => 859,
                'user_id' => 368,
                'movie_id' => 28,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:04',
                'updated_at' => '2022-07-05 15:45:04',
            ),
            359 => 
            array (
                'id' => 860,
                'user_id' => 121,
                'movie_id' => 28,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:04',
                'updated_at' => '2022-07-05 15:45:04',
            ),
            360 => 
            array (
                'id' => 861,
                'user_id' => 286,
                'movie_id' => 28,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:04',
                'updated_at' => '2022-07-05 15:45:04',
            ),
            361 => 
            array (
                'id' => 862,
                'user_id' => 169,
                'movie_id' => 28,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:05',
                'updated_at' => '2022-07-05 15:45:05',
            ),
            362 => 
            array (
                'id' => 863,
                'user_id' => 342,
                'movie_id' => 28,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:05',
                'updated_at' => '2022-07-05 15:45:05',
            ),
            363 => 
            array (
                'id' => 864,
                'user_id' => 270,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:05',
                'updated_at' => '2022-07-05 15:45:05',
            ),
            364 => 
            array (
                'id' => 865,
                'user_id' => 229,
                'movie_id' => 28,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:05',
                'updated_at' => '2022-07-05 15:45:05',
            ),
            365 => 
            array (
                'id' => 866,
                'user_id' => 127,
                'movie_id' => 28,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:05',
                'updated_at' => '2022-07-05 15:45:05',
            ),
            366 => 
            array (
                'id' => 867,
                'user_id' => 369,
                'movie_id' => 28,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:06',
                'updated_at' => '2022-07-05 15:45:06',
            ),
            367 => 
            array (
                'id' => 868,
                'user_id' => 76,
                'movie_id' => 28,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:06',
                'updated_at' => '2022-07-05 15:45:06',
            ),
            368 => 
            array (
                'id' => 869,
                'user_id' => 370,
                'movie_id' => 28,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:06',
                'updated_at' => '2022-07-05 15:45:06',
            ),
            369 => 
            array (
                'id' => 870,
                'user_id' => 185,
                'movie_id' => 28,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:06',
                'updated_at' => '2022-07-05 15:45:06',
            ),
            370 => 
            array (
                'id' => 871,
                'user_id' => 24,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:06',
                'updated_at' => '2022-07-05 15:45:06',
            ),
            371 => 
            array (
                'id' => 872,
                'user_id' => 201,
                'movie_id' => 28,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:07',
                'updated_at' => '2022-07-05 15:45:07',
            ),
            372 => 
            array (
                'id' => 873,
                'user_id' => 55,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:07',
                'updated_at' => '2022-07-05 15:45:07',
            ),
            373 => 
            array (
                'id' => 874,
                'user_id' => 157,
                'movie_id' => 28,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:07',
                'updated_at' => '2022-07-05 15:45:07',
            ),
            374 => 
            array (
                'id' => 875,
                'user_id' => 31,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:07',
                'updated_at' => '2022-07-05 15:45:07',
            ),
            375 => 
            array (
                'id' => 876,
                'user_id' => 371,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:07',
                'updated_at' => '2022-07-05 15:45:07',
            ),
            376 => 
            array (
                'id' => 877,
                'user_id' => 61,
                'movie_id' => 28,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:07',
                'updated_at' => '2022-07-05 15:45:07',
            ),
            377 => 
            array (
                'id' => 878,
                'user_id' => 36,
                'movie_id' => 28,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:08',
                'updated_at' => '2022-07-05 15:45:08',
            ),
            378 => 
            array (
                'id' => 879,
                'user_id' => 334,
                'movie_id' => 28,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:08',
                'updated_at' => '2022-07-05 15:45:08',
            ),
            379 => 
            array (
                'id' => 880,
                'user_id' => 62,
                'movie_id' => 28,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:08',
                'updated_at' => '2022-07-05 15:45:08',
            ),
            380 => 
            array (
                'id' => 881,
                'user_id' => 372,
                'movie_id' => 28,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:08',
                'updated_at' => '2022-07-05 15:45:08',
            ),
            381 => 
            array (
                'id' => 882,
                'user_id' => 365,
                'movie_id' => 28,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:08',
                'updated_at' => '2022-07-05 15:45:08',
            ),
            382 => 
            array (
                'id' => 883,
                'user_id' => 40,
                'movie_id' => 28,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:09',
                'updated_at' => '2022-07-05 15:45:09',
            ),
            383 => 
            array (
                'id' => 884,
                'user_id' => 64,
                'movie_id' => 28,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:09',
                'updated_at' => '2022-07-05 15:45:09',
            ),
            384 => 
            array (
                'id' => 885,
                'user_id' => 205,
                'movie_id' => 28,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:09',
                'updated_at' => '2022-07-05 15:45:09',
            ),
            385 => 
            array (
                'id' => 886,
                'user_id' => 42,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:09',
                'updated_at' => '2022-07-05 15:45:09',
            ),
            386 => 
            array (
                'id' => 887,
                'user_id' => 191,
                'movie_id' => 28,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:09',
                'updated_at' => '2022-07-05 15:45:09',
            ),
            387 => 
            array (
                'id' => 888,
                'user_id' => 105,
                'movie_id' => 28,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:09',
                'updated_at' => '2022-07-05 15:45:09',
            ),
            388 => 
            array (
                'id' => 889,
                'user_id' => 373,
                'movie_id' => 28,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:10',
                'updated_at' => '2022-07-05 15:45:10',
            ),
            389 => 
            array (
                'id' => 890,
                'user_id' => 238,
                'movie_id' => 28,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:10',
                'updated_at' => '2022-07-05 15:45:10',
            ),
            390 => 
            array (
                'id' => 891,
                'user_id' => 44,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:10',
                'updated_at' => '2022-07-05 15:45:10',
            ),
            391 => 
            array (
                'id' => 892,
                'user_id' => 180,
                'movie_id' => 29,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:10',
                'updated_at' => '2022-07-05 15:45:10',
            ),
            392 => 
            array (
                'id' => 893,
                'user_id' => 367,
                'movie_id' => 29,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:10',
                'updated_at' => '2022-07-05 15:45:10',
            ),
            393 => 
            array (
                'id' => 894,
                'user_id' => 210,
                'movie_id' => 29,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:11',
                'updated_at' => '2022-07-05 15:45:11',
            ),
            394 => 
            array (
                'id' => 895,
                'user_id' => 340,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:11',
                'updated_at' => '2022-07-05 15:45:11',
            ),
            395 => 
            array (
                'id' => 896,
                'user_id' => 10,
                'movie_id' => 29,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:11',
                'updated_at' => '2022-07-05 15:45:11',
            ),
            396 => 
            array (
                'id' => 897,
                'user_id' => 254,
                'movie_id' => 29,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:11',
                'updated_at' => '2022-07-05 15:45:11',
            ),
            397 => 
            array (
                'id' => 898,
                'user_id' => 94,
                'movie_id' => 29,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:11',
                'updated_at' => '2022-07-05 15:45:11',
            ),
            398 => 
            array (
                'id' => 899,
                'user_id' => 17,
                'movie_id' => 29,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:11',
                'updated_at' => '2022-07-05 15:45:11',
            ),
            399 => 
            array (
                'id' => 900,
                'user_id' => 312,
                'movie_id' => 29,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:12',
                'updated_at' => '2022-07-05 15:45:12',
            ),
            400 => 
            array (
                'id' => 901,
                'user_id' => 153,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:12',
                'updated_at' => '2022-07-05 15:45:12',
            ),
            401 => 
            array (
                'id' => 902,
                'user_id' => 21,
                'movie_id' => 29,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:12',
                'updated_at' => '2022-07-05 15:45:12',
            ),
            402 => 
            array (
                'id' => 903,
                'user_id' => 305,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:12',
                'updated_at' => '2022-07-05 15:45:12',
            ),
            403 => 
            array (
                'id' => 904,
                'user_id' => 370,
                'movie_id' => 29,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:12',
                'updated_at' => '2022-07-05 15:45:12',
            ),
            404 => 
            array (
                'id' => 905,
                'user_id' => 374,
                'movie_id' => 29,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:13',
                'updated_at' => '2022-07-05 15:45:13',
            ),
            405 => 
            array (
                'id' => 906,
                'user_id' => 201,
                'movie_id' => 29,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:13',
                'updated_at' => '2022-07-05 15:45:13',
            ),
            406 => 
            array (
                'id' => 907,
                'user_id' => 173,
                'movie_id' => 29,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:13',
                'updated_at' => '2022-07-05 15:45:13',
            ),
            407 => 
            array (
                'id' => 908,
                'user_id' => 232,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:13',
                'updated_at' => '2022-07-05 15:45:13',
            ),
            408 => 
            array (
                'id' => 909,
                'user_id' => 55,
                'movie_id' => 29,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:13',
                'updated_at' => '2022-07-05 15:45:13',
            ),
            409 => 
            array (
                'id' => 910,
                'user_id' => 375,
                'movie_id' => 29,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:14',
                'updated_at' => '2022-07-05 15:45:14',
            ),
            410 => 
            array (
                'id' => 911,
                'user_id' => 29,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:14',
                'updated_at' => '2022-07-05 15:45:14',
            ),
            411 => 
            array (
                'id' => 912,
                'user_id' => 376,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:14',
                'updated_at' => '2022-07-05 15:45:14',
            ),
            412 => 
            array (
                'id' => 913,
                'user_id' => 33,
                'movie_id' => 29,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:14',
                'updated_at' => '2022-07-05 15:45:14',
            ),
            413 => 
            array (
                'id' => 914,
                'user_id' => 101,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:14',
                'updated_at' => '2022-07-05 15:45:14',
            ),
            414 => 
            array (
                'id' => 915,
                'user_id' => 61,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:14',
                'updated_at' => '2022-07-05 15:45:14',
            ),
            415 => 
            array (
                'id' => 916,
                'user_id' => 36,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:15',
                'updated_at' => '2022-07-05 15:45:15',
            ),
            416 => 
            array (
                'id' => 917,
                'user_id' => 102,
                'movie_id' => 29,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:15',
                'updated_at' => '2022-07-05 15:45:15',
            ),
            417 => 
            array (
                'id' => 918,
                'user_id' => 38,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:15',
                'updated_at' => '2022-07-05 15:45:15',
            ),
            418 => 
            array (
                'id' => 919,
                'user_id' => 365,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:15',
                'updated_at' => '2022-07-05 15:45:15',
            ),
            419 => 
            array (
                'id' => 920,
                'user_id' => 40,
                'movie_id' => 29,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:15',
                'updated_at' => '2022-07-05 15:45:15',
            ),
            420 => 
            array (
                'id' => 921,
                'user_id' => 263,
                'movie_id' => 29,
                'rating' => 1.0,
                'created_at' => '2022-07-05 15:45:16',
                'updated_at' => '2022-07-05 15:45:16',
            ),
            421 => 
            array (
                'id' => 922,
                'user_id' => 136,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:16',
                'updated_at' => '2022-07-05 15:45:16',
            ),
            422 => 
            array (
                'id' => 923,
                'user_id' => 65,
                'movie_id' => 29,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:16',
                'updated_at' => '2022-07-05 15:45:16',
            ),
            423 => 
            array (
                'id' => 924,
                'user_id' => 373,
                'movie_id' => 29,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:16',
                'updated_at' => '2022-07-05 15:45:16',
            ),
            424 => 
            array (
                'id' => 925,
                'user_id' => 240,
                'movie_id' => 30,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:16',
                'updated_at' => '2022-07-05 15:45:16',
            ),
            425 => 
            array (
                'id' => 926,
                'user_id' => 142,
                'movie_id' => 30,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:16',
                'updated_at' => '2022-07-05 15:45:16',
            ),
            426 => 
            array (
                'id' => 927,
                'user_id' => 309,
                'movie_id' => 30,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:17',
                'updated_at' => '2022-07-05 15:45:17',
            ),
            427 => 
            array (
                'id' => 928,
                'user_id' => 377,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:17',
                'updated_at' => '2022-07-05 15:45:17',
            ),
            428 => 
            array (
                'id' => 929,
                'user_id' => 284,
                'movie_id' => 30,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:17',
                'updated_at' => '2022-07-05 15:45:17',
            ),
            429 => 
            array (
                'id' => 930,
                'user_id' => 8,
                'movie_id' => 30,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:17',
                'updated_at' => '2022-07-05 15:45:17',
            ),
            430 => 
            array (
                'id' => 931,
                'user_id' => 197,
                'movie_id' => 30,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:17',
                'updated_at' => '2022-07-05 15:45:17',
            ),
            431 => 
            array (
                'id' => 932,
                'user_id' => 326,
                'movie_id' => 30,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:18',
                'updated_at' => '2022-07-05 15:45:18',
            ),
            432 => 
            array (
                'id' => 933,
                'user_id' => 169,
                'movie_id' => 30,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:18',
                'updated_at' => '2022-07-05 15:45:18',
            ),
            433 => 
            array (
                'id' => 934,
                'user_id' => 96,
                'movie_id' => 30,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:18',
                'updated_at' => '2022-07-05 15:45:18',
            ),
            434 => 
            array (
                'id' => 935,
                'user_id' => 378,
                'movie_id' => 30,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:18',
                'updated_at' => '2022-07-05 15:45:18',
            ),
            435 => 
            array (
                'id' => 936,
                'user_id' => 379,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:18',
                'updated_at' => '2022-07-05 15:45:18',
            ),
            436 => 
            array (
                'id' => 937,
                'user_id' => 49,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:18',
                'updated_at' => '2022-07-05 15:45:18',
            ),
            437 => 
            array (
                'id' => 938,
                'user_id' => 126,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:19',
                'updated_at' => '2022-07-05 15:45:19',
            ),
            438 => 
            array (
                'id' => 939,
                'user_id' => 183,
                'movie_id' => 30,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:19',
                'updated_at' => '2022-07-05 15:45:19',
            ),
            439 => 
            array (
                'id' => 940,
                'user_id' => 98,
                'movie_id' => 30,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:19',
                'updated_at' => '2022-07-05 15:45:19',
            ),
            440 => 
            array (
                'id' => 941,
                'user_id' => 199,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:19',
                'updated_at' => '2022-07-05 15:45:19',
            ),
            441 => 
            array (
                'id' => 942,
                'user_id' => 21,
                'movie_id' => 30,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:19',
                'updated_at' => '2022-07-05 15:45:19',
            ),
            442 => 
            array (
                'id' => 943,
                'user_id' => 321,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:20',
                'updated_at' => '2022-07-05 15:45:20',
            ),
            443 => 
            array (
                'id' => 944,
                'user_id' => 79,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:20',
                'updated_at' => '2022-07-05 15:45:20',
            ),
            444 => 
            array (
                'id' => 945,
                'user_id' => 380,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:20',
                'updated_at' => '2022-07-05 15:45:20',
            ),
            445 => 
            array (
                'id' => 946,
                'user_id' => 31,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:20',
                'updated_at' => '2022-07-05 15:45:20',
            ),
            446 => 
            array (
                'id' => 947,
                'user_id' => 61,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:20',
                'updated_at' => '2022-07-05 15:45:20',
            ),
            447 => 
            array (
                'id' => 948,
                'user_id' => 36,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:20',
                'updated_at' => '2022-07-05 15:45:20',
            ),
            448 => 
            array (
                'id' => 949,
                'user_id' => 308,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:21',
                'updated_at' => '2022-07-05 15:45:21',
            ),
            449 => 
            array (
                'id' => 950,
                'user_id' => 176,
                'movie_id' => 30,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:21',
                'updated_at' => '2022-07-05 15:45:21',
            ),
            450 => 
            array (
                'id' => 951,
                'user_id' => 40,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:21',
                'updated_at' => '2022-07-05 15:45:21',
            ),
            451 => 
            array (
                'id' => 952,
                'user_id' => 64,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:21',
                'updated_at' => '2022-07-05 15:45:21',
            ),
            452 => 
            array (
                'id' => 953,
                'user_id' => 381,
                'movie_id' => 30,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:21',
                'updated_at' => '2022-07-05 15:45:21',
            ),
            453 => 
            array (
                'id' => 954,
                'user_id' => 382,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:22',
                'updated_at' => '2022-07-05 15:45:22',
            ),
            454 => 
            array (
                'id' => 955,
                'user_id' => 42,
                'movie_id' => 30,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:22',
                'updated_at' => '2022-07-05 15:45:22',
            ),
            455 => 
            array (
                'id' => 956,
                'user_id' => 105,
                'movie_id' => 30,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:22',
                'updated_at' => '2022-07-05 15:45:22',
            ),
            456 => 
            array (
                'id' => 957,
                'user_id' => 358,
                'movie_id' => 31,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:22',
                'updated_at' => '2022-07-05 15:45:22',
            ),
            457 => 
            array (
                'id' => 958,
                'user_id' => 283,
                'movie_id' => 31,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:22',
                'updated_at' => '2022-07-05 15:45:22',
            ),
            458 => 
            array (
                'id' => 959,
                'user_id' => 114,
                'movie_id' => 31,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:23',
                'updated_at' => '2022-07-05 15:45:23',
            ),
            459 => 
            array (
                'id' => 960,
                'user_id' => 383,
                'movie_id' => 31,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:23',
                'updated_at' => '2022-07-05 15:45:23',
            ),
            460 => 
            array (
                'id' => 961,
                'user_id' => 181,
                'movie_id' => 31,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:23',
                'updated_at' => '2022-07-05 15:45:23',
            ),
            461 => 
            array (
                'id' => 962,
                'user_id' => 118,
                'movie_id' => 31,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:23',
                'updated_at' => '2022-07-05 15:45:23',
            ),
            462 => 
            array (
                'id' => 963,
                'user_id' => 182,
                'movie_id' => 31,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:23',
                'updated_at' => '2022-07-05 15:45:23',
            ),
            463 => 
            array (
                'id' => 964,
                'user_id' => 94,
                'movie_id' => 31,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:23',
                'updated_at' => '2022-07-05 15:45:23',
            ),
            464 => 
            array (
                'id' => 965,
                'user_id' => 169,
                'movie_id' => 31,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:24',
                'updated_at' => '2022-07-05 15:45:24',
            ),
            465 => 
            array (
                'id' => 966,
                'user_id' => 384,
                'movie_id' => 31,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:24',
                'updated_at' => '2022-07-05 15:45:24',
            ),
            466 => 
            array (
                'id' => 967,
                'user_id' => 270,
                'movie_id' => 31,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:24',
                'updated_at' => '2022-07-05 15:45:24',
            ),
            467 => 
            array (
                'id' => 968,
                'user_id' => 21,
                'movie_id' => 31,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:24',
                'updated_at' => '2022-07-05 15:45:24',
            ),
            468 => 
            array (
                'id' => 969,
                'user_id' => 280,
                'movie_id' => 31,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:24',
                'updated_at' => '2022-07-05 15:45:24',
            ),
            469 => 
            array (
                'id' => 970,
                'user_id' => 24,
                'movie_id' => 31,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:24',
                'updated_at' => '2022-07-05 15:45:24',
            ),
            470 => 
            array (
                'id' => 971,
                'user_id' => 313,
                'movie_id' => 31,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:25',
                'updated_at' => '2022-07-05 15:45:25',
            ),
            471 => 
            array (
                'id' => 972,
                'user_id' => 55,
                'movie_id' => 31,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:25',
                'updated_at' => '2022-07-05 15:45:25',
            ),
            472 => 
            array (
                'id' => 973,
                'user_id' => 60,
                'movie_id' => 31,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:25',
                'updated_at' => '2022-07-05 15:45:25',
            ),
            473 => 
            array (
                'id' => 974,
                'user_id' => 61,
                'movie_id' => 31,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:25',
                'updated_at' => '2022-07-05 15:45:25',
            ),
            474 => 
            array (
                'id' => 975,
                'user_id' => 37,
                'movie_id' => 31,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:25',
                'updated_at' => '2022-07-05 15:45:25',
            ),
            475 => 
            array (
                'id' => 976,
                'user_id' => 365,
                'movie_id' => 31,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:25',
                'updated_at' => '2022-07-05 15:45:25',
            ),
            476 => 
            array (
                'id' => 977,
                'user_id' => 139,
                'movie_id' => 32,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:26',
                'updated_at' => '2022-07-05 15:45:26',
            ),
            477 => 
            array (
                'id' => 978,
                'user_id' => 358,
                'movie_id' => 32,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:26',
                'updated_at' => '2022-07-05 15:45:26',
            ),
            478 => 
            array (
                'id' => 979,
                'user_id' => 385,
                'movie_id' => 32,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:26',
                'updated_at' => '2022-07-05 15:45:26',
            ),
            479 => 
            array (
                'id' => 980,
                'user_id' => 224,
                'movie_id' => 32,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:26',
                'updated_at' => '2022-07-05 15:45:26',
            ),
            480 => 
            array (
                'id' => 981,
                'user_id' => 386,
                'movie_id' => 32,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:26',
                'updated_at' => '2022-07-05 15:45:26',
            ),
            481 => 
            array (
                'id' => 982,
                'user_id' => 113,
                'movie_id' => 32,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:27',
                'updated_at' => '2022-07-05 15:45:27',
            ),
            482 => 
            array (
                'id' => 983,
                'user_id' => 353,
                'movie_id' => 32,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:27',
                'updated_at' => '2022-07-05 15:45:27',
            ),
            483 => 
            array (
                'id' => 984,
                'user_id' => 368,
                'movie_id' => 32,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:27',
                'updated_at' => '2022-07-05 15:45:27',
            ),
            484 => 
            array (
                'id' => 985,
                'user_id' => 121,
                'movie_id' => 32,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:27',
                'updated_at' => '2022-07-05 15:45:27',
            ),
            485 => 
            array (
                'id' => 986,
                'user_id' => 286,
                'movie_id' => 32,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:27',
                'updated_at' => '2022-07-05 15:45:27',
            ),
            486 => 
            array (
                'id' => 987,
                'user_id' => 182,
                'movie_id' => 32,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:28',
                'updated_at' => '2022-07-05 15:45:28',
            ),
            487 => 
            array (
                'id' => 988,
                'user_id' => 302,
                'movie_id' => 32,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:28',
                'updated_at' => '2022-07-05 15:45:28',
            ),
            488 => 
            array (
                'id' => 989,
                'user_id' => 378,
                'movie_id' => 32,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:28',
                'updated_at' => '2022-07-05 15:45:28',
            ),
            489 => 
            array (
                'id' => 990,
                'user_id' => 125,
                'movie_id' => 32,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:28',
                'updated_at' => '2022-07-05 15:45:28',
            ),
            490 => 
            array (
                'id' => 991,
                'user_id' => 126,
                'movie_id' => 32,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:28',
                'updated_at' => '2022-07-05 15:45:28',
            ),
            491 => 
            array (
                'id' => 992,
                'user_id' => 279,
                'movie_id' => 32,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:29',
                'updated_at' => '2022-07-05 15:45:29',
            ),
            492 => 
            array (
                'id' => 993,
                'user_id' => 21,
                'movie_id' => 32,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:29',
                'updated_at' => '2022-07-05 15:45:29',
            ),
            493 => 
            array (
                'id' => 994,
                'user_id' => 280,
                'movie_id' => 32,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:29',
                'updated_at' => '2022-07-05 15:45:29',
            ),
            494 => 
            array (
                'id' => 995,
                'user_id' => 355,
                'movie_id' => 32,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:29',
                'updated_at' => '2022-07-05 15:45:29',
            ),
            495 => 
            array (
                'id' => 996,
                'user_id' => 78,
                'movie_id' => 32,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:30',
                'updated_at' => '2022-07-05 15:45:30',
            ),
            496 => 
            array (
                'id' => 997,
                'user_id' => 24,
                'movie_id' => 32,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:30',
                'updated_at' => '2022-07-05 15:45:30',
            ),
            497 => 
            array (
                'id' => 998,
                'user_id' => 55,
                'movie_id' => 32,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:30',
                'updated_at' => '2022-07-05 15:45:30',
            ),
            498 => 
            array (
                'id' => 999,
                'user_id' => 375,
                'movie_id' => 32,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:30',
                'updated_at' => '2022-07-05 15:45:30',
            ),
            499 => 
            array (
                'id' => 1000,
                'user_id' => 58,
                'movie_id' => 32,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:30',
                'updated_at' => '2022-07-05 15:45:30',
            ),
        ));
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'user_id' => 59,
                'movie_id' => 32,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:31',
                'updated_at' => '2022-07-05 15:45:31',
            ),
            1 => 
            array (
                'id' => 1002,
                'user_id' => 387,
                'movie_id' => 32,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:31',
                'updated_at' => '2022-07-05 15:45:31',
            ),
            2 => 
            array (
                'id' => 1003,
                'user_id' => 262,
                'movie_id' => 32,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:31',
                'updated_at' => '2022-07-05 15:45:31',
            ),
            3 => 
            array (
                'id' => 1004,
                'user_id' => 36,
                'movie_id' => 32,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:31',
                'updated_at' => '2022-07-05 15:45:31',
            ),
            4 => 
            array (
                'id' => 1005,
                'user_id' => 220,
                'movie_id' => 32,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:31',
                'updated_at' => '2022-07-05 15:45:31',
            ),
            5 => 
            array (
                'id' => 1006,
                'user_id' => 65,
                'movie_id' => 32,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:32',
                'updated_at' => '2022-07-05 15:45:32',
            ),
            6 => 
            array (
                'id' => 1007,
                'user_id' => 105,
                'movie_id' => 32,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:32',
                'updated_at' => '2022-07-05 15:45:32',
            ),
            7 => 
            array (
                'id' => 1008,
                'user_id' => 283,
                'movie_id' => 33,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:45:32',
                'updated_at' => '2022-07-05 15:45:32',
            ),
            8 => 
            array (
                'id' => 1009,
                'user_id' => 284,
                'movie_id' => 33,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:32',
                'updated_at' => '2022-07-05 15:45:32',
            ),
            9 => 
            array (
                'id' => 1010,
                'user_id' => 388,
                'movie_id' => 33,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:32',
                'updated_at' => '2022-07-05 15:45:32',
            ),
            10 => 
            array (
                'id' => 1011,
                'user_id' => 8,
                'movie_id' => 33,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:32',
                'updated_at' => '2022-07-05 15:45:32',
            ),
            11 => 
            array (
                'id' => 1012,
                'user_id' => 389,
                'movie_id' => 33,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:33',
                'updated_at' => '2022-07-05 15:45:33',
            ),
            12 => 
            array (
                'id' => 1013,
                'user_id' => 342,
                'movie_id' => 33,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:33',
                'updated_at' => '2022-07-05 15:45:33',
            ),
            13 => 
            array (
                'id' => 1014,
                'user_id' => 184,
                'movie_id' => 33,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:33',
                'updated_at' => '2022-07-05 15:45:33',
            ),
            14 => 
            array (
                'id' => 1015,
                'user_id' => 290,
                'movie_id' => 33,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:33',
                'updated_at' => '2022-07-05 15:45:33',
            ),
            15 => 
            array (
                'id' => 1016,
                'user_id' => 149,
                'movie_id' => 33,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:33',
                'updated_at' => '2022-07-05 15:45:33',
            ),
            16 => 
            array (
                'id' => 1017,
                'user_id' => 127,
                'movie_id' => 33,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:34',
                'updated_at' => '2022-07-05 15:45:34',
            ),
            17 => 
            array (
                'id' => 1018,
                'user_id' => 153,
                'movie_id' => 33,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:34',
                'updated_at' => '2022-07-05 15:45:34',
            ),
            18 => 
            array (
                'id' => 1019,
                'user_id' => 370,
                'movie_id' => 33,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:34',
                'updated_at' => '2022-07-05 15:45:34',
            ),
            19 => 
            array (
                'id' => 1020,
                'user_id' => 79,
                'movie_id' => 33,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:34',
                'updated_at' => '2022-07-05 15:45:34',
            ),
            20 => 
            array (
                'id' => 1021,
                'user_id' => 156,
                'movie_id' => 33,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:34',
                'updated_at' => '2022-07-05 15:45:34',
            ),
            21 => 
            array (
                'id' => 1022,
                'user_id' => 250,
                'movie_id' => 33,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:35',
                'updated_at' => '2022-07-05 15:45:35',
            ),
            22 => 
            array (
                'id' => 1023,
                'user_id' => 55,
                'movie_id' => 33,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:35',
                'updated_at' => '2022-07-05 15:45:35',
            ),
            23 => 
            array (
                'id' => 1024,
                'user_id' => 131,
                'movie_id' => 33,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:35',
                'updated_at' => '2022-07-05 15:45:35',
            ),
            24 => 
            array (
                'id' => 1025,
                'user_id' => 60,
                'movie_id' => 33,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:35',
                'updated_at' => '2022-07-05 15:45:35',
            ),
            25 => 
            array (
                'id' => 1026,
                'user_id' => 132,
                'movie_id' => 33,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:35',
                'updated_at' => '2022-07-05 15:45:35',
            ),
            26 => 
            array (
                'id' => 1027,
                'user_id' => 36,
                'movie_id' => 33,
                'rating' => 3.5,
                'created_at' => '2022-07-05 15:45:36',
                'updated_at' => '2022-07-05 15:45:36',
            ),
            27 => 
            array (
                'id' => 1028,
                'user_id' => 40,
                'movie_id' => 33,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:36',
                'updated_at' => '2022-07-05 15:45:36',
            ),
            28 => 
            array (
                'id' => 1029,
                'user_id' => 204,
                'movie_id' => 33,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:36',
                'updated_at' => '2022-07-05 15:45:36',
            ),
            29 => 
            array (
                'id' => 1030,
                'user_id' => 104,
                'movie_id' => 33,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:36',
                'updated_at' => '2022-07-05 15:45:36',
            ),
            30 => 
            array (
                'id' => 1031,
                'user_id' => 64,
                'movie_id' => 33,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:36',
                'updated_at' => '2022-07-05 15:45:36',
            ),
            31 => 
            array (
                'id' => 1032,
                'user_id' => 65,
                'movie_id' => 33,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:36',
                'updated_at' => '2022-07-05 15:45:36',
            ),
            32 => 
            array (
                'id' => 1033,
                'user_id' => 87,
                'movie_id' => 33,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:37',
                'updated_at' => '2022-07-05 15:45:37',
            ),
            33 => 
            array (
                'id' => 1034,
                'user_id' => 390,
                'movie_id' => 33,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:37',
                'updated_at' => '2022-07-05 15:45:37',
            ),
            34 => 
            array (
                'id' => 1035,
                'user_id' => 44,
                'movie_id' => 34,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:45:37',
                'updated_at' => '2022-07-05 15:45:37',
            ),
            35 => 
            array (
                'id' => 1036,
                'user_id' => 195,
                'movie_id' => 34,
                'rating' => 3.5,
                'created_at' => '2022-07-05 15:45:37',
                'updated_at' => '2022-07-05 15:45:37',
            ),
            36 => 
            array (
                'id' => 1037,
                'user_id' => 180,
                'movie_id' => 34,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:37',
                'updated_at' => '2022-07-05 15:45:37',
            ),
            37 => 
            array (
                'id' => 1038,
                'user_id' => 391,
                'movie_id' => 34,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:45:38',
                'updated_at' => '2022-07-05 15:45:38',
            ),
            38 => 
            array (
                'id' => 1039,
                'user_id' => 4,
                'movie_id' => 34,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:45:38',
                'updated_at' => '2022-07-05 15:45:38',
            ),
            39 => 
            array (
                'id' => 1040,
                'user_id' => 284,
                'movie_id' => 34,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:38',
                'updated_at' => '2022-07-05 15:45:38',
            ),
            40 => 
            array (
                'id' => 1041,
                'user_id' => 113,
                'movie_id' => 34,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:45:38',
                'updated_at' => '2022-07-05 15:45:38',
            ),
            41 => 
            array (
                'id' => 1042,
                'user_id' => 389,
                'movie_id' => 34,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:45:38',
                'updated_at' => '2022-07-05 15:45:38',
            ),
            42 => 
            array (
                'id' => 1043,
                'user_id' => 392,
                'movie_id' => 34,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:45:39',
                'updated_at' => '2022-07-05 15:45:39',
            ),
            43 => 
            array (
                'id' => 1044,
                'user_id' => 117,
                'movie_id' => 34,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:39',
                'updated_at' => '2022-07-05 15:45:39',
            ),
            44 => 
            array (
                'id' => 1045,
                'user_id' => 47,
                'movie_id' => 34,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:39',
                'updated_at' => '2022-07-05 15:45:39',
            ),
            45 => 
            array (
                'id' => 1046,
                'user_id' => 49,
                'movie_id' => 34,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:39',
                'updated_at' => '2022-07-05 15:45:39',
            ),
            46 => 
            array (
                'id' => 1047,
                'user_id' => 16,
                'movie_id' => 34,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:39',
                'updated_at' => '2022-07-05 15:45:39',
            ),
            47 => 
            array (
                'id' => 1048,
                'user_id' => 127,
                'movie_id' => 34,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:39',
                'updated_at' => '2022-07-05 15:45:39',
            ),
            48 => 
            array (
                'id' => 1049,
                'user_id' => 21,
                'movie_id' => 34,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:45:40',
                'updated_at' => '2022-07-05 15:45:40',
            ),
            49 => 
            array (
                'id' => 1050,
                'user_id' => 77,
                'movie_id' => 34,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:40',
                'updated_at' => '2022-07-05 15:45:40',
            ),
            50 => 
            array (
                'id' => 1051,
                'user_id' => 374,
                'movie_id' => 34,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:40',
                'updated_at' => '2022-07-05 15:45:40',
            ),
            51 => 
            array (
                'id' => 1052,
                'user_id' => 393,
                'movie_id' => 34,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:45:40',
                'updated_at' => '2022-07-05 15:45:40',
            ),
            52 => 
            array (
                'id' => 1053,
                'user_id' => 364,
                'movie_id' => 34,
                'rating' => 2.0,
                'created_at' => '2022-07-05 15:45:40',
                'updated_at' => '2022-07-05 15:45:40',
            ),
            53 => 
            array (
                'id' => 1054,
                'user_id' => 172,
                'movie_id' => 34,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:41',
                'updated_at' => '2022-07-05 15:45:41',
            ),
            54 => 
            array (
                'id' => 1055,
                'user_id' => 250,
                'movie_id' => 34,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:41',
                'updated_at' => '2022-07-05 15:45:41',
            ),
            55 => 
            array (
                'id' => 1056,
                'user_id' => 99,
                'movie_id' => 34,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:41',
                'updated_at' => '2022-07-05 15:45:41',
            ),
            56 => 
            array (
                'id' => 1057,
                'user_id' => 31,
                'movie_id' => 34,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:41',
                'updated_at' => '2022-07-05 15:45:41',
            ),
            57 => 
            array (
                'id' => 1058,
                'user_id' => 101,
                'movie_id' => 34,
                'rating' => 2.0,
                'created_at' => '2022-07-05 15:45:41',
                'updated_at' => '2022-07-05 15:45:41',
            ),
            58 => 
            array (
                'id' => 1059,
                'user_id' => 203,
                'movie_id' => 34,
                'rating' => 2.5,
                'created_at' => '2022-07-05 15:45:42',
                'updated_at' => '2022-07-05 15:45:42',
            ),
            59 => 
            array (
                'id' => 1060,
                'user_id' => 394,
                'movie_id' => 34,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:45:42',
                'updated_at' => '2022-07-05 15:45:42',
            ),
            60 => 
            array (
                'id' => 1061,
                'user_id' => 161,
                'movie_id' => 34,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:45:42',
                'updated_at' => '2022-07-05 15:45:42',
            ),
            61 => 
            array (
                'id' => 1062,
                'user_id' => 263,
                'movie_id' => 34,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:45:42',
                'updated_at' => '2022-07-05 15:45:42',
            ),
            62 => 
            array (
                'id' => 1063,
                'user_id' => 335,
                'movie_id' => 34,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:42',
                'updated_at' => '2022-07-05 15:45:42',
            ),
            63 => 
            array (
                'id' => 1064,
                'user_id' => 85,
                'movie_id' => 34,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:45:43',
                'updated_at' => '2022-07-05 15:45:43',
            ),
            64 => 
            array (
                'id' => 1065,
                'user_id' => 336,
                'movie_id' => 34,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:45:43',
                'updated_at' => '2022-07-05 15:45:43',
            ),
            65 => 
            array (
                'id' => 1066,
                'user_id' => 373,
                'movie_id' => 34,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:45:43',
                'updated_at' => '2022-07-05 15:45:43',
            ),
            66 => 
            array (
                'id' => 1067,
                'user_id' => 390,
                'movie_id' => 34,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:43',
                'updated_at' => '2022-07-05 15:45:43',
            ),
            67 => 
            array (
                'id' => 1068,
                'user_id' => 108,
                'movie_id' => 35,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:43',
                'updated_at' => '2022-07-05 15:45:43',
            ),
            68 => 
            array (
                'id' => 1069,
                'user_id' => 193,
                'movie_id' => 35,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:43',
                'updated_at' => '2022-07-05 15:45:43',
            ),
            69 => 
            array (
                'id' => 1070,
                'user_id' => 241,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:44',
                'updated_at' => '2022-07-05 15:45:44',
            ),
            70 => 
            array (
                'id' => 1071,
                'user_id' => 395,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:44',
                'updated_at' => '2022-07-05 15:45:44',
            ),
            71 => 
            array (
                'id' => 1072,
                'user_id' => 197,
                'movie_id' => 35,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:44',
                'updated_at' => '2022-07-05 15:45:44',
            ),
            72 => 
            array (
                'id' => 1073,
                'user_id' => 168,
                'movie_id' => 35,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:44',
                'updated_at' => '2022-07-05 15:45:44',
            ),
            73 => 
            array (
                'id' => 1074,
                'user_id' => 396,
                'movie_id' => 35,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:44',
                'updated_at' => '2022-07-05 15:45:44',
            ),
            74 => 
            array (
                'id' => 1075,
                'user_id' => 397,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:45',
                'updated_at' => '2022-07-05 15:45:45',
            ),
            75 => 
            array (
                'id' => 1076,
                'user_id' => 48,
                'movie_id' => 35,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:45',
                'updated_at' => '2022-07-05 15:45:45',
            ),
            76 => 
            array (
                'id' => 1077,
                'user_id' => 278,
                'movie_id' => 35,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:45',
                'updated_at' => '2022-07-05 15:45:45',
            ),
            77 => 
            array (
                'id' => 1078,
                'user_id' => 125,
                'movie_id' => 35,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:45',
                'updated_at' => '2022-07-05 15:45:45',
            ),
            78 => 
            array (
                'id' => 1079,
                'user_id' => 19,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:46',
                'updated_at' => '2022-07-05 15:45:46',
            ),
            79 => 
            array (
                'id' => 1080,
                'user_id' => 149,
                'movie_id' => 35,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:46',
                'updated_at' => '2022-07-05 15:45:46',
            ),
            80 => 
            array (
                'id' => 1081,
                'user_id' => 229,
                'movie_id' => 35,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:46',
                'updated_at' => '2022-07-05 15:45:46',
            ),
            81 => 
            array (
                'id' => 1082,
                'user_id' => 304,
                'movie_id' => 35,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:46',
                'updated_at' => '2022-07-05 15:45:46',
            ),
            82 => 
            array (
                'id' => 1083,
                'user_id' => 321,
                'movie_id' => 35,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:45:46',
                'updated_at' => '2022-07-05 15:45:46',
            ),
            83 => 
            array (
                'id' => 1084,
                'user_id' => 355,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:47',
                'updated_at' => '2022-07-05 15:45:47',
            ),
            84 => 
            array (
                'id' => 1085,
                'user_id' => 393,
                'movie_id' => 35,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:47',
                'updated_at' => '2022-07-05 15:45:47',
            ),
            85 => 
            array (
                'id' => 1086,
                'user_id' => 398,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:47',
                'updated_at' => '2022-07-05 15:45:47',
            ),
            86 => 
            array (
                'id' => 1087,
                'user_id' => 55,
                'movie_id' => 35,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:47',
                'updated_at' => '2022-07-05 15:45:47',
            ),
            87 => 
            array (
                'id' => 1088,
                'user_id' => 30,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:48',
                'updated_at' => '2022-07-05 15:45:48',
            ),
            88 => 
            array (
                'id' => 1089,
                'user_id' => 100,
                'movie_id' => 35,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:48',
                'updated_at' => '2022-07-05 15:45:48',
            ),
            89 => 
            array (
                'id' => 1090,
                'user_id' => 61,
                'movie_id' => 35,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:48',
                'updated_at' => '2022-07-05 15:45:48',
            ),
            90 => 
            array (
                'id' => 1091,
                'user_id' => 35,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:48',
                'updated_at' => '2022-07-05 15:45:48',
            ),
            91 => 
            array (
                'id' => 1092,
                'user_id' => 262,
                'movie_id' => 35,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:48',
                'updated_at' => '2022-07-05 15:45:48',
            ),
            92 => 
            array (
                'id' => 1093,
                'user_id' => 36,
                'movie_id' => 35,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:49',
                'updated_at' => '2022-07-05 15:45:49',
            ),
            93 => 
            array (
                'id' => 1094,
                'user_id' => 282,
                'movie_id' => 35,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:49',
                'updated_at' => '2022-07-05 15:45:49',
            ),
            94 => 
            array (
                'id' => 1095,
                'user_id' => 40,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:49',
                'updated_at' => '2022-07-05 15:45:49',
            ),
            95 => 
            array (
                'id' => 1096,
                'user_id' => 381,
                'movie_id' => 35,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:49',
                'updated_at' => '2022-07-05 15:45:49',
            ),
            96 => 
            array (
                'id' => 1097,
                'user_id' => 42,
                'movie_id' => 35,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:49',
                'updated_at' => '2022-07-05 15:45:49',
            ),
            97 => 
            array (
                'id' => 1098,
                'user_id' => 237,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:50',
                'updated_at' => '2022-07-05 15:45:50',
            ),
            98 => 
            array (
                'id' => 1099,
                'user_id' => 191,
                'movie_id' => 35,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:50',
                'updated_at' => '2022-07-05 15:45:50',
            ),
            99 => 
            array (
                'id' => 1100,
                'user_id' => 4,
                'movie_id' => 36,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:50',
                'updated_at' => '2022-07-05 15:45:50',
            ),
            100 => 
            array (
                'id' => 1101,
                'user_id' => 283,
                'movie_id' => 36,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:50',
                'updated_at' => '2022-07-05 15:45:50',
            ),
            101 => 
            array (
                'id' => 1102,
                'user_id' => 330,
                'movie_id' => 36,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:45:50',
                'updated_at' => '2022-07-05 15:45:50',
            ),
            102 => 
            array (
                'id' => 1103,
                'user_id' => 284,
                'movie_id' => 36,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:50',
                'updated_at' => '2022-07-05 15:45:50',
            ),
            103 => 
            array (
                'id' => 1104,
                'user_id' => 243,
                'movie_id' => 36,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:51',
                'updated_at' => '2022-07-05 15:45:51',
            ),
            104 => 
            array (
                'id' => 1105,
                'user_id' => 8,
                'movie_id' => 36,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:51',
                'updated_at' => '2022-07-05 15:45:51',
            ),
            105 => 
            array (
                'id' => 1106,
                'user_id' => 399,
                'movie_id' => 36,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:51',
                'updated_at' => '2022-07-05 15:45:51',
            ),
            106 => 
            array (
                'id' => 1107,
                'user_id' => 94,
                'movie_id' => 36,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:51',
                'updated_at' => '2022-07-05 15:45:51',
            ),
            107 => 
            array (
                'id' => 1108,
                'user_id' => 379,
                'movie_id' => 36,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:51',
                'updated_at' => '2022-07-05 15:45:51',
            ),
            108 => 
            array (
                'id' => 1109,
                'user_id' => 16,
                'movie_id' => 36,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:52',
                'updated_at' => '2022-07-05 15:45:52',
            ),
            109 => 
            array (
                'id' => 1110,
                'user_id' => 278,
                'movie_id' => 36,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:52',
                'updated_at' => '2022-07-05 15:45:52',
            ),
            110 => 
            array (
                'id' => 1111,
                'user_id' => 292,
                'movie_id' => 36,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:52',
                'updated_at' => '2022-07-05 15:45:52',
            ),
            111 => 
            array (
                'id' => 1112,
                'user_id' => 21,
                'movie_id' => 36,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:52',
                'updated_at' => '2022-07-05 15:45:52',
            ),
            112 => 
            array (
                'id' => 1113,
                'user_id' => 58,
                'movie_id' => 36,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:52',
                'updated_at' => '2022-07-05 15:45:52',
            ),
            113 => 
            array (
                'id' => 1114,
                'user_id' => 30,
                'movie_id' => 36,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:53',
                'updated_at' => '2022-07-05 15:45:53',
            ),
            114 => 
            array (
                'id' => 1115,
                'user_id' => 175,
                'movie_id' => 36,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:53',
                'updated_at' => '2022-07-05 15:45:53',
            ),
            115 => 
            array (
                'id' => 1116,
                'user_id' => 60,
                'movie_id' => 36,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:53',
                'updated_at' => '2022-07-05 15:45:53',
            ),
            116 => 
            array (
                'id' => 1117,
                'user_id' => 61,
                'movie_id' => 36,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:53',
                'updated_at' => '2022-07-05 15:45:53',
            ),
            117 => 
            array (
                'id' => 1118,
                'user_id' => 294,
                'movie_id' => 36,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:53',
                'updated_at' => '2022-07-05 15:45:53',
            ),
            118 => 
            array (
                'id' => 1119,
                'user_id' => 36,
                'movie_id' => 36,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:53',
                'updated_at' => '2022-07-05 15:45:53',
            ),
            119 => 
            array (
                'id' => 1120,
                'user_id' => 40,
                'movie_id' => 36,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:54',
                'updated_at' => '2022-07-05 15:45:54',
            ),
            120 => 
            array (
                'id' => 1121,
                'user_id' => 382,
                'movie_id' => 36,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:54',
                'updated_at' => '2022-07-05 15:45:54',
            ),
            121 => 
            array (
                'id' => 1122,
                'user_id' => 107,
                'movie_id' => 36,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:54',
                'updated_at' => '2022-07-05 15:45:54',
            ),
            122 => 
            array (
                'id' => 1123,
                'user_id' => 238,
                'movie_id' => 36,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:54',
                'updated_at' => '2022-07-05 15:45:54',
            ),
            123 => 
            array (
                'id' => 1124,
                'user_id' => 358,
                'movie_id' => 37,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:54',
                'updated_at' => '2022-07-05 15:45:54',
            ),
            124 => 
            array (
                'id' => 1125,
                'user_id' => 179,
                'movie_id' => 37,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:55',
                'updated_at' => '2022-07-05 15:45:55',
            ),
            125 => 
            array (
                'id' => 1126,
                'user_id' => 386,
                'movie_id' => 37,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:55',
                'updated_at' => '2022-07-05 15:45:55',
            ),
            126 => 
            array (
                'id' => 1127,
                'user_id' => 284,
                'movie_id' => 37,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:55',
                'updated_at' => '2022-07-05 15:45:55',
            ),
            127 => 
            array (
                'id' => 1128,
                'user_id' => 145,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:55',
                'updated_at' => '2022-07-05 15:45:55',
            ),
            128 => 
            array (
                'id' => 1129,
                'user_id' => 400,
                'movie_id' => 37,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:55',
                'updated_at' => '2022-07-05 15:45:55',
            ),
            129 => 
            array (
                'id' => 1130,
                'user_id' => 166,
                'movie_id' => 37,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:56',
                'updated_at' => '2022-07-05 15:45:56',
            ),
            130 => 
            array (
                'id' => 1131,
                'user_id' => 348,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:56',
                'updated_at' => '2022-07-05 15:45:56',
            ),
            131 => 
            array (
                'id' => 1132,
                'user_id' => 286,
                'movie_id' => 37,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:56',
                'updated_at' => '2022-07-05 15:45:56',
            ),
            132 => 
            array (
                'id' => 1133,
                'user_id' => 396,
                'movie_id' => 37,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:56',
                'updated_at' => '2022-07-05 15:45:56',
            ),
            133 => 
            array (
                'id' => 1134,
                'user_id' => 401,
                'movie_id' => 37,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:45:56',
                'updated_at' => '2022-07-05 15:45:56',
            ),
            134 => 
            array (
                'id' => 1135,
                'user_id' => 320,
                'movie_id' => 37,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:56',
                'updated_at' => '2022-07-05 15:45:56',
            ),
            135 => 
            array (
                'id' => 1136,
                'user_id' => 402,
                'movie_id' => 37,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:45:57',
                'updated_at' => '2022-07-05 15:45:57',
            ),
            136 => 
            array (
                'id' => 1137,
                'user_id' => 126,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:57',
                'updated_at' => '2022-07-05 15:45:57',
            ),
            137 => 
            array (
                'id' => 1138,
                'user_id' => 269,
                'movie_id' => 37,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:45:57',
                'updated_at' => '2022-07-05 15:45:57',
            ),
            138 => 
            array (
                'id' => 1139,
                'user_id' => 279,
                'movie_id' => 37,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:45:57',
                'updated_at' => '2022-07-05 15:45:57',
            ),
            139 => 
            array (
                'id' => 1140,
                'user_id' => 149,
                'movie_id' => 37,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:57',
                'updated_at' => '2022-07-05 15:45:57',
            ),
            140 => 
            array (
                'id' => 1141,
                'user_id' => 403,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:58',
                'updated_at' => '2022-07-05 15:45:58',
            ),
            141 => 
            array (
                'id' => 1142,
                'user_id' => 127,
                'movie_id' => 37,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:58',
                'updated_at' => '2022-07-05 15:45:58',
            ),
            142 => 
            array (
                'id' => 1143,
                'user_id' => 404,
                'movie_id' => 37,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:45:58',
                'updated_at' => '2022-07-05 15:45:58',
            ),
            143 => 
            array (
                'id' => 1144,
                'user_id' => 21,
                'movie_id' => 37,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:58',
                'updated_at' => '2022-07-05 15:45:58',
            ),
            144 => 
            array (
                'id' => 1145,
                'user_id' => 369,
                'movie_id' => 37,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:58',
                'updated_at' => '2022-07-05 15:45:58',
            ),
            145 => 
            array (
                'id' => 1146,
                'user_id' => 280,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:59',
                'updated_at' => '2022-07-05 15:45:59',
            ),
            146 => 
            array (
                'id' => 1147,
                'user_id' => 405,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:59',
                'updated_at' => '2022-07-05 15:45:59',
            ),
            147 => 
            array (
                'id' => 1148,
                'user_id' => 364,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:45:59',
                'updated_at' => '2022-07-05 15:45:59',
            ),
            148 => 
            array (
                'id' => 1149,
                'user_id' => 406,
                'movie_id' => 37,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:45:59',
                'updated_at' => '2022-07-05 15:45:59',
            ),
            149 => 
            array (
                'id' => 1150,
                'user_id' => 99,
                'movie_id' => 37,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:45:59',
                'updated_at' => '2022-07-05 15:45:59',
            ),
            150 => 
            array (
                'id' => 1151,
                'user_id' => 82,
                'movie_id' => 37,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:00',
                'updated_at' => '2022-07-05 15:46:00',
            ),
            151 => 
            array (
                'id' => 1152,
                'user_id' => 33,
                'movie_id' => 37,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:00',
                'updated_at' => '2022-07-05 15:46:00',
            ),
            152 => 
            array (
                'id' => 1153,
                'user_id' => 61,
                'movie_id' => 37,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:01',
                'updated_at' => '2022-07-05 15:46:01',
            ),
            153 => 
            array (
                'id' => 1154,
                'user_id' => 262,
                'movie_id' => 37,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:01',
                'updated_at' => '2022-07-05 15:46:01',
            ),
            154 => 
            array (
                'id' => 1155,
                'user_id' => 36,
                'movie_id' => 37,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:01',
                'updated_at' => '2022-07-05 15:46:01',
            ),
            155 => 
            array (
                'id' => 1156,
                'user_id' => 64,
                'movie_id' => 37,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:02',
                'updated_at' => '2022-07-05 15:46:02',
            ),
            156 => 
            array (
                'id' => 1157,
                'user_id' => 42,
                'movie_id' => 37,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:02',
                'updated_at' => '2022-07-05 15:46:02',
            ),
            157 => 
            array (
                'id' => 1158,
                'user_id' => 105,
                'movie_id' => 37,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:02',
                'updated_at' => '2022-07-05 15:46:02',
            ),
            158 => 
            array (
                'id' => 1159,
                'user_id' => 373,
                'movie_id' => 37,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:46:02',
                'updated_at' => '2022-07-05 15:46:02',
            ),
            159 => 
            array (
                'id' => 1160,
                'user_id' => 107,
                'movie_id' => 37,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:02',
                'updated_at' => '2022-07-05 15:46:02',
            ),
            160 => 
            array (
                'id' => 1161,
                'user_id' => 87,
                'movie_id' => 37,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:02',
                'updated_at' => '2022-07-05 15:46:02',
            ),
            161 => 
            array (
                'id' => 1162,
                'user_id' => 346,
                'movie_id' => 37,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:03',
                'updated_at' => '2022-07-05 15:46:03',
            ),
            162 => 
            array (
                'id' => 1163,
                'user_id' => 407,
                'movie_id' => 38,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:03',
                'updated_at' => '2022-07-05 15:46:03',
            ),
            163 => 
            array (
                'id' => 1164,
                'user_id' => 179,
                'movie_id' => 38,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:03',
                'updated_at' => '2022-07-05 15:46:03',
            ),
            164 => 
            array (
                'id' => 1165,
                'user_id' => 408,
                'movie_id' => 38,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:03',
                'updated_at' => '2022-07-05 15:46:03',
            ),
            165 => 
            array (
                'id' => 1166,
                'user_id' => 298,
                'movie_id' => 38,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:03',
                'updated_at' => '2022-07-05 15:46:03',
            ),
            166 => 
            array (
                'id' => 1167,
                'user_id' => 141,
                'movie_id' => 38,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:03',
                'updated_at' => '2022-07-05 15:46:03',
            ),
            167 => 
            array (
                'id' => 1168,
                'user_id' => 142,
                'movie_id' => 38,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:04',
                'updated_at' => '2022-07-05 15:46:04',
            ),
            168 => 
            array (
                'id' => 1169,
                'user_id' => 115,
                'movie_id' => 38,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:04',
                'updated_at' => '2022-07-05 15:46:04',
            ),
            169 => 
            array (
                'id' => 1170,
                'user_id' => 118,
                'movie_id' => 38,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:05',
                'updated_at' => '2022-07-05 15:46:05',
            ),
            170 => 
            array (
                'id' => 1171,
                'user_id' => 121,
                'movie_id' => 38,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:05',
                'updated_at' => '2022-07-05 15:46:05',
            ),
            171 => 
            array (
                'id' => 1172,
                'user_id' => 409,
                'movie_id' => 38,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:05',
                'updated_at' => '2022-07-05 15:46:05',
            ),
            172 => 
            array (
                'id' => 1173,
                'user_id' => 93,
                'movie_id' => 38,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:05',
                'updated_at' => '2022-07-05 15:46:05',
            ),
            173 => 
            array (
                'id' => 1174,
                'user_id' => 366,
                'movie_id' => 38,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:05',
                'updated_at' => '2022-07-05 15:46:05',
            ),
            174 => 
            array (
                'id' => 1175,
                'user_id' => 288,
                'movie_id' => 38,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:06',
                'updated_at' => '2022-07-05 15:46:06',
            ),
            175 => 
            array (
                'id' => 1176,
                'user_id' => 148,
                'movie_id' => 38,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:06',
                'updated_at' => '2022-07-05 15:46:06',
            ),
            176 => 
            array (
                'id' => 1177,
                'user_id' => 246,
                'movie_id' => 38,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:06',
                'updated_at' => '2022-07-05 15:46:06',
            ),
            177 => 
            array (
                'id' => 1178,
                'user_id' => 18,
                'movie_id' => 38,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:46:06',
                'updated_at' => '2022-07-05 15:46:06',
            ),
            178 => 
            array (
                'id' => 1179,
                'user_id' => 217,
                'movie_id' => 38,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:06',
                'updated_at' => '2022-07-05 15:46:06',
            ),
            179 => 
            array (
                'id' => 1180,
                'user_id' => 127,
                'movie_id' => 38,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:06',
                'updated_at' => '2022-07-05 15:46:06',
            ),
            180 => 
            array (
                'id' => 1181,
                'user_id' => 21,
                'movie_id' => 38,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:46:07',
                'updated_at' => '2022-07-05 15:46:07',
            ),
            181 => 
            array (
                'id' => 1182,
                'user_id' => 73,
                'movie_id' => 38,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:07',
                'updated_at' => '2022-07-05 15:46:07',
            ),
            182 => 
            array (
                'id' => 1183,
                'user_id' => 405,
                'movie_id' => 38,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:07',
                'updated_at' => '2022-07-05 15:46:07',
            ),
            183 => 
            array (
                'id' => 1184,
                'user_id' => 79,
                'movie_id' => 38,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:07',
                'updated_at' => '2022-07-05 15:46:07',
            ),
            184 => 
            array (
                'id' => 1185,
                'user_id' => 230,
                'movie_id' => 38,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:07',
                'updated_at' => '2022-07-05 15:46:07',
            ),
            185 => 
            array (
                'id' => 1186,
                'user_id' => 410,
                'movie_id' => 38,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:08',
                'updated_at' => '2022-07-05 15:46:08',
            ),
            186 => 
            array (
                'id' => 1187,
                'user_id' => 406,
                'movie_id' => 38,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:08',
                'updated_at' => '2022-07-05 15:46:08',
            ),
            187 => 
            array (
                'id' => 1188,
                'user_id' => 55,
                'movie_id' => 38,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:08',
                'updated_at' => '2022-07-05 15:46:08',
            ),
            188 => 
            array (
                'id' => 1189,
                'user_id' => 58,
                'movie_id' => 38,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:09',
                'updated_at' => '2022-07-05 15:46:09',
            ),
            189 => 
            array (
                'id' => 1190,
                'user_id' => 29,
                'movie_id' => 38,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:09',
                'updated_at' => '2022-07-05 15:46:09',
            ),
            190 => 
            array (
                'id' => 1191,
                'user_id' => 411,
                'movie_id' => 38,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:09',
                'updated_at' => '2022-07-05 15:46:09',
            ),
            191 => 
            array (
                'id' => 1192,
                'user_id' => 31,
                'movie_id' => 38,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:09',
                'updated_at' => '2022-07-05 15:46:09',
            ),
            192 => 
            array (
                'id' => 1193,
                'user_id' => 101,
                'movie_id' => 38,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:09',
                'updated_at' => '2022-07-05 15:46:09',
            ),
            193 => 
            array (
                'id' => 1194,
                'user_id' => 61,
                'movie_id' => 38,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:10',
                'updated_at' => '2022-07-05 15:46:10',
            ),
            194 => 
            array (
                'id' => 1195,
                'user_id' => 262,
                'movie_id' => 38,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:10',
                'updated_at' => '2022-07-05 15:46:10',
            ),
            195 => 
            array (
                'id' => 1196,
                'user_id' => 64,
                'movie_id' => 38,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:10',
                'updated_at' => '2022-07-05 15:46:10',
            ),
            196 => 
            array (
                'id' => 1197,
                'user_id' => 235,
                'movie_id' => 38,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:10',
                'updated_at' => '2022-07-05 15:46:10',
            ),
            197 => 
            array (
                'id' => 1198,
                'user_id' => 237,
                'movie_id' => 38,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:11',
                'updated_at' => '2022-07-05 15:46:11',
            ),
            198 => 
            array (
                'id' => 1199,
                'user_id' => 138,
                'movie_id' => 39,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:11',
                'updated_at' => '2022-07-05 15:46:11',
            ),
            199 => 
            array (
                'id' => 1200,
                'user_id' => 44,
                'movie_id' => 39,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:46:11',
                'updated_at' => '2022-07-05 15:46:11',
            ),
            200 => 
            array (
                'id' => 1201,
                'user_id' => 142,
                'movie_id' => 39,
                'rating' => 2.0,
                'created_at' => '2022-07-05 15:46:11',
                'updated_at' => '2022-07-05 15:46:11',
            ),
            201 => 
            array (
                'id' => 1202,
                'user_id' => 265,
                'movie_id' => 39,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:11',
                'updated_at' => '2022-07-05 15:46:11',
            ),
            202 => 
            array (
                'id' => 1203,
                'user_id' => 395,
                'movie_id' => 39,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:12',
                'updated_at' => '2022-07-05 15:46:12',
            ),
            203 => 
            array (
                'id' => 1204,
                'user_id' => 388,
                'movie_id' => 39,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:46:12',
                'updated_at' => '2022-07-05 15:46:12',
            ),
            204 => 
            array (
                'id' => 1205,
                'user_id' => 118,
                'movie_id' => 39,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:12',
                'updated_at' => '2022-07-05 15:46:12',
            ),
            205 => 
            array (
                'id' => 1206,
                'user_id' => 409,
                'movie_id' => 39,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:12',
                'updated_at' => '2022-07-05 15:46:12',
            ),
            206 => 
            array (
                'id' => 1207,
                'user_id' => 147,
                'movie_id' => 39,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:12',
                'updated_at' => '2022-07-05 15:46:12',
            ),
            207 => 
            array (
                'id' => 1208,
                'user_id' => 197,
                'movie_id' => 39,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:13',
                'updated_at' => '2022-07-05 15:46:13',
            ),
            208 => 
            array (
                'id' => 1209,
                'user_id' => 69,
                'movie_id' => 39,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:13',
                'updated_at' => '2022-07-05 15:46:13',
            ),
            209 => 
            array (
                'id' => 1210,
                'user_id' => 227,
                'movie_id' => 39,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:13',
                'updated_at' => '2022-07-05 15:46:13',
            ),
            210 => 
            array (
                'id' => 1211,
                'user_id' => 342,
                'movie_id' => 39,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:13',
                'updated_at' => '2022-07-05 15:46:13',
            ),
            211 => 
            array (
                'id' => 1212,
                'user_id' => 125,
                'movie_id' => 39,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:13',
                'updated_at' => '2022-07-05 15:46:13',
            ),
            212 => 
            array (
                'id' => 1213,
                'user_id' => 127,
                'movie_id' => 39,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:14',
                'updated_at' => '2022-07-05 15:46:14',
            ),
            213 => 
            array (
                'id' => 1214,
                'user_id' => 21,
                'movie_id' => 39,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:14',
                'updated_at' => '2022-07-05 15:46:14',
            ),
            214 => 
            array (
                'id' => 1215,
                'user_id' => 364,
                'movie_id' => 39,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:14',
                'updated_at' => '2022-07-05 15:46:14',
            ),
            215 => 
            array (
                'id' => 1216,
                'user_id' => 99,
                'movie_id' => 39,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:14',
                'updated_at' => '2022-07-05 15:46:14',
            ),
            216 => 
            array (
                'id' => 1217,
                'user_id' => 130,
                'movie_id' => 39,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:14',
                'updated_at' => '2022-07-05 15:46:14',
            ),
            217 => 
            array (
                'id' => 1218,
                'user_id' => 412,
                'movie_id' => 39,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:15',
                'updated_at' => '2022-07-05 15:46:15',
            ),
            218 => 
            array (
                'id' => 1219,
                'user_id' => 376,
                'movie_id' => 39,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:15',
                'updated_at' => '2022-07-05 15:46:15',
            ),
            219 => 
            array (
                'id' => 1220,
                'user_id' => 413,
                'movie_id' => 39,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:15',
                'updated_at' => '2022-07-05 15:46:15',
            ),
            220 => 
            array (
                'id' => 1221,
                'user_id' => 371,
                'movie_id' => 39,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:15',
                'updated_at' => '2022-07-05 15:46:15',
            ),
            221 => 
            array (
                'id' => 1222,
                'user_id' => 61,
                'movie_id' => 39,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:15',
                'updated_at' => '2022-07-05 15:46:15',
            ),
            222 => 
            array (
                'id' => 1223,
                'user_id' => 190,
                'movie_id' => 39,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:16',
                'updated_at' => '2022-07-05 15:46:16',
            ),
            223 => 
            array (
                'id' => 1224,
                'user_id' => 39,
                'movie_id' => 39,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:16',
                'updated_at' => '2022-07-05 15:46:16',
            ),
            224 => 
            array (
                'id' => 1225,
                'user_id' => 40,
                'movie_id' => 39,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:46:16',
                'updated_at' => '2022-07-05 15:46:16',
            ),
            225 => 
            array (
                'id' => 1226,
                'user_id' => 104,
                'movie_id' => 39,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:16',
                'updated_at' => '2022-07-05 15:46:16',
            ),
            226 => 
            array (
                'id' => 1227,
                'user_id' => 336,
                'movie_id' => 39,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:16',
                'updated_at' => '2022-07-05 15:46:16',
            ),
            227 => 
            array (
                'id' => 1228,
                'user_id' => 350,
                'movie_id' => 39,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:46:17',
                'updated_at' => '2022-07-05 15:46:17',
            ),
            228 => 
            array (
                'id' => 1229,
                'user_id' => 414,
                'movie_id' => 40,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:17',
                'updated_at' => '2022-07-05 15:46:17',
            ),
            229 => 
            array (
                'id' => 1230,
                'user_id' => 358,
                'movie_id' => 40,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:17',
                'updated_at' => '2022-07-05 15:46:17',
            ),
            230 => 
            array (
                'id' => 1231,
                'user_id' => 224,
                'movie_id' => 40,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:17',
                'updated_at' => '2022-07-05 15:46:17',
            ),
            231 => 
            array (
                'id' => 1232,
                'user_id' => 338,
                'movie_id' => 40,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:18',
                'updated_at' => '2022-07-05 15:46:18',
            ),
            232 => 
            array (
                'id' => 1233,
                'user_id' => 6,
                'movie_id' => 40,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:18',
                'updated_at' => '2022-07-05 15:46:18',
            ),
            233 => 
            array (
                'id' => 1234,
                'user_id' => 415,
                'movie_id' => 40,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:18',
                'updated_at' => '2022-07-05 15:46:18',
            ),
            234 => 
            array (
                'id' => 1235,
                'user_id' => 114,
                'movie_id' => 40,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:18',
                'updated_at' => '2022-07-05 15:46:18',
            ),
            235 => 
            array (
                'id' => 1236,
                'user_id' => 409,
                'movie_id' => 40,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:18',
                'updated_at' => '2022-07-05 15:46:18',
            ),
            236 => 
            array (
                'id' => 1237,
                'user_id' => 168,
                'movie_id' => 40,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:19',
                'updated_at' => '2022-07-05 15:46:19',
            ),
            237 => 
            array (
                'id' => 1238,
                'user_id' => 96,
                'movie_id' => 40,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:19',
                'updated_at' => '2022-07-05 15:46:19',
            ),
            238 => 
            array (
                'id' => 1239,
                'user_id' => 49,
                'movie_id' => 40,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:19',
                'updated_at' => '2022-07-05 15:46:19',
            ),
            239 => 
            array (
                'id' => 1240,
                'user_id' => 343,
                'movie_id' => 40,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:19',
                'updated_at' => '2022-07-05 15:46:19',
            ),
            240 => 
            array (
                'id' => 1241,
                'user_id' => 21,
                'movie_id' => 40,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:19',
                'updated_at' => '2022-07-05 15:46:19',
            ),
            241 => 
            array (
                'id' => 1242,
                'user_id' => 78,
                'movie_id' => 40,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:20',
                'updated_at' => '2022-07-05 15:46:20',
            ),
            242 => 
            array (
                'id' => 1243,
                'user_id' => 55,
                'movie_id' => 40,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:46:20',
                'updated_at' => '2022-07-05 15:46:20',
            ),
            243 => 
            array (
                'id' => 1244,
                'user_id' => 375,
                'movie_id' => 40,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:20',
                'updated_at' => '2022-07-05 15:46:20',
            ),
            244 => 
            array (
                'id' => 1245,
                'user_id' => 327,
                'movie_id' => 40,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:20',
                'updated_at' => '2022-07-05 15:46:20',
            ),
            245 => 
            array (
                'id' => 1246,
                'user_id' => 58,
                'movie_id' => 40,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:20',
                'updated_at' => '2022-07-05 15:46:20',
            ),
            246 => 
            array (
                'id' => 1247,
                'user_id' => 349,
                'movie_id' => 40,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:21',
                'updated_at' => '2022-07-05 15:46:21',
            ),
            247 => 
            array (
                'id' => 1248,
                'user_id' => 60,
                'movie_id' => 40,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:21',
                'updated_at' => '2022-07-05 15:46:21',
            ),
            248 => 
            array (
                'id' => 1249,
                'user_id' => 36,
                'movie_id' => 40,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:21',
                'updated_at' => '2022-07-05 15:46:21',
            ),
            249 => 
            array (
                'id' => 1250,
                'user_id' => 233,
                'movie_id' => 40,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:21',
                'updated_at' => '2022-07-05 15:46:21',
            ),
            250 => 
            array (
                'id' => 1251,
                'user_id' => 40,
                'movie_id' => 40,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:21',
                'updated_at' => '2022-07-05 15:46:21',
            ),
            251 => 
            array (
                'id' => 1252,
                'user_id' => 105,
                'movie_id' => 40,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:22',
                'updated_at' => '2022-07-05 15:46:22',
            ),
            252 => 
            array (
                'id' => 1253,
                'user_id' => 139,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:22',
                'updated_at' => '2022-07-05 15:46:22',
            ),
            253 => 
            array (
                'id' => 1254,
                'user_id' => 358,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:22',
                'updated_at' => '2022-07-05 15:46:22',
            ),
            254 => 
            array (
                'id' => 1255,
                'user_id' => 408,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:22',
                'updated_at' => '2022-07-05 15:46:22',
            ),
            255 => 
            array (
                'id' => 1256,
                'user_id' => 241,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:22',
                'updated_at' => '2022-07-05 15:46:22',
            ),
            256 => 
            array (
                'id' => 1257,
                'user_id' => 6,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:23',
                'updated_at' => '2022-07-05 15:46:23',
            ),
            257 => 
            array (
                'id' => 1258,
                'user_id' => 415,
                'movie_id' => 41,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:23',
                'updated_at' => '2022-07-05 15:46:23',
            ),
            258 => 
            array (
                'id' => 1259,
                'user_id' => 339,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:23',
                'updated_at' => '2022-07-05 15:46:23',
            ),
            259 => 
            array (
                'id' => 1260,
                'user_id' => 9,
                'movie_id' => 41,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:23',
                'updated_at' => '2022-07-05 15:46:23',
            ),
            260 => 
            array (
                'id' => 1261,
                'user_id' => 119,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:23',
                'updated_at' => '2022-07-05 15:46:23',
            ),
            261 => 
            array (
                'id' => 1262,
                'user_id' => 95,
                'movie_id' => 41,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:24',
                'updated_at' => '2022-07-05 15:46:24',
            ),
            262 => 
            array (
                'id' => 1263,
                'user_id' => 384,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:24',
                'updated_at' => '2022-07-05 15:46:24',
            ),
            263 => 
            array (
                'id' => 1264,
                'user_id' => 17,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:24',
                'updated_at' => '2022-07-05 15:46:24',
            ),
            264 => 
            array (
                'id' => 1265,
                'user_id' => 416,
                'movie_id' => 41,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:24',
                'updated_at' => '2022-07-05 15:46:24',
            ),
            265 => 
            array (
                'id' => 1266,
                'user_id' => 150,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:24',
                'updated_at' => '2022-07-05 15:46:24',
            ),
            266 => 
            array (
                'id' => 1267,
                'user_id' => 127,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:25',
                'updated_at' => '2022-07-05 15:46:25',
            ),
            267 => 
            array (
                'id' => 1268,
                'user_id' => 152,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:25',
                'updated_at' => '2022-07-05 15:46:25',
            ),
            268 => 
            array (
                'id' => 1269,
                'user_id' => 417,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:25',
                'updated_at' => '2022-07-05 15:46:25',
            ),
            269 => 
            array (
                'id' => 1270,
                'user_id' => 321,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:25',
                'updated_at' => '2022-07-05 15:46:25',
            ),
            270 => 
            array (
                'id' => 1271,
                'user_id' => 75,
                'movie_id' => 41,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:46:25',
                'updated_at' => '2022-07-05 15:46:25',
            ),
            271 => 
            array (
                'id' => 1272,
                'user_id' => 248,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:26',
                'updated_at' => '2022-07-05 15:46:26',
            ),
            272 => 
            array (
                'id' => 1273,
                'user_id' => 364,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:26',
                'updated_at' => '2022-07-05 15:46:26',
            ),
            273 => 
            array (
                'id' => 1274,
                'user_id' => 129,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:26',
                'updated_at' => '2022-07-05 15:46:26',
            ),
            274 => 
            array (
                'id' => 1275,
                'user_id' => 188,
                'movie_id' => 41,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:26',
                'updated_at' => '2022-07-05 15:46:26',
            ),
            275 => 
            array (
                'id' => 1276,
                'user_id' => 412,
                'movie_id' => 41,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:26',
                'updated_at' => '2022-07-05 15:46:26',
            ),
            276 => 
            array (
                'id' => 1277,
                'user_id' => 60,
                'movie_id' => 41,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:27',
                'updated_at' => '2022-07-05 15:46:27',
            ),
            277 => 
            array (
                'id' => 1278,
                'user_id' => 61,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:27',
                'updated_at' => '2022-07-05 15:46:27',
            ),
            278 => 
            array (
                'id' => 1279,
                'user_id' => 372,
                'movie_id' => 41,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:27',
                'updated_at' => '2022-07-05 15:46:27',
            ),
            279 => 
            array (
                'id' => 1280,
                'user_id' => 40,
                'movie_id' => 41,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:27',
                'updated_at' => '2022-07-05 15:46:27',
            ),
            280 => 
            array (
                'id' => 1281,
                'user_id' => 221,
                'movie_id' => 41,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:27',
                'updated_at' => '2022-07-05 15:46:27',
            ),
            281 => 
            array (
                'id' => 1282,
                'user_id' => 194,
                'movie_id' => 42,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:28',
                'updated_at' => '2022-07-05 15:46:28',
            ),
            282 => 
            array (
                'id' => 1283,
                'user_id' => 358,
                'movie_id' => 42,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:28',
                'updated_at' => '2022-07-05 15:46:28',
            ),
            283 => 
            array (
                'id' => 1284,
                'user_id' => 179,
                'movie_id' => 42,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:28',
                'updated_at' => '2022-07-05 15:46:28',
            ),
            284 => 
            array (
                'id' => 1285,
                'user_id' => 44,
                'movie_id' => 42,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:28',
                'updated_at' => '2022-07-05 15:46:28',
            ),
            285 => 
            array (
                'id' => 1286,
                'user_id' => 142,
                'movie_id' => 42,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:46:28',
                'updated_at' => '2022-07-05 15:46:28',
            ),
            286 => 
            array (
                'id' => 1287,
                'user_id' => 241,
                'movie_id' => 42,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:29',
                'updated_at' => '2022-07-05 15:46:29',
            ),
            287 => 
            array (
                'id' => 1288,
                'user_id' => 165,
                'movie_id' => 42,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:29',
                'updated_at' => '2022-07-05 15:46:29',
            ),
            288 => 
            array (
                'id' => 1289,
                'user_id' => 299,
                'movie_id' => 42,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:29',
                'updated_at' => '2022-07-05 15:46:29',
            ),
            289 => 
            array (
                'id' => 1290,
                'user_id' => 351,
                'movie_id' => 42,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:29',
                'updated_at' => '2022-07-05 15:46:29',
            ),
            290 => 
            array (
                'id' => 1291,
                'user_id' => 251,
                'movie_id' => 42,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:29',
                'updated_at' => '2022-07-05 15:46:29',
            ),
            291 => 
            array (
                'id' => 1292,
                'user_id' => 418,
                'movie_id' => 42,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:30',
                'updated_at' => '2022-07-05 15:46:30',
            ),
            292 => 
            array (
                'id' => 1293,
                'user_id' => 409,
                'movie_id' => 42,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:30',
                'updated_at' => '2022-07-05 15:46:30',
            ),
            293 => 
            array (
                'id' => 1294,
                'user_id' => 254,
                'movie_id' => 42,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:30',
                'updated_at' => '2022-07-05 15:46:30',
            ),
            294 => 
            array (
                'id' => 1295,
                'user_id' => 47,
                'movie_id' => 42,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:30',
                'updated_at' => '2022-07-05 15:46:30',
            ),
            295 => 
            array (
                'id' => 1296,
                'user_id' => 402,
                'movie_id' => 42,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:46:30',
                'updated_at' => '2022-07-05 15:46:30',
            ),
            296 => 
            array (
                'id' => 1297,
                'user_id' => 96,
                'movie_id' => 42,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:31',
                'updated_at' => '2022-07-05 15:46:31',
            ),
            297 => 
            array (
                'id' => 1298,
                'user_id' => 419,
                'movie_id' => 42,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:31',
                'updated_at' => '2022-07-05 15:46:31',
            ),
            298 => 
            array (
                'id' => 1299,
                'user_id' => 127,
                'movie_id' => 42,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:31',
                'updated_at' => '2022-07-05 15:46:31',
            ),
            299 => 
            array (
                'id' => 1300,
                'user_id' => 21,
                'movie_id' => 42,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:31',
                'updated_at' => '2022-07-05 15:46:31',
            ),
            300 => 
            array (
                'id' => 1301,
                'user_id' => 417,
                'movie_id' => 42,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:31',
                'updated_at' => '2022-07-05 15:46:31',
            ),
            301 => 
            array (
                'id' => 1302,
                'user_id' => 280,
                'movie_id' => 42,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:32',
                'updated_at' => '2022-07-05 15:46:32',
            ),
            302 => 
            array (
                'id' => 1303,
                'user_id' => 78,
                'movie_id' => 42,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:32',
                'updated_at' => '2022-07-05 15:46:32',
            ),
            303 => 
            array (
                'id' => 1304,
                'user_id' => 420,
                'movie_id' => 42,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:32',
                'updated_at' => '2022-07-05 15:46:32',
            ),
            304 => 
            array (
                'id' => 1305,
                'user_id' => 58,
                'movie_id' => 42,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:46:32',
                'updated_at' => '2022-07-05 15:46:32',
            ),
            305 => 
            array (
                'id' => 1306,
                'user_id' => 157,
                'movie_id' => 42,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:32',
                'updated_at' => '2022-07-05 15:46:32',
            ),
            306 => 
            array (
                'id' => 1307,
                'user_id' => 413,
                'movie_id' => 42,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:32',
                'updated_at' => '2022-07-05 15:46:32',
            ),
            307 => 
            array (
                'id' => 1308,
                'user_id' => 61,
                'movie_id' => 42,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:33',
                'updated_at' => '2022-07-05 15:46:33',
            ),
            308 => 
            array (
                'id' => 1309,
                'user_id' => 190,
                'movie_id' => 42,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:33',
                'updated_at' => '2022-07-05 15:46:33',
            ),
            309 => 
            array (
                'id' => 1310,
                'user_id' => 394,
                'movie_id' => 42,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:33',
                'updated_at' => '2022-07-05 15:46:33',
            ),
            310 => 
            array (
                'id' => 1311,
                'user_id' => 421,
                'movie_id' => 42,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:33',
                'updated_at' => '2022-07-05 15:46:33',
            ),
            311 => 
            array (
                'id' => 1312,
                'user_id' => 85,
                'movie_id' => 42,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:33',
                'updated_at' => '2022-07-05 15:46:33',
            ),
            312 => 
            array (
                'id' => 1313,
                'user_id' => 407,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:34',
                'updated_at' => '2022-07-05 15:46:34',
            ),
            313 => 
            array (
                'id' => 1314,
                'user_id' => 193,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:34',
                'updated_at' => '2022-07-05 15:46:34',
            ),
            314 => 
            array (
                'id' => 1315,
                'user_id' => 358,
                'movie_id' => 43,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:34',
                'updated_at' => '2022-07-05 15:46:34',
            ),
            315 => 
            array (
                'id' => 1316,
                'user_id' => 385,
                'movie_id' => 43,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:34',
                'updated_at' => '2022-07-05 15:46:34',
            ),
            316 => 
            array (
                'id' => 1317,
                'user_id' => 273,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:34',
                'updated_at' => '2022-07-05 15:46:34',
            ),
            317 => 
            array (
                'id' => 1318,
                'user_id' => 298,
                'movie_id' => 43,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:35',
                'updated_at' => '2022-07-05 15:46:35',
            ),
            318 => 
            array (
                'id' => 1319,
                'user_id' => 351,
                'movie_id' => 43,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:35',
                'updated_at' => '2022-07-05 15:46:35',
            ),
            319 => 
            array (
                'id' => 1320,
                'user_id' => 418,
                'movie_id' => 43,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:35',
                'updated_at' => '2022-07-05 15:46:35',
            ),
            320 => 
            array (
                'id' => 1321,
                'user_id' => 242,
                'movie_id' => 43,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:35',
                'updated_at' => '2022-07-05 15:46:35',
            ),
            321 => 
            array (
                'id' => 1322,
                'user_id' => 388,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:35',
                'updated_at' => '2022-07-05 15:46:35',
            ),
            322 => 
            array (
                'id' => 1323,
                'user_id' => 114,
                'movie_id' => 43,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:36',
                'updated_at' => '2022-07-05 15:46:36',
            ),
            323 => 
            array (
                'id' => 1324,
                'user_id' => 116,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:36',
                'updated_at' => '2022-07-05 15:46:36',
            ),
            324 => 
            array (
                'id' => 1325,
                'user_id' => 353,
                'movie_id' => 43,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:36',
                'updated_at' => '2022-07-05 15:46:36',
            ),
            325 => 
            array (
                'id' => 1326,
                'user_id' => 383,
                'movie_id' => 43,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:36',
                'updated_at' => '2022-07-05 15:46:36',
            ),
            326 => 
            array (
                'id' => 1327,
                'user_id' => 368,
                'movie_id' => 43,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:36',
                'updated_at' => '2022-07-05 15:46:36',
            ),
            327 => 
            array (
                'id' => 1328,
                'user_id' => 121,
                'movie_id' => 43,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:36',
                'updated_at' => '2022-07-05 15:46:36',
            ),
            328 => 
            array (
                'id' => 1329,
                'user_id' => 254,
                'movie_id' => 43,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:37',
                'updated_at' => '2022-07-05 15:46:37',
            ),
            329 => 
            array (
                'id' => 1330,
                'user_id' => 422,
                'movie_id' => 43,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:37',
                'updated_at' => '2022-07-05 15:46:37',
            ),
            330 => 
            array (
                'id' => 1331,
                'user_id' => 123,
                'movie_id' => 43,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:37',
                'updated_at' => '2022-07-05 15:46:37',
            ),
            331 => 
            array (
                'id' => 1332,
                'user_id' => 94,
                'movie_id' => 43,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:37',
                'updated_at' => '2022-07-05 15:46:37',
            ),
            332 => 
            array (
                'id' => 1333,
                'user_id' => 69,
                'movie_id' => 43,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:37',
                'updated_at' => '2022-07-05 15:46:37',
            ),
            333 => 
            array (
                'id' => 1334,
                'user_id' => 419,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:38',
                'updated_at' => '2022-07-05 15:46:38',
            ),
            334 => 
            array (
                'id' => 1335,
                'user_id' => 379,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:38',
                'updated_at' => '2022-07-05 15:46:38',
            ),
            335 => 
            array (
                'id' => 1336,
                'user_id' => 278,
                'movie_id' => 43,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:38',
                'updated_at' => '2022-07-05 15:46:38',
            ),
            336 => 
            array (
                'id' => 1337,
                'user_id' => 125,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:38',
                'updated_at' => '2022-07-05 15:46:38',
            ),
            337 => 
            array (
                'id' => 1338,
                'user_id' => 279,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:38',
                'updated_at' => '2022-07-05 15:46:38',
            ),
            338 => 
            array (
                'id' => 1339,
                'user_id' => 127,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:38',
                'updated_at' => '2022-07-05 15:46:38',
            ),
            339 => 
            array (
                'id' => 1340,
                'user_id' => 21,
                'movie_id' => 43,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:39',
                'updated_at' => '2022-07-05 15:46:39',
            ),
            340 => 
            array (
                'id' => 1341,
                'user_id' => 79,
                'movie_id' => 43,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:39',
                'updated_at' => '2022-07-05 15:46:39',
            ),
            341 => 
            array (
                'id' => 1342,
                'user_id' => 410,
                'movie_id' => 43,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:39',
                'updated_at' => '2022-07-05 15:46:39',
            ),
            342 => 
            array (
                'id' => 1343,
                'user_id' => 55,
                'movie_id' => 43,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:39',
                'updated_at' => '2022-07-05 15:46:39',
            ),
            343 => 
            array (
                'id' => 1344,
                'user_id' => 58,
                'movie_id' => 43,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:39',
                'updated_at' => '2022-07-05 15:46:39',
            ),
            344 => 
            array (
                'id' => 1345,
                'user_id' => 131,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:40',
                'updated_at' => '2022-07-05 15:46:40',
            ),
            345 => 
            array (
                'id' => 1346,
                'user_id' => 376,
                'movie_id' => 43,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:40',
                'updated_at' => '2022-07-05 15:46:40',
            ),
            346 => 
            array (
                'id' => 1347,
                'user_id' => 40,
                'movie_id' => 43,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:40',
                'updated_at' => '2022-07-05 15:46:40',
            ),
            347 => 
            array (
                'id' => 1348,
                'user_id' => 357,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:40',
                'updated_at' => '2022-07-05 15:46:40',
            ),
            348 => 
            array (
                'id' => 1349,
                'user_id' => 423,
                'movie_id' => 43,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:46:40',
                'updated_at' => '2022-07-05 15:46:40',
            ),
            349 => 
            array (
                'id' => 1350,
                'user_id' => 64,
                'movie_id' => 43,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:46:41',
                'updated_at' => '2022-07-05 15:46:41',
            ),
            350 => 
            array (
                'id' => 1351,
                'user_id' => 65,
                'movie_id' => 43,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:41',
                'updated_at' => '2022-07-05 15:46:41',
            ),
            351 => 
            array (
                'id' => 1352,
                'user_id' => 424,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:41',
                'updated_at' => '2022-07-05 15:46:41',
            ),
            352 => 
            array (
                'id' => 1353,
                'user_id' => 222,
                'movie_id' => 44,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:41',
                'updated_at' => '2022-07-05 15:46:41',
            ),
            353 => 
            array (
                'id' => 1354,
                'user_id' => 324,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:41',
                'updated_at' => '2022-07-05 15:46:41',
            ),
            354 => 
            array (
                'id' => 1355,
                'user_id' => 240,
                'movie_id' => 44,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:42',
                'updated_at' => '2022-07-05 15:46:42',
            ),
            355 => 
            array (
                'id' => 1356,
                'user_id' => 141,
                'movie_id' => 44,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:46:42',
                'updated_at' => '2022-07-05 15:46:42',
            ),
            356 => 
            array (
                'id' => 1357,
                'user_id' => 241,
                'movie_id' => 44,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:42',
                'updated_at' => '2022-07-05 15:46:42',
            ),
            357 => 
            array (
                'id' => 1358,
                'user_id' => 4,
                'movie_id' => 44,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:42',
                'updated_at' => '2022-07-05 15:46:42',
            ),
            358 => 
            array (
                'id' => 1359,
                'user_id' => 283,
                'movie_id' => 44,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:42',
                'updated_at' => '2022-07-05 15:46:42',
            ),
            359 => 
            array (
                'id' => 1360,
                'user_id' => 196,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:42',
                'updated_at' => '2022-07-05 15:46:42',
            ),
            360 => 
            array (
                'id' => 1361,
                'user_id' => 92,
                'movie_id' => 44,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:46:43',
                'updated_at' => '2022-07-05 15:46:43',
            ),
            361 => 
            array (
                'id' => 1362,
                'user_id' => 244,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:43',
                'updated_at' => '2022-07-05 15:46:43',
            ),
            362 => 
            array (
                'id' => 1363,
                'user_id' => 211,
                'movie_id' => 44,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:43',
                'updated_at' => '2022-07-05 15:46:43',
            ),
            363 => 
            array (
                'id' => 1364,
                'user_id' => 226,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:43',
                'updated_at' => '2022-07-05 15:46:43',
            ),
            364 => 
            array (
                'id' => 1365,
                'user_id' => 212,
                'movie_id' => 44,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:46:43',
                'updated_at' => '2022-07-05 15:46:43',
            ),
            365 => 
            array (
                'id' => 1366,
                'user_id' => 47,
                'movie_id' => 44,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:44',
                'updated_at' => '2022-07-05 15:46:44',
            ),
            366 => 
            array (
                'id' => 1367,
                'user_id' => 124,
                'movie_id' => 44,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:44',
                'updated_at' => '2022-07-05 15:46:44',
            ),
            367 => 
            array (
                'id' => 1368,
                'user_id' => 48,
                'movie_id' => 44,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:44',
                'updated_at' => '2022-07-05 15:46:44',
            ),
            368 => 
            array (
                'id' => 1369,
                'user_id' => 49,
                'movie_id' => 44,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:46:44',
                'updated_at' => '2022-07-05 15:46:44',
            ),
            369 => 
            array (
                'id' => 1370,
                'user_id' => 246,
                'movie_id' => 44,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:44',
                'updated_at' => '2022-07-05 15:46:44',
            ),
            370 => 
            array (
                'id' => 1371,
                'user_id' => 125,
                'movie_id' => 44,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:45',
                'updated_at' => '2022-07-05 15:46:45',
            ),
            371 => 
            array (
                'id' => 1372,
                'user_id' => 247,
                'movie_id' => 44,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:45',
                'updated_at' => '2022-07-05 15:46:45',
            ),
            372 => 
            array (
                'id' => 1373,
                'user_id' => 20,
                'movie_id' => 44,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:45',
                'updated_at' => '2022-07-05 15:46:45',
            ),
            373 => 
            array (
                'id' => 1374,
                'user_id' => 127,
                'movie_id' => 44,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:45',
                'updated_at' => '2022-07-05 15:46:45',
            ),
            374 => 
            array (
                'id' => 1375,
                'user_id' => 79,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:45',
                'updated_at' => '2022-07-05 15:46:45',
            ),
            375 => 
            array (
                'id' => 1376,
                'user_id' => 186,
                'movie_id' => 44,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:46',
                'updated_at' => '2022-07-05 15:46:46',
            ),
            376 => 
            array (
                'id' => 1377,
                'user_id' => 23,
                'movie_id' => 44,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:46',
                'updated_at' => '2022-07-05 15:46:46',
            ),
            377 => 
            array (
                'id' => 1378,
                'user_id' => 26,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:46',
                'updated_at' => '2022-07-05 15:46:46',
            ),
            378 => 
            array (
                'id' => 1379,
                'user_id' => 28,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:46',
                'updated_at' => '2022-07-05 15:46:46',
            ),
            379 => 
            array (
                'id' => 1380,
                'user_id' => 219,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:46',
                'updated_at' => '2022-07-05 15:46:46',
            ),
            380 => 
            array (
                'id' => 1381,
                'user_id' => 259,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:46',
                'updated_at' => '2022-07-05 15:46:46',
            ),
            381 => 
            array (
                'id' => 1382,
                'user_id' => 83,
                'movie_id' => 44,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:46:47',
                'updated_at' => '2022-07-05 15:46:47',
            ),
            382 => 
            array (
                'id' => 1383,
                'user_id' => 260,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:47',
                'updated_at' => '2022-07-05 15:46:47',
            ),
            383 => 
            array (
                'id' => 1384,
                'user_id' => 174,
                'movie_id' => 44,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:47',
                'updated_at' => '2022-07-05 15:46:47',
            ),
            384 => 
            array (
                'id' => 1385,
                'user_id' => 61,
                'movie_id' => 44,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:47',
                'updated_at' => '2022-07-05 15:46:47',
            ),
            385 => 
            array (
                'id' => 1386,
                'user_id' => 36,
                'movie_id' => 44,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:47',
                'updated_at' => '2022-07-05 15:46:47',
            ),
            386 => 
            array (
                'id' => 1387,
                'user_id' => 40,
                'movie_id' => 44,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:48',
                'updated_at' => '2022-07-05 15:46:48',
            ),
            387 => 
            array (
                'id' => 1388,
                'user_id' => 423,
                'movie_id' => 44,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:46:48',
                'updated_at' => '2022-07-05 15:46:48',
            ),
            388 => 
            array (
                'id' => 1389,
                'user_id' => 135,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:48',
                'updated_at' => '2022-07-05 15:46:48',
            ),
            389 => 
            array (
                'id' => 1390,
                'user_id' => 42,
                'movie_id' => 44,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:48',
                'updated_at' => '2022-07-05 15:46:48',
            ),
            390 => 
            array (
                'id' => 1391,
                'user_id' => 425,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:48',
                'updated_at' => '2022-07-05 15:46:48',
            ),
            391 => 
            array (
                'id' => 1392,
                'user_id' => 426,
                'movie_id' => 44,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:49',
                'updated_at' => '2022-07-05 15:46:49',
            ),
            392 => 
            array (
                'id' => 1393,
                'user_id' => 107,
                'movie_id' => 44,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:49',
                'updated_at' => '2022-07-05 15:46:49',
            ),
            393 => 
            array (
                'id' => 1394,
                'user_id' => 264,
                'movie_id' => 44,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:49',
                'updated_at' => '2022-07-05 15:46:49',
            ),
            394 => 
            array (
                'id' => 1395,
                'user_id' => 240,
                'movie_id' => 45,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:49',
                'updated_at' => '2022-07-05 15:46:49',
            ),
            395 => 
            array (
                'id' => 1396,
                'user_id' => 141,
                'movie_id' => 45,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:49',
                'updated_at' => '2022-07-05 15:46:49',
            ),
            396 => 
            array (
                'id' => 1397,
                'user_id' => 241,
                'movie_id' => 45,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:49',
                'updated_at' => '2022-07-05 15:46:49',
            ),
            397 => 
            array (
                'id' => 1398,
                'user_id' => 225,
                'movie_id' => 45,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:50',
                'updated_at' => '2022-07-05 15:46:50',
            ),
            398 => 
            array (
                'id' => 1399,
                'user_id' => 427,
                'movie_id' => 45,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:50',
                'updated_at' => '2022-07-05 15:46:50',
            ),
            399 => 
            array (
                'id' => 1400,
                'user_id' => 212,
                'movie_id' => 45,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:50',
                'updated_at' => '2022-07-05 15:46:50',
            ),
            400 => 
            array (
                'id' => 1401,
                'user_id' => 169,
                'movie_id' => 45,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:50',
                'updated_at' => '2022-07-05 15:46:50',
            ),
            401 => 
            array (
                'id' => 1402,
                'user_id' => 49,
                'movie_id' => 45,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:50',
                'updated_at' => '2022-07-05 15:46:50',
            ),
            402 => 
            array (
                'id' => 1403,
                'user_id' => 125,
                'movie_id' => 45,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:51',
                'updated_at' => '2022-07-05 15:46:51',
            ),
            403 => 
            array (
                'id' => 1404,
                'user_id' => 20,
                'movie_id' => 45,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:51',
                'updated_at' => '2022-07-05 15:46:51',
            ),
            404 => 
            array (
                'id' => 1405,
                'user_id' => 398,
                'movie_id' => 45,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:51',
                'updated_at' => '2022-07-05 15:46:51',
            ),
            405 => 
            array (
                'id' => 1406,
                'user_id' => 201,
                'movie_id' => 45,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:51',
                'updated_at' => '2022-07-05 15:46:51',
            ),
            406 => 
            array (
                'id' => 1407,
                'user_id' => 99,
                'movie_id' => 45,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:51',
                'updated_at' => '2022-07-05 15:46:51',
            ),
            407 => 
            array (
                'id' => 1408,
                'user_id' => 219,
                'movie_id' => 45,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:52',
                'updated_at' => '2022-07-05 15:46:52',
            ),
            408 => 
            array (
                'id' => 1409,
                'user_id' => 259,
                'movie_id' => 45,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:52',
                'updated_at' => '2022-07-05 15:46:52',
            ),
            409 => 
            array (
                'id' => 1410,
                'user_id' => 387,
                'movie_id' => 45,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:52',
                'updated_at' => '2022-07-05 15:46:52',
            ),
            410 => 
            array (
                'id' => 1411,
                'user_id' => 40,
                'movie_id' => 45,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:52',
                'updated_at' => '2022-07-05 15:46:52',
            ),
            411 => 
            array (
                'id' => 1412,
                'user_id' => 41,
                'movie_id' => 45,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:52',
                'updated_at' => '2022-07-05 15:46:52',
            ),
            412 => 
            array (
                'id' => 1413,
                'user_id' => 65,
                'movie_id' => 45,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:52',
                'updated_at' => '2022-07-05 15:46:52',
            ),
            413 => 
            array (
                'id' => 1414,
                'user_id' => 107,
                'movie_id' => 45,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:53',
                'updated_at' => '2022-07-05 15:46:53',
            ),
            414 => 
            array (
                'id' => 1415,
                'user_id' => 223,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:53',
                'updated_at' => '2022-07-05 15:46:53',
            ),
            415 => 
            array (
                'id' => 1416,
                'user_id' => 273,
                'movie_id' => 46,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:53',
                'updated_at' => '2022-07-05 15:46:53',
            ),
            416 => 
            array (
                'id' => 1417,
                'user_id' => 274,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:53',
                'updated_at' => '2022-07-05 15:46:53',
            ),
            417 => 
            array (
                'id' => 1418,
                'user_id' => 360,
                'movie_id' => 46,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:53',
                'updated_at' => '2022-07-05 15:46:53',
            ),
            418 => 
            array (
                'id' => 1419,
                'user_id' => 91,
                'movie_id' => 46,
                'rating' => 4.0,
                'created_at' => '2022-07-05 15:46:54',
                'updated_at' => '2022-07-05 15:46:54',
            ),
            419 => 
            array (
                'id' => 1420,
                'user_id' => 117,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:54',
                'updated_at' => '2022-07-05 15:46:54',
            ),
            420 => 
            array (
                'id' => 1421,
                'user_id' => 255,
                'movie_id' => 46,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:54',
                'updated_at' => '2022-07-05 15:46:54',
            ),
            421 => 
            array (
                'id' => 1422,
                'user_id' => 287,
                'movie_id' => 46,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:54',
                'updated_at' => '2022-07-05 15:46:54',
            ),
            422 => 
            array (
                'id' => 1423,
                'user_id' => 123,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:54',
                'updated_at' => '2022-07-05 15:46:54',
            ),
            423 => 
            array (
                'id' => 1424,
                'user_id' => 216,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:54',
                'updated_at' => '2022-07-05 15:46:54',
            ),
            424 => 
            array (
                'id' => 1425,
                'user_id' => 269,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:55',
                'updated_at' => '2022-07-05 15:46:55',
            ),
            425 => 
            array (
                'id' => 1426,
                'user_id' => 21,
                'movie_id' => 46,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:55',
                'updated_at' => '2022-07-05 15:46:55',
            ),
            426 => 
            array (
                'id' => 1427,
                'user_id' => 52,
                'movie_id' => 46,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:55',
                'updated_at' => '2022-07-05 15:46:55',
            ),
            427 => 
            array (
                'id' => 1428,
                'user_id' => 363,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:55',
                'updated_at' => '2022-07-05 15:46:55',
            ),
            428 => 
            array (
                'id' => 1429,
                'user_id' => 53,
                'movie_id' => 46,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:55',
                'updated_at' => '2022-07-05 15:46:55',
            ),
            429 => 
            array (
                'id' => 1430,
                'user_id' => 36,
                'movie_id' => 46,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:46:56',
                'updated_at' => '2022-07-05 15:46:56',
            ),
            430 => 
            array (
                'id' => 1431,
                'user_id' => 40,
                'movie_id' => 46,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:56',
                'updated_at' => '2022-07-05 15:46:56',
            ),
            431 => 
            array (
                'id' => 1432,
                'user_id' => 135,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:56',
                'updated_at' => '2022-07-05 15:46:56',
            ),
            432 => 
            array (
                'id' => 1433,
                'user_id' => 65,
                'movie_id' => 46,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:56',
                'updated_at' => '2022-07-05 15:46:56',
            ),
            433 => 
            array (
                'id' => 1434,
                'user_id' => 105,
                'movie_id' => 46,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:56',
                'updated_at' => '2022-07-05 15:46:56',
            ),
            434 => 
            array (
                'id' => 1435,
                'user_id' => 107,
                'movie_id' => 46,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:57',
                'updated_at' => '2022-07-05 15:46:57',
            ),
            435 => 
            array (
                'id' => 1436,
                'user_id' => 414,
                'movie_id' => 47,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:57',
                'updated_at' => '2022-07-05 15:46:57',
            ),
            436 => 
            array (
                'id' => 1437,
                'user_id' => 323,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:57',
                'updated_at' => '2022-07-05 15:46:57',
            ),
            437 => 
            array (
                'id' => 1438,
                'user_id' => 90,
                'movie_id' => 47,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:46:57',
                'updated_at' => '2022-07-05 15:46:57',
            ),
            438 => 
            array (
                'id' => 1439,
                'user_id' => 109,
                'movie_id' => 47,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:57',
                'updated_at' => '2022-07-05 15:46:57',
            ),
            439 => 
            array (
                'id' => 1440,
                'user_id' => 180,
                'movie_id' => 47,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:46:58',
                'updated_at' => '2022-07-05 15:46:58',
            ),
            440 => 
            array (
                'id' => 1441,
                'user_id' => 283,
                'movie_id' => 47,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:46:58',
                'updated_at' => '2022-07-05 15:46:58',
            ),
            441 => 
            array (
                'id' => 1442,
                'user_id' => 112,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:58',
                'updated_at' => '2022-07-05 15:46:58',
            ),
            442 => 
            array (
                'id' => 1443,
                'user_id' => 146,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:58',
                'updated_at' => '2022-07-05 15:46:58',
            ),
            443 => 
            array (
                'id' => 1444,
                'user_id' => 8,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:58',
                'updated_at' => '2022-07-05 15:46:58',
            ),
            444 => 
            array (
                'id' => 1445,
                'user_id' => 428,
                'movie_id' => 47,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:46:59',
                'updated_at' => '2022-07-05 15:46:59',
            ),
            445 => 
            array (
                'id' => 1446,
                'user_id' => 254,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:59',
                'updated_at' => '2022-07-05 15:46:59',
            ),
            446 => 
            array (
                'id' => 1447,
                'user_id' => 12,
                'movie_id' => 47,
                'rating' => 4.5,
                'created_at' => '2022-07-05 15:46:59',
                'updated_at' => '2022-07-05 15:46:59',
            ),
            447 => 
            array (
                'id' => 1448,
                'user_id' => 169,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:59',
                'updated_at' => '2022-07-05 15:46:59',
            ),
            448 => 
            array (
                'id' => 1449,
                'user_id' => 362,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:46:59',
                'updated_at' => '2022-07-05 15:46:59',
            ),
            449 => 
            array (
                'id' => 1450,
                'user_id' => 72,
                'movie_id' => 47,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:46:59',
                'updated_at' => '2022-07-05 15:46:59',
            ),
            450 => 
            array (
                'id' => 1451,
                'user_id' => 183,
                'movie_id' => 47,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:00',
                'updated_at' => '2022-07-05 15:47:00',
            ),
            451 => 
            array (
                'id' => 1452,
                'user_id' => 416,
                'movie_id' => 47,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:00',
                'updated_at' => '2022-07-05 15:47:00',
            ),
            452 => 
            array (
                'id' => 1453,
                'user_id' => 149,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:00',
                'updated_at' => '2022-07-05 15:47:00',
            ),
            453 => 
            array (
                'id' => 1454,
                'user_id' => 150,
                'movie_id' => 47,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:00',
                'updated_at' => '2022-07-05 15:47:00',
            ),
            454 => 
            array (
                'id' => 1455,
                'user_id' => 21,
                'movie_id' => 47,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:00',
                'updated_at' => '2022-07-05 15:47:00',
            ),
            455 => 
            array (
                'id' => 1456,
                'user_id' => 79,
                'movie_id' => 47,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:01',
                'updated_at' => '2022-07-05 15:47:01',
            ),
            456 => 
            array (
                'id' => 1457,
                'user_id' => 58,
                'movie_id' => 47,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:01',
                'updated_at' => '2022-07-05 15:47:01',
            ),
            457 => 
            array (
                'id' => 1458,
                'user_id' => 31,
                'movie_id' => 47,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:01',
                'updated_at' => '2022-07-05 15:47:01',
            ),
            458 => 
            array (
                'id' => 1459,
                'user_id' => 202,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:01',
                'updated_at' => '2022-07-05 15:47:01',
            ),
            459 => 
            array (
                'id' => 1460,
                'user_id' => 308,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:01',
                'updated_at' => '2022-07-05 15:47:01',
            ),
            460 => 
            array (
                'id' => 1461,
                'user_id' => 189,
                'movie_id' => 47,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:02',
                'updated_at' => '2022-07-05 15:47:02',
            ),
            461 => 
            array (
                'id' => 1462,
                'user_id' => 429,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:02',
                'updated_at' => '2022-07-05 15:47:02',
            ),
            462 => 
            array (
                'id' => 1463,
                'user_id' => 40,
                'movie_id' => 47,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:02',
                'updated_at' => '2022-07-05 15:47:02',
            ),
            463 => 
            array (
                'id' => 1464,
                'user_id' => 314,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:02',
                'updated_at' => '2022-07-05 15:47:02',
            ),
            464 => 
            array (
                'id' => 1465,
                'user_id' => 204,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:02',
                'updated_at' => '2022-07-05 15:47:02',
            ),
            465 => 
            array (
                'id' => 1466,
                'user_id' => 65,
                'movie_id' => 47,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:03',
                'updated_at' => '2022-07-05 15:47:03',
            ),
            466 => 
            array (
                'id' => 1467,
                'user_id' => 345,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:03',
                'updated_at' => '2022-07-05 15:47:03',
            ),
            467 => 
            array (
                'id' => 1468,
                'user_id' => 272,
                'movie_id' => 47,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:03',
                'updated_at' => '2022-07-05 15:47:03',
            ),
            468 => 
            array (
                'id' => 1469,
                'user_id' => 223,
                'movie_id' => 48,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:03',
                'updated_at' => '2022-07-05 15:47:03',
            ),
            469 => 
            array (
                'id' => 1470,
                'user_id' => 274,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:03',
                'updated_at' => '2022-07-05 15:47:03',
            ),
            470 => 
            array (
                'id' => 1471,
                'user_id' => 241,
                'movie_id' => 48,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:04',
                'updated_at' => '2022-07-05 15:47:04',
            ),
            471 => 
            array (
                'id' => 1472,
                'user_id' => 46,
                'movie_id' => 48,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:04',
                'updated_at' => '2022-07-05 15:47:04',
            ),
            472 => 
            array (
                'id' => 1473,
                'user_id' => 4,
                'movie_id' => 48,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:47:04',
                'updated_at' => '2022-07-05 15:47:04',
            ),
            473 => 
            array (
                'id' => 1474,
                'user_id' => 6,
                'movie_id' => 48,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:04',
                'updated_at' => '2022-07-05 15:47:04',
            ),
            474 => 
            array (
                'id' => 1475,
                'user_id' => 427,
                'movie_id' => 48,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:04',
                'updated_at' => '2022-07-05 15:47:04',
            ),
            475 => 
            array (
                'id' => 1476,
                'user_id' => 168,
                'movie_id' => 48,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:05',
                'updated_at' => '2022-07-05 15:47:05',
            ),
            476 => 
            array (
                'id' => 1477,
                'user_id' => 254,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:05',
                'updated_at' => '2022-07-05 15:47:05',
            ),
            477 => 
            array (
                'id' => 1478,
                'user_id' => 226,
                'movie_id' => 48,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:05',
                'updated_at' => '2022-07-05 15:47:05',
            ),
            478 => 
            array (
                'id' => 1479,
                'user_id' => 212,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:05',
                'updated_at' => '2022-07-05 15:47:05',
            ),
            479 => 
            array (
                'id' => 1480,
                'user_id' => 94,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:05',
                'updated_at' => '2022-07-05 15:47:05',
            ),
            480 => 
            array (
                'id' => 1481,
                'user_id' => 277,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:06',
                'updated_at' => '2022-07-05 15:47:06',
            ),
            481 => 
            array (
                'id' => 1482,
                'user_id' => 213,
                'movie_id' => 48,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:06',
                'updated_at' => '2022-07-05 15:47:06',
            ),
            482 => 
            array (
                'id' => 1483,
                'user_id' => 341,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:06',
                'updated_at' => '2022-07-05 15:47:06',
            ),
            483 => 
            array (
                'id' => 1484,
                'user_id' => 378,
                'movie_id' => 48,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:06',
                'updated_at' => '2022-07-05 15:47:06',
            ),
            484 => 
            array (
                'id' => 1485,
                'user_id' => 48,
                'movie_id' => 48,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:06',
                'updated_at' => '2022-07-05 15:47:06',
            ),
            485 => 
            array (
                'id' => 1486,
                'user_id' => 49,
                'movie_id' => 48,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:07',
                'updated_at' => '2022-07-05 15:47:07',
            ),
            486 => 
            array (
                'id' => 1487,
                'user_id' => 215,
                'movie_id' => 48,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:07',
                'updated_at' => '2022-07-05 15:47:07',
            ),
            487 => 
            array (
                'id' => 1488,
                'user_id' => 404,
                'movie_id' => 48,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:07',
                'updated_at' => '2022-07-05 15:47:07',
            ),
            488 => 
            array (
                'id' => 1489,
                'user_id' => 52,
                'movie_id' => 48,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:07',
                'updated_at' => '2022-07-05 15:47:07',
            ),
            489 => 
            array (
                'id' => 1490,
                'user_id' => 23,
                'movie_id' => 48,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:07',
                'updated_at' => '2022-07-05 15:47:07',
            ),
            490 => 
            array (
                'id' => 1491,
                'user_id' => 260,
                'movie_id' => 48,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:07',
                'updated_at' => '2022-07-05 15:47:07',
            ),
            491 => 
            array (
                'id' => 1492,
                'user_id' => 174,
                'movie_id' => 48,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:08',
                'updated_at' => '2022-07-05 15:47:08',
            ),
            492 => 
            array (
                'id' => 1493,
                'user_id' => 262,
                'movie_id' => 48,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:08',
                'updated_at' => '2022-07-05 15:47:08',
            ),
            493 => 
            array (
                'id' => 1494,
                'user_id' => 36,
                'movie_id' => 48,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:08',
                'updated_at' => '2022-07-05 15:47:08',
            ),
            494 => 
            array (
                'id' => 1495,
                'user_id' => 40,
                'movie_id' => 48,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:08',
                'updated_at' => '2022-07-05 15:47:08',
            ),
            495 => 
            array (
                'id' => 1496,
                'user_id' => 421,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:08',
                'updated_at' => '2022-07-05 15:47:08',
            ),
            496 => 
            array (
                'id' => 1497,
                'user_id' => 296,
                'movie_id' => 48,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:09',
                'updated_at' => '2022-07-05 15:47:09',
            ),
            497 => 
            array (
                'id' => 1498,
                'user_id' => 425,
                'movie_id' => 48,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:09',
                'updated_at' => '2022-07-05 15:47:09',
            ),
            498 => 
            array (
                'id' => 1499,
                'user_id' => 191,
                'movie_id' => 48,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:09',
                'updated_at' => '2022-07-05 15:47:09',
            ),
            499 => 
            array (
                'id' => 1500,
                'user_id' => 322,
                'movie_id' => 49,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:09',
                'updated_at' => '2022-07-05 15:47:09',
            ),
        ));
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'user_id' => 239,
                'movie_id' => 49,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:09',
                'updated_at' => '2022-07-05 15:47:09',
            ),
            1 => 
            array (
                'id' => 1502,
                'user_id' => 89,
                'movie_id' => 49,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:10',
                'updated_at' => '2022-07-05 15:47:10',
            ),
            2 => 
            array (
                'id' => 1503,
                'user_id' => 315,
                'movie_id' => 49,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:10',
                'updated_at' => '2022-07-05 15:47:10',
            ),
            3 => 
            array (
                'id' => 1504,
                'user_id' => 242,
                'movie_id' => 49,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:10',
                'updated_at' => '2022-07-05 15:47:10',
            ),
            4 => 
            array (
                'id' => 1505,
                'user_id' => 252,
                'movie_id' => 49,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:47:10',
                'updated_at' => '2022-07-05 15:47:10',
            ),
            5 => 
            array (
                'id' => 1506,
                'user_id' => 428,
                'movie_id' => 49,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:11',
                'updated_at' => '2022-07-05 15:47:11',
            ),
            6 => 
            array (
                'id' => 1507,
                'user_id' => 300,
                'movie_id' => 49,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:11',
                'updated_at' => '2022-07-05 15:47:11',
            ),
            7 => 
            array (
                'id' => 1508,
                'user_id' => 117,
                'movie_id' => 49,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:11',
                'updated_at' => '2022-07-05 15:47:11',
            ),
            8 => 
            array (
                'id' => 1509,
                'user_id' => 399,
                'movie_id' => 49,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:11',
                'updated_at' => '2022-07-05 15:47:11',
            ),
            9 => 
            array (
                'id' => 1510,
                'user_id' => 427,
                'movie_id' => 49,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:12',
                'updated_at' => '2022-07-05 15:47:12',
            ),
            10 => 
            array (
                'id' => 1511,
                'user_id' => 401,
                'movie_id' => 49,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:12',
                'updated_at' => '2022-07-05 15:47:12',
            ),
            11 => 
            array (
                'id' => 1512,
                'user_id' => 276,
                'movie_id' => 49,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:12',
                'updated_at' => '2022-07-05 15:47:12',
            ),
            12 => 
            array (
                'id' => 1513,
                'user_id' => 49,
                'movie_id' => 49,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:12',
                'updated_at' => '2022-07-05 15:47:12',
            ),
            13 => 
            array (
                'id' => 1514,
                'user_id' => 21,
                'movie_id' => 49,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:12',
                'updated_at' => '2022-07-05 15:47:12',
            ),
            14 => 
            array (
                'id' => 1515,
                'user_id' => 52,
                'movie_id' => 49,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:12',
                'updated_at' => '2022-07-05 15:47:12',
            ),
            15 => 
            array (
                'id' => 1516,
                'user_id' => 128,
                'movie_id' => 49,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:13',
                'updated_at' => '2022-07-05 15:47:13',
            ),
            16 => 
            array (
                'id' => 1517,
                'user_id' => 23,
                'movie_id' => 49,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:13',
                'updated_at' => '2022-07-05 15:47:13',
            ),
            17 => 
            array (
                'id' => 1518,
                'user_id' => 293,
                'movie_id' => 49,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:13',
                'updated_at' => '2022-07-05 15:47:13',
            ),
            18 => 
            array (
                'id' => 1519,
                'user_id' => 380,
                'movie_id' => 49,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:13',
                'updated_at' => '2022-07-05 15:47:13',
            ),
            19 => 
            array (
                'id' => 1520,
                'user_id' => 258,
                'movie_id' => 49,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:13',
                'updated_at' => '2022-07-05 15:47:13',
            ),
            20 => 
            array (
                'id' => 1521,
                'user_id' => 174,
                'movie_id' => 49,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:14',
                'updated_at' => '2022-07-05 15:47:14',
            ),
            21 => 
            array (
                'id' => 1522,
                'user_id' => 33,
                'movie_id' => 49,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:14',
                'updated_at' => '2022-07-05 15:47:14',
            ),
            22 => 
            array (
                'id' => 1523,
                'user_id' => 387,
                'movie_id' => 49,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:14',
                'updated_at' => '2022-07-05 15:47:14',
            ),
            23 => 
            array (
                'id' => 1524,
                'user_id' => 61,
                'movie_id' => 49,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:14',
                'updated_at' => '2022-07-05 15:47:14',
            ),
            24 => 
            array (
                'id' => 1525,
                'user_id' => 36,
                'movie_id' => 49,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:14',
                'updated_at' => '2022-07-05 15:47:14',
            ),
            25 => 
            array (
                'id' => 1526,
                'user_id' => 220,
                'movie_id' => 49,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:14',
                'updated_at' => '2022-07-05 15:47:14',
            ),
            26 => 
            array (
                'id' => 1527,
                'user_id' => 40,
                'movie_id' => 49,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:15',
                'updated_at' => '2022-07-05 15:47:15',
            ),
            27 => 
            array (
                'id' => 1528,
                'user_id' => 42,
                'movie_id' => 49,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:15',
                'updated_at' => '2022-07-05 15:47:15',
            ),
            28 => 
            array (
                'id' => 1529,
                'user_id' => 425,
                'movie_id' => 49,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:15',
                'updated_at' => '2022-07-05 15:47:15',
            ),
            29 => 
            array (
                'id' => 1530,
                'user_id' => 350,
                'movie_id' => 49,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:15',
                'updated_at' => '2022-07-05 15:47:15',
            ),
            30 => 
            array (
                'id' => 1531,
                'user_id' => 43,
                'movie_id' => 49,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:15',
                'updated_at' => '2022-07-05 15:47:15',
            ),
            31 => 
            array (
                'id' => 1532,
                'user_id' => 106,
                'movie_id' => 49,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:47:15',
                'updated_at' => '2022-07-05 15:47:15',
            ),
            32 => 
            array (
                'id' => 1533,
                'user_id' => 297,
                'movie_id' => 50,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:16',
                'updated_at' => '2022-07-05 15:47:16',
            ),
            33 => 
            array (
                'id' => 1534,
                'user_id' => 240,
                'movie_id' => 50,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:16',
                'updated_at' => '2022-07-05 15:47:16',
            ),
            34 => 
            array (
                'id' => 1535,
                'user_id' => 359,
                'movie_id' => 50,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:16',
                'updated_at' => '2022-07-05 15:47:16',
            ),
            35 => 
            array (
                'id' => 1536,
                'user_id' => 241,
                'movie_id' => 50,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:16',
                'updated_at' => '2022-07-05 15:47:16',
            ),
            36 => 
            array (
                'id' => 1537,
                'user_id' => 6,
                'movie_id' => 50,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:16',
                'updated_at' => '2022-07-05 15:47:16',
            ),
            37 => 
            array (
                'id' => 1538,
                'user_id' => 253,
                'movie_id' => 50,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:16',
                'updated_at' => '2022-07-05 15:47:16',
            ),
            38 => 
            array (
                'id' => 1539,
                'user_id' => 400,
                'movie_id' => 50,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:17',
                'updated_at' => '2022-07-05 15:47:17',
            ),
            39 => 
            array (
                'id' => 1540,
                'user_id' => 427,
                'movie_id' => 50,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:17',
                'updated_at' => '2022-07-05 15:47:17',
            ),
            40 => 
            array (
                'id' => 1541,
                'user_id' => 267,
                'movie_id' => 50,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:17',
                'updated_at' => '2022-07-05 15:47:17',
            ),
            41 => 
            array (
                'id' => 1542,
                'user_id' => 254,
                'movie_id' => 50,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:17',
                'updated_at' => '2022-07-05 15:47:17',
            ),
            42 => 
            array (
                'id' => 1543,
                'user_id' => 319,
                'movie_id' => 50,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:17',
                'updated_at' => '2022-07-05 15:47:17',
            ),
            43 => 
            array (
                'id' => 1544,
                'user_id' => 402,
                'movie_id' => 50,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:47:17',
                'updated_at' => '2022-07-05 15:47:17',
            ),
            44 => 
            array (
                'id' => 1545,
                'user_id' => 303,
                'movie_id' => 50,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:18',
                'updated_at' => '2022-07-05 15:47:18',
            ),
            45 => 
            array (
                'id' => 1546,
                'user_id' => 21,
                'movie_id' => 50,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:47:18',
                'updated_at' => '2022-07-05 15:47:18',
            ),
            46 => 
            array (
                'id' => 1547,
                'user_id' => 55,
                'movie_id' => 50,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:47:18',
                'updated_at' => '2022-07-05 15:47:18',
            ),
            47 => 
            array (
                'id' => 1548,
                'user_id' => 259,
                'movie_id' => 50,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:18',
                'updated_at' => '2022-07-05 15:47:18',
            ),
            48 => 
            array (
                'id' => 1549,
                'user_id' => 260,
                'movie_id' => 50,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:18',
                'updated_at' => '2022-07-05 15:47:18',
            ),
            49 => 
            array (
                'id' => 1550,
                'user_id' => 61,
                'movie_id' => 50,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:19',
                'updated_at' => '2022-07-05 15:47:19',
            ),
            50 => 
            array (
                'id' => 1551,
                'user_id' => 262,
                'movie_id' => 50,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:19',
                'updated_at' => '2022-07-05 15:47:19',
            ),
            51 => 
            array (
                'id' => 1552,
                'user_id' => 429,
                'movie_id' => 50,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:19',
                'updated_at' => '2022-07-05 15:47:19',
            ),
            52 => 
            array (
                'id' => 1553,
                'user_id' => 40,
                'movie_id' => 50,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:19',
                'updated_at' => '2022-07-05 15:47:19',
            ),
            53 => 
            array (
                'id' => 1554,
                'user_id' => 426,
                'movie_id' => 50,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:47:19',
                'updated_at' => '2022-07-05 15:47:19',
            ),
            54 => 
            array (
                'id' => 1555,
                'user_id' => 105,
                'movie_id' => 50,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:19',
                'updated_at' => '2022-07-05 15:47:19',
            ),
            55 => 
            array (
                'id' => 1556,
                'user_id' => 238,
                'movie_id' => 50,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:20',
                'updated_at' => '2022-07-05 15:47:20',
            ),
            56 => 
            array (
                'id' => 1557,
                'user_id' => 67,
                'movie_id' => 51,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:47:20',
                'updated_at' => '2022-07-05 15:47:20',
            ),
            57 => 
            array (
                'id' => 1558,
                'user_id' => 68,
                'movie_id' => 51,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:20',
                'updated_at' => '2022-07-05 15:47:20',
            ),
            58 => 
            array (
                'id' => 1559,
                'user_id' => 359,
                'movie_id' => 51,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:20',
                'updated_at' => '2022-07-05 15:47:20',
            ),
            59 => 
            array (
                'id' => 1560,
                'user_id' => 45,
                'movie_id' => 51,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:20',
                'updated_at' => '2022-07-05 15:47:20',
            ),
            60 => 
            array (
                'id' => 1561,
                'user_id' => 377,
                'movie_id' => 51,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:20',
                'updated_at' => '2022-07-05 15:47:20',
            ),
            61 => 
            array (
                'id' => 1562,
                'user_id' => 352,
                'movie_id' => 51,
                'rating' => 10.0,
                'created_at' => '2022-07-05 15:47:21',
                'updated_at' => '2022-07-05 15:47:21',
            ),
            62 => 
            array (
                'id' => 1563,
                'user_id' => 325,
                'movie_id' => 51,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:21',
                'updated_at' => '2022-07-05 15:47:21',
            ),
            63 => 
            array (
                'id' => 1564,
                'user_id' => 114,
                'movie_id' => 51,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:47:21',
                'updated_at' => '2022-07-05 15:47:21',
            ),
            64 => 
            array (
                'id' => 1565,
                'user_id' => 116,
                'movie_id' => 51,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:21',
                'updated_at' => '2022-07-05 15:47:21',
            ),
            65 => 
            array (
                'id' => 1566,
                'user_id' => 121,
                'movie_id' => 51,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:21',
                'updated_at' => '2022-07-05 15:47:21',
            ),
            66 => 
            array (
                'id' => 1567,
                'user_id' => 354,
                'movie_id' => 51,
                'rating' => 3.0,
                'created_at' => '2022-07-05 15:47:22',
                'updated_at' => '2022-07-05 15:47:22',
            ),
            67 => 
            array (
                'id' => 1568,
                'user_id' => 422,
                'movie_id' => 51,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:22',
                'updated_at' => '2022-07-05 15:47:22',
            ),
            68 => 
            array (
                'id' => 1569,
                'user_id' => 277,
                'movie_id' => 51,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:22',
                'updated_at' => '2022-07-05 15:47:22',
            ),
            69 => 
            array (
                'id' => 1570,
                'user_id' => 278,
                'movie_id' => 51,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:22',
                'updated_at' => '2022-07-05 15:47:22',
            ),
            70 => 
            array (
                'id' => 1571,
                'user_id' => 125,
                'movie_id' => 51,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:22',
                'updated_at' => '2022-07-05 15:47:22',
            ),
            71 => 
            array (
                'id' => 1572,
                'user_id' => 72,
                'movie_id' => 51,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:23',
                'updated_at' => '2022-07-05 15:47:23',
            ),
            72 => 
            array (
                'id' => 1573,
                'user_id' => 151,
                'movie_id' => 51,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:47:23',
                'updated_at' => '2022-07-05 15:47:23',
            ),
            73 => 
            array (
                'id' => 1574,
                'user_id' => 21,
                'movie_id' => 51,
                'rating' => 5.5,
                'created_at' => '2022-07-05 15:47:23',
                'updated_at' => '2022-07-05 15:47:23',
            ),
            74 => 
            array (
                'id' => 1575,
                'user_id' => 417,
                'movie_id' => 51,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:23',
                'updated_at' => '2022-07-05 15:47:23',
            ),
            75 => 
            array (
                'id' => 1576,
                'user_id' => 154,
                'movie_id' => 51,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:23',
                'updated_at' => '2022-07-05 15:47:23',
            ),
            76 => 
            array (
                'id' => 1577,
                'user_id' => 78,
                'movie_id' => 51,
                'rating' => 5.0,
                'created_at' => '2022-07-05 15:47:23',
                'updated_at' => '2022-07-05 15:47:23',
            ),
            77 => 
            array (
                'id' => 1578,
                'user_id' => 79,
                'movie_id' => 51,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:24',
                'updated_at' => '2022-07-05 15:47:24',
            ),
            78 => 
            array (
                'id' => 1579,
                'user_id' => 80,
                'movie_id' => 51,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:24',
                'updated_at' => '2022-07-05 15:47:24',
            ),
            79 => 
            array (
                'id' => 1580,
                'user_id' => 201,
                'movie_id' => 51,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:24',
                'updated_at' => '2022-07-05 15:47:24',
            ),
            80 => 
            array (
                'id' => 1581,
                'user_id' => 99,
                'movie_id' => 51,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:24',
                'updated_at' => '2022-07-05 15:47:24',
            ),
            81 => 
            array (
                'id' => 1582,
                'user_id' => 58,
                'movie_id' => 51,
                'rating' => 7.5,
                'created_at' => '2022-07-05 15:47:24',
                'updated_at' => '2022-07-05 15:47:24',
            ),
            82 => 
            array (
                'id' => 1583,
                'user_id' => 60,
                'movie_id' => 51,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:24',
                'updated_at' => '2022-07-05 15:47:24',
            ),
            83 => 
            array (
                'id' => 1584,
                'user_id' => 158,
                'movie_id' => 51,
                'rating' => 8.0,
                'created_at' => '2022-07-05 15:47:25',
                'updated_at' => '2022-07-05 15:47:25',
            ),
            84 => 
            array (
                'id' => 1585,
                'user_id' => 160,
                'movie_id' => 51,
                'rating' => 7.0,
                'created_at' => '2022-07-05 15:47:25',
                'updated_at' => '2022-07-05 15:47:25',
            ),
            85 => 
            array (
                'id' => 1586,
                'user_id' => 162,
                'movie_id' => 51,
                'rating' => 6.5,
                'created_at' => '2022-07-05 15:47:25',
                'updated_at' => '2022-07-05 15:47:25',
            ),
            86 => 
            array (
                'id' => 1587,
                'user_id' => 204,
                'movie_id' => 51,
                'rating' => 9.5,
                'created_at' => '2022-07-05 15:47:25',
                'updated_at' => '2022-07-05 15:47:25',
            ),
            87 => 
            array (
                'id' => 1588,
                'user_id' => 64,
                'movie_id' => 51,
                'rating' => 9.0,
                'created_at' => '2022-07-05 15:47:25',
                'updated_at' => '2022-07-05 15:47:25',
            ),
            88 => 
            array (
                'id' => 1589,
                'user_id' => 65,
                'movie_id' => 51,
                'rating' => 8.5,
                'created_at' => '2022-07-05 15:47:25',
                'updated_at' => '2022-07-05 15:47:25',
            ),
            89 => 
            array (
                'id' => 1590,
                'user_id' => 191,
                'movie_id' => 51,
                'rating' => 6.0,
                'created_at' => '2022-07-05 15:47:25',
                'updated_at' => '2022-07-05 15:47:25',
            ),
        ));
        
        
    }
}