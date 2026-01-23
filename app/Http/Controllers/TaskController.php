<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request, TaskList $taskList)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $taskList->tasks()->create([
            'title' => $request->title,
            'completed' => false,
        ]);

        return redirect()->back();
    }
}
