<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SongResource;
use App\Models\Song;
use App\Models\Songable;
use App\Models\UserSong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $song = Song::query();

        if ($request->filled('likes')) {
            $song = $song->whereHas('users', function ($query) {
                $query->where('songable_id', Auth::user()->id);
            })->orderBy('likes', 'desc')->get()->all();
        } elseif ($request->filled('authors')) {
            $song = $song->whereHas('authors', function ($query) {
                $query->whereIn('name', Auth::user()->favourite_authors);
            })->whereDoesntHave('users')->orderBy('likes', 'desc')->get()->all();
        } elseif ($request->filled('genres')) {
            $song = $song->whereHas('genres', function ($query) {
                $query->whereIn('name', Auth::user()->favourite_genres);
            })->whereDoesntHave('users')->orderBy('likes', 'desc')->get()->all();
        } elseif (empty($request->query()) && isset(Auth::user()->id)){
            $song = $song->whereDoesntHave('users')
                ->whereHas('authors', function ($query) {
                    $query->whereIn('name', Auth::user()->favourite_authors);
                })
                ->orderBy('likes', 'desc')->get()
                ->merge(Song::query()->whereDoesntHave('users')
                    ->whereHas('genres', function ($query) {
                        $query->whereIn('name', Auth::user()->favourite_genres);
                    })
                    ->orderBy('likes', 'desc')->get())
                ->merge(Song::query()->whereDoesntHave('users')->orderBy('likes', 'desc')->get())
                ->merge(Song::query()->whereHas('users')->orderBy('likes', 'desc')->get());
        } else $song = $song->orderBy('likes', 'desc')->get()->all();

        return SongResource::collection($song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return SongResource
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
            Songable::query()->create([
                'song_id' => $id,
                'songable_id' => Auth::user()->id,
                'songable_type' => 'App\Models\User',
            ]);
            Auth::user()->authors()->syncWithoutDetaching($song->authors()->pluck('id'));
            Auth::user()->genres()->syncWithoutDetaching($song->genres()->pluck('id'));
        } else if ($likedState === 'false' && $song->likes >= $data['likes']) {
            Songable::query()->where('songable_type', 'App\Models\User')
                ->where('song_id', $id)->delete();
//            Auth::user()->authors()->detach($song->authors()->pluck('id'));
//            Auth::user()->genres()->detach($song->genres()->pluck('id'));
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
