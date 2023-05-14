<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tube;


// class TestController extends Controller
// {
//     public function form()
// {
//         return view("test");
//     }
//     public function veiwData(Request $res)
//     {   
//         $res->validate([
//             "txt"=>"required",
//             "email"=>"required",
//             "pswd"=>"required",
//         ]);
//     //    echo<"pre">;
//        print_r($res->all());
//     }
// }
class TestController extends Controller
{
    public function showLoginForm()
    {
        return view('test');
    }

    public function submitLoginForm()
    {
    //    print_r($request->all());
    //    return view('bitches');
       return redirect('/viewdata');

    }
    public function showSignupForm()
    {
        $url=url('form');
        $title="Register User";
        // $data =compact('url', 'title');

        return view('test', compact('url','title'));
    }

    public function submitSignupForm(Request $request)
    {
       
        // print_r($request->all());
        // retufrn view('bitches');
        $Tubes= new Tube;
        $Tubes->email =$request['email'];
        $Tubes->password =$request['password'];
        $Tubes->confirmPassword =$request['confirmPassword'];
        $Tubes->address =$request['address'];
        $Tubes->bio =$request['bio'];
        $Tubes->save();
        return redirect('test');
    }
    public function viewthedata()
    {
        $test= Tube::all();
        // echo "<pre>";
        // print_r($test);
        // die;
        // $data=compact('test');
        return view("/viewdata", compact('test')->with($data));
    }
    public function annihilate($id)
    {
        // $test=Tube::find($id);
        // if(!is_null($test))
        // {$test->delete($id);}
        Tube::destroy($id);
        // we use destroy funciton here are use a delete method on the route
        // echo("<pre>");
        // print_r();
        // return redirect()->back();
        return back()->with('success', 'Message Deleted');  
    }
    // public function annotate($id)
    // {
    //     $test=Tube::find($id);
    //     if (is_null($test)) 
    //     {
    //         return redirect("/viewdata");
    //     }
    //     else 
    //     {
    //         // return redirect()->route("update.user" ,$id);
    //         // return Redirect::to('user/show/' . $id);
    //         // return Redirect::route('profile', array($id));
    //         // return $this->update($id);
    //         $test=Tube::find($id);
    //         $title="Update the Form";
    //         $url=url('update')  . '/' . $id;
    //         $data=compact('test','url','title');
    //         return view('test')->with($data);
    //         // using the test variable which is created above the if statement in the above code =
    //         //redirecting to the page where we have form in the above code

    //     }
    // }
    // // public function update($id)
    // // {
    // //     $test=Tube::find($id);
    // //     $title="Update the Form";
    // //     $url=url('update')  . '/' . $id;
    // //     $data=compact('test','url','title');
    // //     // using the test variable which is created above the if statement in the above code =
    // //     return view('test')->with($data);
    // //     //redirecting to the page where we have form in the above code
    // // }
}