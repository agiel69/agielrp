<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    public function create(): View 
    { 
        return view('admin.posts.create'); 
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'image'   => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $image = $request->file('image');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img'), $imageName);

        Post::create([
            'image'   => $imageName,
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'image'   => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

            $oldImagePath = public_path('assets/img/' . $post->image);
            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }

            $post->update([
                'image'   => $imageName,
                'title'   => $request->title,
                'content' => $request->content,
            ]);
        } else {
            $post->update([
                'title'   => $request->title,
                'content' => $request->content,
            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        $oldImagePath = public_path('assets/img/' . $post->image);
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }

        $post->delete();

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    // ✅ Fungsi about yang disesuaikan
    public function about(): View
    {
        $motor = Post::whereRaw('LOWER(title) = ?', ['motor'])->first();

        // Untuk debugging jika null
        if (!$motor) {
            abort(404, 'Konten dengan judul "motor" tidak ditemukan.');
        }

        return view('front-end.motor', compact('motor'));
    }
}
