<?php

namespace App\Http\Controllers;

use App\UserLikeVideo;
use App\YoutubeVideo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class YoutubeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $videos = YoutubeVideo::all();
        $likedVideos = YoutubeVideo::join('user_like_videos', 'user_like_videos.youtube_video_id', '=', 'youtube_videos.id')
            ->where('user_like_videos.user_id', $user_id)
            ->get();

        return response()->json([
            'msg' => 'success',
            'videos' => $videos,
            'liked_videos' => $likedVideos,
        ], 200);
    }

    public function getLikedVideos($user_id)
    {
        $videos = YoutubeVideo::join('user_like_videos', 'user_like_videos.youtube_video_id', '=', 'youtube_videos.id')
            ->where('user_like_videos.user_id', $user_id)
            ->get();

        return response()->json([
            'msg' => 'success',
            'videos' => $videos
        ], 200);
    }

    public function likeVideo(Request $request)
    {
        $video_id = $request->video_id;
        $user_id = $request->user_id;

        $likedVideo = UserLikeVideo::where('user_id', $user_id)
            ->where('video_id', $video_id)
            ->first();

        if ($likedVideo) {
            $likedVideo->delete();
        } else {
            UserLikeVideo::create([
                'user_id' => $user_id,
                'youtube_video_id' => $video_id
            ]);
        }

        return response()->json([
            'msg' => 'ok',
        ], 200);
    }
}
