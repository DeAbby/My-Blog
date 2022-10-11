<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public static function index()
    {
    $viewData = [];
    $viewData["title"] = "Posts - My Blog";
    //$viewData["posts"] = HomeController::$posts;
    $viewData["posts"] = Posts::all();
    return view('home.index')->with("viewData", $viewData);
    }
public function about()
{
$viewData = [];
$viewData["title"] = "About us - My Blog";
$viewData["subtitle"] = "About us";
$viewData["description"] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet voluptatum illo provident blanditiis ipsa facere impedit ea repellendus quod suscipit nesciunt, aliquam, sint corporis natus eveniet vero? Blanditiis, aspernatur autem.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, similique. Tempore dicta vitae numquam natus corrupti quidem veniam, esse nam harum quasi a consequuntur, quae accusamus mollitia omnis voluptate nemo.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, nemo repudiandae ut ab dolorem laborum, eaque aut repellendus sequi nam magnam. Reiciendis minus magnam qui magni nemo voluptatibus quos laudantium.
";
$viewData["author"] = "Developed by: Abby";
return view('home.about')->with("viewData", $viewData);
}


public function gallery()
{
$viewData = [];
$viewData["title"] = "My Blog";
return view('home.gallery')->with("viewData", $viewData);
}

}
