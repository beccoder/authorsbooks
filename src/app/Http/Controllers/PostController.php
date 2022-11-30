<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function home() {
        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }

    public function admin() {
        $posts = Post::all();
        return view('admin', ['posts' => $posts]);
    }
    
    public function createform() {
        return view('createform');
    }

    public function create(Request $request) {
        if ($request->has('author') and $request->has('book')) {
            $post = new Post;
            $post->author = $request->input('author');
            $post->book = $request->input('book');
            $post->save();
        }
        return redirect('/admin');
    }
    
    public function delete($id) {
        Post::destroy($id);
        return redirect('/admin');
    }

    public function upd() {
        $post = new Post;
        $post->author = 'SAMPLE';
        $post->book = 'SAMPLE';
        $post->save();
        $data = Post::all();
        return response()->json($data, 200);
    }

    public function del() {
        $id = Post::orderBy('id', 'DESC')->first()->delete();
        $data = Post::all();
        return response()->json($data, 200);
    }

    public function updateform($id) {
        return view('updateform', ['id' => $id]);
    }

    public function update(Request $request, $id) {
        if ($request->has('author') and $request->has('book')) {
            $post = Post::find($id);
            $post->author = $request->input('author');
            $post->book = $request->input('book');
            $post->save();
        }
        return redirect('/admin');
    }

    public function countbooks() {
        $posts = Post::select('author')->get();
        $size = sizeof($posts);
        $set = array();
        for ($i = 0; $i < $size; $i++) {
            if (!(in_array($posts[$i], $set))) {
                array_push($set, $posts[$i]);
            }
        }
        $size = sizeof($set);
        $arr = array();

        for ($j = 0; $j < $size; $j++) {
            $count=0;
            foreach($posts as $current)
                if ($set[$j]==$current) $count++;
            $arr[$j] = $count;
        }
        return view('countbooks', ['authors' => $set, 'num' => $arr]);
    }
    public function showbooks() {
        $posts = Post::select('author')->get();
        $size = sizeof($posts);
        $set = array();
        for ($i = 0; $i < $size; $i++) {
            if (!(in_array($posts[$i], $set))) {
                array_push($set, $posts[$i]);
            }
        }

        $size = sizeof($set);
        $arr = array();

        $posts1 = Post::all();
        for ($j = 0; $j < $size; $j++) {
            $c = array();
            $cnt = 0;
            foreach($posts1 as $current) {
                if ($set[$j]->author==$current->author) {
                    $c[$cnt] = $current->book;
                    $cnt++;
                }
            }
            $arr[$j] = $c;
        }

        return view('showbooks', ['authors' => $set, 'books' => $arr]);
    }
}
