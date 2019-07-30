@extends('header')
@section('content')
<br><br><br><br><br><br><br><br>

<style>
    table {
        table-layout: fixed;
        width: 100%;
    }

    button {
        vertical-align: bottom;
    }

</style>

<!-- services options -->



<section class="col-md-12" style="float:right;position:block;">

    <section2>

        @foreach($products as $obj)

        <div class="item showService col-md-4" style="height:50vh">
            <a href="<?php echo URL::to('/')?>/productinfo/{{$obj->id}}" style=" position:relative;">

                <div class="thumbnail item-box" style="border:none;" style="height:auto;
        max-width:100%;
        border:none;
        display:block;">
                    <div class="overlayContainer">

                        <img src="/storage/product_pic/{{$obj->id}}/{{ \App\Productpics::where(['product_id' => $obj->id])->pluck('pic')->first()}}"
                            alt="no current image " width="100%" height="236" style="height:auto;
        max-width:100%;
        border:none;
        display:block;">



                    </div>
                    <div class="caption">
                        <p style="line-height: 26pt;color:black;font-size: 35px;font-family:Lucida Grande;">
                            {{$obj->Name}}
                        </p>
                    </div>
                </div>
                <div>


                    <br><br><br>

                </div>

        </div>


        @endforeach
    </section2>

</section>



@endsection
