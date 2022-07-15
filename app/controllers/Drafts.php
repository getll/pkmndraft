<?php
class Drafts extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Drafts/index');
    }
}
