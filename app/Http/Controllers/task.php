<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class task extends Controller
{
    public function Home()
    {
        $tasks = \App\task::all();

        $laters = [];
        $awaits = [];
        $success = [];
        $faileds = [];


        for ($i = 0; $i < sizeof($tasks); $i++) {
            if (($tasks[$i])->state == "False") {
                array_push($laters, $tasks[$i]);
            }
            if (($tasks[$i])->state == "True") {
                array_push($awaits, $tasks[$i]);
            }
        }

        return view('Home')->with('laters', $laters)->with('awaits', $awaits);
    }
    public function delete($id)
    {
        \App\task::where('id', $id)->delete();
        return "<script>window.location.assign('/')</script>";
    }

    public function later($id)
    {
        \App\task::where('id', $id)->update(['state' => 'later']);
        return "<script>window.location.assign('/')</script>";
    }
    public function await($id)
    {
        \App\task::where('id', $id)->update(['state' => 'await']);
        return "<script>window.location.assign('/')</script>";
    }
    public function add()
    {
        return view('add');
    }
    public function edit($id)
    {
        $task = \App\task::where('id', $id)->first();
        return view('edit')->with('id', $id)->with('title', $task->title);
    }
    public function pushNewTask(Request $request)
    {
        $request->validate([
            "title" => "required",
            "state" => "required",
        ]);
        $title = $request->input('title');
        $state = $request->input('state');
        $task = new \App\task;
        $task->title = $title;
        $task->state = $state;
        $task->save();
        return "<script>window.location.assign('/')</script>";
    }
    public function update(Request $request)
    {
        $request->validate([
            "title" => "required",
            "state" => "required",
        ]);
        $title = $request->input('title');
        $state = $request->input('state');
        $id = $request->input('id');
        \App\task::where('id', $id)->update(['state' => $state, 'title' => $title]);
        return "<script>window.location.assign('/')</script>";
    }
}
