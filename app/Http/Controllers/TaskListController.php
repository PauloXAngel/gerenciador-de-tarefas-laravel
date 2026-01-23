<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    /**
     * Exibe as listas do usuário autenticado
     */
    public function index()
    {
        $lists = auth()->user()->taskLists;

        return view('task-lists.index', compact('lists'));
    }

    /**
     * Cria uma nova lista
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        TaskList::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('task-lists.index');
    }
}
