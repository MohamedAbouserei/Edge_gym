<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Product;
use App\Productpics;
use Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use File;
use Illuminate\Filesystem\Filesystem;
class admin extends Controller
{   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  public function __construct()
  {
      $this->middleware('auth');

/*  if ($this->user->type==0) {
        abort(404);
    }*/
  }
  public function addcategory(Request $request)
  {   $Category=new Category();
  $user=DB::select('select * from users where type = ?', [0]);

if($request->isMethod('POST'))
{
       $this->validate($request,[
          'name' =>'required|max:50|min:5|string'
      ]);
      $Category->addcategory($request->input('name'),$request->input('user'));
      return redirect('/categories')->with('success','Database updated');
}
else{
      return view('addcategory',compact('user'));
  }
}

  public function showcategory()
  {
      $category=Category::all();
      return view('Categories',compact('category','user'));
  }

  public function deletecategory($id)
  {
      $Category=new Category();
      $Category->deletecategory($id);
      return redirect('categories')->with(['message'=>'Category Deleted Successfully']);

  }

  public function updatecategory(Request $request,$id)
  {
   $category=Category::findOrFail($id);

   $user=DB::select('select * from users where type = ?', [0]);

   if($request->isMethod('POST'))
   {
        $this->validate($request,[
           'name' =>'required|max:50|min:5=1|string'
       ]);
       $category->updatecategory($category,$request->input('name'),$request->input('user'));
       return redirect('/categories')->with('success','Database updated');
   }
   else{
       return view('updatecategory',compact('category','user'));
   }
  }


     public function addproduct(Request $request)
  {   $Product=new Product();

if($request->isMethod('POST'))
{
       $this->validate($request,[
          'variety' =>'required|min:1|string',
          'sizeandspecification'=>'required|string|min:1',
          'trademark'=>'required|string|min:1',
          'packing'=>'required|string|min:1',
          'weightofcarton'=>'required|string|min:1',
'category'=>'max:99|string|min:1',
          'name'=>'required|max:255|string|min:1',
          'fullquantity'=>'required|string|min:1',
      ]);
$category=Category::findOrFail($request->input('category'));
$category->Numberofproducts+=1;
      $Product->addproduct($request->input('variety'),$request->input('sizeandspecification'),$request->input('trademark'),
  $request->input('packing'),$request->input('weightofcarton'),$request->input('bagsorcarton'),$request->input('name'),
     $request->input('fullquantity'),$request->input('category'));
$category->save();
      return redirect('/products')->with('success','Database updated');
}
else{
  $category=Category::all();
      return view('addproduct',compact('category'));
  }}

  public function updateproduct(Request $request,$id)
  {   $Product=Product::findOrFail($id);
      $user=new User();
  if($request->isMethod('POST'))
   {
       $this->validate($request,[
          'variety' =>'required|max:50|min:1|string',
          'sizeandspecification'=>'required|max:50|string|min:1',
          'trademark'=>'required|max:50|string|min:1',
          'packing'=>'required|max:50|string|min:1',
          'weightofcarton'=>'required|max:50|string|min:1',
          'bagsorcarton'=>'required|max:50|string|min:1',
          'name'=>'required|max:50|string|min:1',
          'fullquantity'=>'required|max:50|string|min:1',
          'category'=>'max:99|string|min:1'
      ]);
      $Product->updateproduct($Product,$request->input('variety'),$request->input('sizeandspecification'),$request->input('trademark'),
  $request->input('packing'),$request->input('weightofcarton'),$request->input('bagsorcarton'),$request->input('name'),
     $request->input('fullquantity'),$request->input('category'));
       return redirect('/products')->with('success','Database updated');
}
else{
  $category=Category::all();
      return view('updateproduct',compact('Product','category'));
  }}

   public function deleteproduct($id)
  {
$Product=Product::findOrFail($id);
$Category=Category::findOrFail($Product->category);

     File::deleteDirectory(storage_path('app/public/'.$Product->id));

if($Category->Numberofproducts>=1)
$Category->Numberofproducts-=1;
      $Product->deleteproduct($id);
      $Category->save();
      return redirect('products')->with(['message'=>'Product Deleted Successfully']);

  }

