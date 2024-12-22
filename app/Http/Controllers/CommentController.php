<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Fungsi untuk menangani input komentar
    public function submitComment(Request $request)
    {
        // Mengambil input dari pengguna
        $userInput = $request->input('comment'); 

        // Menyimpan komentar ke session dan mengarahkan kembali ke halaman yang sama
        return redirect()->route('comment.form')->with('userInput', $userInput);
    }

    // Menampilkan formulir komentar
    public function showForm()
    {
        return view('comment');
    }
}
