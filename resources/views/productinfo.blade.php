@extends('siteheader.header')
@section('in')
<style>
.hover-to-show
{
    visibility:hidden;
    opacity:0;
    transition:opacity 0.5s linear;
}

.hover-to-show-link:hover .hover-to-show
{
    display:block;
    visibility:visible;
    opacity:1;
}
{
    table-layout:fixed;
    width:100%;
}

</style>
<script>
$(document).ready(function(){
  $("p").toggle(1000);
  $("#toggle1").click(function(){
$("p").toggle(1000);

  });
});
///////////////////////
$(document).ready(function(){
  $("p2").toggle(1500);
  $("#toggle2").click(function(){
$("p2").toggle(1000);

  });
});
//////////////////////////////////
$(document).ready(function(){
  $("p3").toggle(2000);
  $("#toggle3").click(function(){
$("p3").toggle(1000);

  });
});
</script>
<br><br><br>
<br>
<br>
<br><br><br><br><br><br><br>

<div class="col-md-12">
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style=" height: 100%;width: 100%; margin: auto;
    width: 50%;
">

                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                     @foreach( $pics as $photo )
                         <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                     @endforeach
                 </ol>

                 <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                     @foreach( $pics as $photo )
                         <div class="item {{ $loop->first ? ' active' : '' }}" >
                             <img src="\storage\product_pic\{{$photo->product_id}}\{{$photo->pic}}" style=" display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;">
                         </div>
                     @endforeach
                 </div>

                 <!-- Controls -->
                 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                 </a>
             </div>
             <br><br>
             @foreach($products as $obj)
              <div class="card bg-light text-dark">
             <div class="span4">
               <div class="block">

             <h2><strong>{{$obj->Name}}</strong></h2>

             <hr style="    border-top: 1px solid #ccc;
             ">

             <table class="table table-dark">
               <thead>

                 <tr style="background-color:green;font-family:Lucida Grande;">
                   <th >Variety</th>
                   <th >Size and Specification</th>
                   <th >Trademark</th>
                   <th >Packing</th>
                   <th >Weight Of Carton</th>
                   <th >Bags or Carton</th>
                   <th >Full Quantity</th>
                   <th >Category</th>
                 </tr>
               </thead>

                 <tbody >

                 <tr style="background-color:#C6C6C4;color:black;font-family:Lucida Grande;">
                   <td>{{$obj->Variety}}</td>
                   <td>{{$obj->SizeandSpecifications}}</td>
                   <td>{{$obj->Trademark}}</td>
                   <td>{{$obj->Packing}}</td>
                   <td>{{$obj->WeightofCarton}}</td>
                   <td>{{$obj->BagsorCarton}}</td>
                   <td>{{$obj->Fullquantity}}</td>
                   <td>  {{ \App\Category::where(['id' => $obj->category])->pluck('name')->first() }}</td>


                       </tr>
                       <br>
             </tbody>


             </table>
             </div>
             </div><br>
             <br>
             </div>
             <br>
             @endforeach

           </div>








<br>

 <style>

.btn {
   background-color: DodgerBlue;
   border: none;
   color: white;
   padding: 12px 30px;
   cursor: pointer;
   font-size: 40px;
   size:40px;
}

/* Darker background on mouse-over */
.btn:hover {
   background-color: RoyalBlue;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script
 src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
 crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">
   $(function(){
     // Option set as a global variable
     $('#loopedSlider').loopedSlider({
       container: ".wrap",
       containerClick: false
     });
   });
 </script>

   @endsection
