<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $this->authorize('test-gate');

        echo 'Hello World!';
    }

    public function create() {
        $this->authorize('test-gate');

    }
}
