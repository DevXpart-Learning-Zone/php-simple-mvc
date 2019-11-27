<?php
class PostsController
{

    function  __construct()
    {
        // echo 'Hello from posts';
    }

    public function index()
    {
        echo 'Post Index';
    }

    public function create()
    {
        echo 'Create a post';
    }


    public function show($id)
    { }


    public function edit($id)
    { }

    public function delete($id)
    { }
}