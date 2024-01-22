<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $bookmarkedPosts = Bookmark::with('post.user')
            ->where('user_id', $user->id)
            ->get();

        if ($bookmarkedPosts->isEmpty()) {
            return view('bookmark', [
                'message' => 'active',
                'user' => $user

            ]);
        }

        return view('bookmark', [
            'bookmarks' => $bookmarkedPosts,
            'user' => $user

        ]);
    }

    public function addBookmark(Post $post)
    {

        $user = Auth::user();
        if ($post) {

            $cekBookmark = Bookmark::where('user_id', $user->id)
                ->where('post_id', $post->id)
                ->first();

            if ($cekBookmark) {

                $cekBookmark->delete();
                return redirect()->back()->with([
                    'message' => 'Berhasil menghapus bookmark'
                ]);
            } else {

                $bookmark = Bookmark::create([
                    'user_id' => $user->id,
                    'post_id' => $post->id,
                ]);

                return redirect()->back()->with([
                    'message' => 'Berhasil membookmark'
                ]);
            }
        } else {
            return redirect()->route('home')->with([
                'message' => 'Postingan sudah dihapus'
            ]);
        }
    }
}
