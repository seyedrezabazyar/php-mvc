<?php

namespace App\Controllers;

class TodoController
{
    public function list()
    {
        # db
        $data = [
            'tasks' => ['First Task', 'Secound Task', '7th Task', 'Test Task', 'Anoyther Task'],
            'title' => 'لیست تسک ها'
        ];

        view('todo.list', $data);
    }
}
