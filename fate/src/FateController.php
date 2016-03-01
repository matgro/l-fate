<?php namespace Ydentidad\Fate;
use App\Http\Controllers\Controller;
 
class FateController extends Controller
{
 
    public function index()
    {
//        \App::make('command.fate.update');
        $list_commands = \App\Fate\Fate::commands();
        return view('fate::home',['comandos'=>$list_commands]);
        echo "H1";
    }
 
}