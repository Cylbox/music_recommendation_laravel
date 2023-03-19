<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SongResource;
use App\Models\Song;
use App\Models\UserSong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $song = Song::query()->with('users')
            ->when($request->filled('likes'), function ($q) use ($request) {
            return $q->whereHas('users', function ($query) {
                $query->where('user_id', Auth::user()->id);
            });

        })->get()->all();

        return SongResource::collection($song);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new SongResource(Song::query()->with('users')->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['likes' , 'plays']);
        $likedState = $request->get('isLiked');
        $song = Song::query()->findOrFail($id);

        if ($likedState === 'true' && $song->likes < $data['likes']) {
            UserSong::query()->create([
                'user_id' => Auth::user()->id,
                'song_id' => $id,
            ]);
        } else if ($likedState === 'false' && $song->likes >= $data['likes']) {
            UserSong::query()->where('song_id', $id)->delete();
        }
        $song->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
