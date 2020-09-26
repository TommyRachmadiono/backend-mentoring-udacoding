<?php

use Illuminate\Database\Seeder;

class YoutubeVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtube_videos')->insert([
            'video_id' => 'TcMBFSGVi1c',
            'title' => 'Avengers Endgame',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
        ]);
        DB::table('youtube_videos')->insert([
            'video_id' => 'u_diRgwPCS8',
            'title' => 'Now You See Me',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
        ]);
        DB::table('youtube_videos')->insert([
            'video_id' => 'AwwbhhjQ9Xk',
            'title' => 'Maze Runner',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
        ]);
        DB::table('youtube_videos')->insert([
            'video_id' => 'n9DwoQ7HWvI',
            'title' => 'Spiderman Homecoming',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
        ]);
        DB::table('youtube_videos')->insert([
            'video_id' => 'AntcyqJ6brc',
            'title' => 'Transformers: The Last Knight',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
        ]);

        DB::table('user_like_videos')->insert([
            'user_id' => 1,
            'youtube_video_id' => 1,
        ]);
        DB::table('user_like_videos')->insert([
            'user_id' => 1,
            'youtube_video_id' => 2,
        ]);
        DB::table('user_like_videos')->insert([
            'user_id' => 2,
            'youtube_video_id' => 1,
        ]);
        DB::table('user_like_videos')->insert([
            'user_id' => 2,
            'youtube_video_id' => 2,
        ]);



    }
}
