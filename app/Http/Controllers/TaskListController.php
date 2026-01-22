<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    public function index()
    {
        $lists = auth()->user()->taskLists;

        return view('dashboard', compact('lists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        TaskList::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('dashboard');
    }
}
