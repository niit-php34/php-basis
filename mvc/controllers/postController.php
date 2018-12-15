<?php
require './models/postsModel.php';
class postController
{
    var $postsModel;
    function __construct()
    {
    }

    // <domain>/post
    function index()
    {
        $postsModel = new postsModel();
        //lay du lieu tra ve tu post model
        $data=$postsModel->getAll();
        require_once('views/post/index.php');
    }

    // <domain>/post/add
    function add()
    {
        $postsModel= new postsModel();
        if (isset($_POST['title'])) {
            $postsModel->insert($_POST['title'], $_POST['content']);
        }
        require_once('views/post/add.php');
    }

    // <domain>/post/edit
    function edit()
    {
        require_once('views/post/edit.php');
    }
}
