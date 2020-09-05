<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();

        return response()->json([
            'msg' => 'success',
            'notes' => $notes
        ], 200);
    }

    public function getNotesByUser($user_id)
    {
        $notes = Note::where('user_id', $user_id)->get();

        return response()->json([
            'msg' => 'success',
            'notes' => $notes
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = Note::create($request->all());

        return response()->json([
            'msg' => 'succcess',
            'note' => $note,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        // dd($request->all());
        $note->update($request->all());

        return response()->json([
            'msg' => 'success',
            'note' => $note
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return response()->json([
            'msg' => 'success'
        ], 200);
    }
}
