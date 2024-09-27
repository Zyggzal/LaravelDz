<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Task;

class HomeController extends Controller
{
    public function Read(Request $request) {
        // $id = $request->input('id');  //параметр get-запросa
        // $data = [
        //     "1" => "Some task (1)",
        //     "2" => "Some task (2)",
        //     "3" => "Some task (3)",
        //     "4" => "Some task (4)",
        //     "5" => "Some task (5)",
        // ];
        // $header = [
        //     "Content-Type" => 'text/html;'
        // ];
        // $status = 200;
        // $content = $data[$id];
        // return new Response($content, $status, $header);
        $tasks = Task::all();

        return view('Home.Read', compact('tasks'));
    }

    public function Create() {
        return view('Home.Create');
    }

    public function Update($id) {
        $task = Task::find($id);
        return view('Home.Update', compact('task'));
    }

    public function Delete($id) {
        $task = Task::find($id);
        return view('Home.Delete', compact('task'));
    }

    public function Update_Func(Request $request) {
        $task = Task::find($request->input('id'));
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        return redirect()->route("Home.Read")->with('success', 'Task updated successfully');
    }

    public function Delete_Func(Request $request) {
        $task = Task::find($request->input('id'))->delete();

        return redirect()->route("Home.Read")->with('success', 'Task deleted successfully');
    }

    public function Assistant_Create(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:1024',
        ]);
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        return redirect()->route("Home.Read")->with('success', 'Task created successfully');
    }
}
