<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use Storage;
class CEO extends Controller
{
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   public function __construct()
   {
       $this->middleware('guest');
   }
   public function adduser(Request $request)
   {
       $user=new User();
        if($request->isMethod('POST'))
    {
        $this->validate($request,[

           'name'=>'required|max:50|string|min:5',
           'email' =>'required|email',

           'password'=>'required|max:15|alpha_num|min:5',
           'type'=>'required|boolean',

       ]);
{
       if(is_file($request->file('image'))){
 $request->validate(['image'=>'required|file|image|max:20000']);
       $path=Storage::disk('public')->putFileAs($request->input('email').'/profile_pic',
               $request->file('image'),$request->file('image')->getClientOriginalName());

               $user->adduser($request->input('name'),$request->input('email'),$request->input('landline'),

              $request->input('phonenumber'),$request->input('DOB'),$request->input('salary'),
              $request->input('workhours'),$request->input('password'),$request->input('socialnumber'),$request->input('type'),$request->file('image')->getClientOriginalName());
               return redirect('/adduser')->with('success','Database updated');
       }
       else{
         $user->adduser($request->input('name'),$request->input('email'),$request->input('landline'),

         $request->input('phonenumber'),$request->input('DOB'),$request->input('salary'),
         $request->input('workhours'),$request->input('password'),$request->input('socialnumber'),$request->input('type'),null);
         return redirect('/adduser')->with('success','Database updated');

       }
}
   }
   elseif($request->isMethod('GET')){
   return view('adduser');
 }
 }

   public function showuser()
   {
       $users=User::all();
       return view('users',compact('users'));
   }


        public function deleteuser($id)
   {
       $user=new User();
       $user->deleteuser($id);
       return redirect('users')->with(['message'=>'User Deleted Successfully']);

   }

   public function updateuser(Request $request,$id)
{
    $useer=User::findOrFail($id);

     if($request->isMethod('POST'))
 {
     $this->validate($request,[

        'landline'=>'required|max:25|string|min:1',
        'phonenumber'=>'required|max:25|string|min:1',
        'salary'=>'required|max:1000000|Numeric|min:0',
        'workhours'=>'required|max:12|Integer|min:1',
        'type'=>'required|boolean',
    ]);
    $useer->updateuser($useer,$request->input('landline'),$request->input('phonenumber'),$request->input('salary'),
   $request->input('workhours'),$request->input('type'));
   return redirect('/users')->with('success','Database updated');
}
elseif($request->isMethod('GET'))
return view('updateuser',compact('useer'));
}
public function uploadImage(Request $request){

$request->validate(['image'=>'required|file|image|max:20000']);
$path=Storage::disk('public')->putFileAs(auth()->user()->id.'/profile_pic',$request->file('image'),$request->file('image')->getClientOriginalName());
if(Image::where('user_id',auth()->user()->id)->where('path',$path)->count())
return redirect('/getImages')->with(['warning'=>'Your Image Is Uploaded Before, Change the Name of The Image If You Want To Upload It Again']);
      else{
          $image= new Image;
          $image->path=$path;
          $image->user_id=auth()->user()->id;
          $image->save();
      }
      return redirect('/getImages')->with(['message'=>'You Uploaded '.$request->file('image')->getClientOriginalName().' Successfully']);

  }




}
