<?php
namespace App\Http\Controllers\Admin;
use App\Models\Posts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminPostController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - Posts";
$viewData["posts"] = Posts::all();
return view('admin.post.index')->with("viewData", $viewData);
}

 public function display(Request $request)
{
$request->validate([
"title" => "required|max:255",
"description" => "required",
"date" => "required",
'image' => 'image',
]);
$newPost = new Posts();
$newPost->setTitle($request->input('title'));
$newPost->setDate($request->input('date'));
$newPost->setDescription($request->input('description'));
$newPost->setImage("game.png");
$newPost->save();

if ($request->hasFile('image')) {
    $imageName = $newPost->getId().".".$request->file('image')->extension();
    Storage::disk('public')->put(
    $imageName,
    file_get_contents($request->file('image')->getRealPath())
    );
    $newPost->setImage($imageName);
    $newPost->save();
    }
    

return back();
}
 

public function delete($id)
{
Posts::destroy($id);
return back();
}


public function edit($id)
{
$viewData = [];
$viewData["title"] = "Admin Page - Edit Post";
$viewData["posts"] = Posts::findOrFail($id);
return view('admin.post.edit')->with("viewData", $viewData);
}
public function update(Request $request, $id)
{
$request->validate([
"title" => "required|max:255",
"description" => "required",
"date" => "required",
'image' => 'image',
]);
$posts = Posts::findOrFail($id);
$posts->setTitle($request->input('title'));
$posts->setDescription($request->input('description'));
$posts->setDate($request->input('date'));
if ($request->hasFile('image')) {
$imageName = $posts->getId().".".$request->file('image')->extension();
Storage::disk('public')->put(
$imageName,
file_get_contents($request->file('image')->getRealPath())
);
$posts->setImage($imageName);
}
$posts->save();
return redirect()->route('admin.post.index');
}
}



