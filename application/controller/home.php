<?php
// home 컨트롤러를 호출하면 index로 유도하게 될 것임..
class Home extends Controller
{
    public function index()
    {
        require 'application/views/home/index.php';
    }

    public function test($hi)
    {
        echo "<h1>test!</h1>" . $hi;
    }
}
