<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create()
    {
      return view('crud_task.create');
    }

    public function store(Request $request)
    {
      //dd($request->all());

      //Validation
      $request->validate([
        'judul' => 'bail|required|unique:questions|max:255',
        'isi' => 'required'
      ]);

      //insert databases
      $query = DB::table('questions')->insert([
        "judul" => $request["judul"],
        "isi" => $request["isi"]
      ]);
      return redirect('/pertanyaan')->with('success', 'Question has been created!');
    }

    public function index()
    {
      $posts = DB::table('questions')->get();
      //dd($posts);
      return view('crud_task.index', compact('posts'));
    }

    public function show($pertanyaan_id) {
      $detail = DB::table('questions')->where('id', $pertanyaan_id)->first();
      //dd($post);
      return view('crud_task.show', compact('detail'));
    }

    public function edit($pertanyaan_id) {
      $edited = DB::table('questions')->where('id', $pertanyaan_id)->first();
      return view('crud_task.edit', compact('edited'));
    }

    public function update($pertanyaan_id, Request $request) {
      $request->validate([
        'judul' => 'bail|required|unique:questions|max:255',
        'isi' => 'required'
      ]);

      $updated = DB::table('questions')
                      ->where('id', $pertanyaan_id)
                      ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi']
                      ]);
      return redirect('/pertanyaan')->with('success', 'Update success!');
    }

    public function destroy($pertanyaan_id) {
      $deleted = DB::table('questions')->where('id', $pertanyaan_id)->delete();
      return redirect('/pertanyaan')->with('success', 'Question has been deleted!');
    }
}