    public function showproduct()
  {
      $product=Product::all();
      return view('products',compact('product'));
  }
  public function addproductimg(Request $request)
{

  $products=Product::all();
  $productimg=new Productpics();

  if($request->isMethod('POST'))
   {
     try {
       $request->validate(['image'=>'required|file|image|max:20000']);
       $path=Storage::disk('public')->putFileAs($request->input('product_id').'/product_pic',
               $request->file('image'),$request->input('product_id').'_'.$request->file('image')->getClientOriginalName());
       $productimg->addpics($request->input('product_id'),$request->input('product_id').'_'.$request->file('image')->getClientOriginalName());
        return redirect('products')->with(['message'=>'Product Picture Added Successfully']);
     } catch(\Illuminate\Database\QueryException $ex){
       dd( "name exists");
     }

      }


    return view('productpics',compact('products'));
}
public function productimg(Request $request)
{
  $productimg=Productpics::all();
  return view('viewpics',compact('productimg'));


}
public function deletepic($id)
{
  $productimg=new Productpics();
  $productimg=Productpics::findOrFail($id);
        unlink('storage\\'.$productimg->product_id.'\product_pic\\'.$productimg->pic);
        $productimg->delete();

  return redirect('images')->with(['message'=>'News Deleted Successfully']);



}



public function addnews(Request $request)
{
$news=new News();
 if($request->isMethod('POST'))
 {
       $this->validate($request,[
          'news' =>'required|string'
          ,'duration' =>'required|date'
      ]);
$news->addnews($request->input('news'),$request->input('duration'));
       return redirect('/news')->with('success','Database updated');
}
else{
      return view('addnews');
  }
}

public function updatenews(Request $request,$id)
{
$news=News::findOrFail($id);
 if($request->isMethod('POST'))
 {
       $this->validate($request,[
          'news' =>'required|string'
          ,'duration' =>'required|date'
      ]);
      $news->updatenews($news,$request->input('news'),$request->input('duration'));
      return redirect('/news')->with('success','Database updated');
}
else{
      return view('updatenews',compact('news'));
  }

}

 public function deletenews($id)
  {
      $news=new News();
      $news->deletenews($id);
      return redirect('news')->with(['message'=>'News Deleted Successfully']);

  }

  public function shownews()
  {
      $news=News::all();
      return view('news',compact('news'));
  }

  public function addrecipes(Request $request)
  {
$recipes=new Recipes();
 if($request->isMethod('POST'))
 {
       $this->validate($request,[
          'name' =>'required|string'
          ,'ingredient' =>'required|string'
          ,'directions' =>'required|string'
          ,'image'=>'required|file|image|max:20000'
      ]);
       if ($request->hasFile('image'))
       {
      $path=Storage::disk('public')->putFileAs('/Recipes',
        $request->file('image'),$request->input('name').'_'.$request->file('image')->getClientOriginalName());
       }
$recipes->addrecipe($request->input('name'),$request->input('ingredient'),$request->input('directions')
,$request->input('name').'_'.$request->file('image')->getClientOriginalName());
       return redirect('/recipes')->with('success','Database updated');
}
else{
      return view('addrecipes');
  }
  }

    public function updaterecipes(Request $request,$id)
  {
$recipes=Recipes::findOrFail($id);
 if($request->isMethod('POST'))
 {
       $this->validate($request,[
          'name' =>'required|string'
          ,'ingredient' =>'required|string'
          ,'directions' =>'required|string'
      ]);
      if ($request->hasFile('image'))
      {
       if(strcmp($request->file('image')->getClientOriginalName(),$recipes->pic)!=0)
        {
         Storage::delete('public/Recipes/'.$recipes->pic);
          $path=Storage::disk('public')->putFileAs('/Recipes',
              $request->file('image'),$request->input('name').'_'.$request->file('image')->getClientOriginalName());
}
      }
$recipes->updaterecipe($recipes,$request->input('name'),$request->input('ingredient'),$request->input('directions')
,$request->input('name').'_'.$request->file('image')->getClientOriginalName());
       return redirect('/recipes')->with('success','Database updated');
}
else{
      return view('updaterecipes',compact('recipes'));
  }
  }

  public function deleterecipes($id)
  {
      $recipes=new Recipes();
      $recipes->deleterecipe($id);
      return redirect('recipes')->with(['message'=>'News Deleted Successfully']);

  }


  public function showrecipes()
  {
      $recipes=Recipes::all();
      return view('recipes',compact('recipes'));
  }


