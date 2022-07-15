<?php
class Replays extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Replays/index');
    }
}
