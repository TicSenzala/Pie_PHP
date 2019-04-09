<?php
namespace Core;
class Request
{
    public function request()
    {
        $newPost = [];
        if(isset($_POST)) {
            foreach($_POST as $key => $value) {
                array_push($newPost, htmlspecialchars(stripslashes(trim($value))
            ));
        }
        $_POST = $newPost;
    }
    elseif(isset($_GET)) {
        foreach($_GET as $key => $value) {
            array_push($newPost, htmlspecialchars(stripslashes(trim($value))));
        }
        $_GET = $newPost;
    }
    return $newPost;
}
}