  public function addnutrationfact(Request $request)
  {
      $nutrationfact=new Nutritionfact();
      if($request->isMethod('POST'))
      {
       $this->validate($request,[
          'paragraph' =>'required|string',
          'name'=>'required|string'
          ,'url' =>'required|string'
          , 'image'=>'required|file|mimes:jpg,jpeg,png|max:20000'
          ,'pdffile'=>'required|file|mimes:abw,arc,azw,bz,bz2,css,csv,doc,docx,html,ics,js,json,odp,ods,odt,pdf,ppt,pptx,rar,swf,tar,ts,vsd,xhtml,xls,xlsx,xml,zip,7z,abc,acgi,aip,asm,asp,c,c++,cc,cpp,def,etx,for,g,h,hh,htc,idc,jav,java,list,m,mar,pl,py,rt,sdml,text,txt|max:20000'
      ]);

        $pathfile=Storage::disk('public')->putFileAs('nutrationfact_pdf\\',
            $request->file('pdffile'),$request->file('pdffile')->getClientOriginalName());
            $pathfile=Storage::disk('public')->putFileAs('nutrationfact\\',
                $request->file('image'),$request->file('image')->getClientOriginalName());
                ///////////////////////////////////
        $nutrationfact->addnutritionfact($request->input('name'),$request->input('paragraph'),
    $request->file('image')->getClientOriginalName(),$request->input('url'),$request->file('pdffile')->getClientOriginalName());
        return redirect('/nutritionfact')->with('success','Database updated');
}
else{
    $product=Product::all();
      return view('addnutritionfact',compact('product'));
  }
  }


  public function shownutritionfact()
  {
      $nutrationfact=Nutritionfact::all();
      return view('nutritionfact',compact('nutrationfact'));
  }

  public function deletenutritionfact($id)
  {
    $nutritionfact=new Nutritionfact();
$nutritionfact=Nutritionfact::findOrFail($id);
File::delete(public_path('storage\nutrationfact\\'.$nutritionfact->image));
File::delete(public_path('storage\nutrationfact_pdf\\'.$nutritionfact->pdffile));
    $nutritionfact->deletenutritionfact($id);
return redirect('nutritionfact')->with(['message'=>'Nutritionfact Deleted Successfully']);
  }
  public function deletenutritionfact2($id)
  {

$nutritionfact=Nutritionfact::findOrFail($id);
File::delete(public_path('storage\nutrationfact\\'.$nutritionfact->image));
File::delete(public_path('storage\nutrationfact_pdf\\'.$nutritionfact->pdffile));
$nutritionfact->deletenutritionfact($id);
return 1;

  }
   public function updatenutritionfact(Request $request,$id)
    {
      $nutritionfact=Nutritionfact::findOrFail($id);

       if($request->isMethod('POST'))
       {
         $this->validate($request,[
           'name'=>'required|string',
            'paragraph' =>'required|string'
            , 'image'=>'required|file|mimes:jpg,jpeg,png|max:20000'
            ,'url' =>'required|string'
            ,'pdffile'=>'required|file|mimes:abw,arc,azw,bz,bz2,css,csv,doc,docx,html,ics,js,json,odp,ods,odt,pdf,ppt,pptx,rar,swf,tar,ts,vsd,xhtml,xls,xlsx,xml,zip,7z,abc,acgi,aip,asm,asp,c,c++,cc,cpp,def,etx,for,g,h,hh,htc,idc,jav,java,list,m,mar,pl,py,rt,sdml,text,txt|max:20000'
        ]);
if($this->deletenutritionfact2($id))
{
  $pathfile=Storage::disk('public')->putFileAs('nutrationfact_pdf\\',
      $request->file('pdffile'),$request->file('pdffile')->getClientOriginalName());
      $pathfile=Storage::disk('public')->putFileAs('nutrationfact\\',
          $request->file('image'),$request->file('image')->getClientOriginalName());
          ///////////////////////////////////
  $nutritionfact->addnutritionfact($request->input('name'),$request->input('paragraph'),
$request->file('image')->getClientOriginalName(),$request->input('url'),$request->file('pdffile')->getClientOriginalName());
  return redirect('/nutritionfact')->with('success','Database updated');
}
}
else
{
  $product=Product::all();

            return view('updatenutritionfact',compact('nutritionfact','product'));
}
}
}
