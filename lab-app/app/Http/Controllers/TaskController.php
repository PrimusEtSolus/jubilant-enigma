<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $record = $request->all();
        $task = new Task;
        $task->title = $record['title'];
        $task->description = $record['description'] ?? '';
        $task->is_completed = isset($record['is_completed']) ? 1 : 0;
        $task->save();
        return redirect('/tasks')->with('success', 'Task created successfully');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $record = $request->all();
        $task = Task::find($id);
        $task->title = $record['title'];
        $task->description = $record['description'] ?? '';
        $task->is_completed = isset($record['is_completed']) ? 1 : 0;
        $task->save();
        return redirect('/tasks')->with('success', 'Task updated successfully');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks')->with('success', 'Task deleted successfully');
    }
}
