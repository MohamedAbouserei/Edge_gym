@extends('siteheader.header')

@section('in')

<br><br><br><br><br><br><br><br><br><br>
<input type="text" class="form-controller" id="searchproduct" name="searchproduct" placeholder="Search"></input>





<article>
  @foreach($product as $obj)
   <div class="card bg-light text-dark">
  <div class="span4">
    <div class="block">

<a href="<?php echo URL::to('/')?>/productinfo/{{$obj->id}}">
  <h2><strong>{{$obj->Name}}</strong></h2>
<hr style="    border-top: 1px solid #ccc;
">
</a>
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



  </article>

@endsection
