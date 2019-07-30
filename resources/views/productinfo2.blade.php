@extends('header')
@section('content')
<br><br><br><br><br><br>

<style>
li
{
  font-family:Lucida Grande;

}
a
{
  font-size: 20px;
}
.panel-heading {
    padding: 0
}
.panel-heading a {
    display: block;
    padding: 20px 10px;
}
.panel-heading a.collapsed {
    background: #fff
}
.panel-heading a {
    background: #f7f7f7;
    border-radius: 5px;
}
.panel-heading a:after {
    content: '-'
}
.panel-heading a.collapsed:after {
    content: '+'
}
.nav.nav-tabs li a,
.nav.nav-tabs li.active > a:hover,
.nav.nav-tabs li.active > a:active,
.nav.nav-tabs li.active > a:focus {
    border-bottom-width: 0px;
    outline: none;
}
.nav.nav-tabs li a {

}
.tab-pane {
    background: #fff;
    padding: 10px;
    border: 1px solid #ddd;
    margin-top: -1px;
}
p
{
  line-height: 26pt;color:black;font-size: 18px;font-family:Lucida Grande;white-space: pre-wrap;width:auto;
}



/* used for sidebar tab/collapse*/
@media (max-width: 991px) {
  .visible-tabs {
    display: none;
  }
}

@media (min-width: 992px) {
  .visible-tabs {
    display: block !important;
  }
}

@media (min-width: 992px) {
  .hidden-tabs {
    display: none !important;
  }
}
</style>



     <div class="col-md-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style=" margin: auto;">

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
         ">
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

</div>
            <div class="col-md-12" style="">
              <br><br><br><br><br><br>
@foreach($products as $obj)
              <h3>{{$obj->Name}} </h3>
<hr>
              <!--begin tabs going in wide content -->
               <ul class="nav nav-tabs content-tabs" id="maincontent" role="tablist">
                  <li><a href="#size" role="tab" data-toggle="tab">Size and Specification</a></li>
                    <li><a href="#Packing" role="tab" data-toggle="tab">Packing</a></li>
                    <li><a href="#Trademark"  role="tab" data-toggle="tab">Trademark</a></li>


                  </li>
               </ul><!--/.nav-tabs.content-tabs -->


               <div class="tab-content">




                  <div class="tab-pane fade" id="Trademark">
                     <p>{{$obj->Trademark}}</p>
                  </div><!--/.tab-pane -->
                  <div class="tab-pane fade" id="Packing">
                     <p>{{$obj->Packing}}</p>
                  </div><!--/.tab-pane -->



                  <div class="tab-pane fade" id="size">
                     <p>{{$obj->SizeandSpecifications}}</p>
                  </div><!--/.tab-pane -->




<br><br><br><br><br>
               </div><!--/.tab-content -->
@endforeach


<script>
$(document).ready(function() {

    // DEPENDENCY: https://github.com/flatlogic/bootstrap-tabcollapse


    // if the tabs are in a narrow column in a larger viewport
    $('.sidebar-tabs').tabCollapse({
        tabsClass: 'visible-tabs',
        accordionClass: 'hidden-tabs'
    });

    // if the tabs are in wide columns on larger viewports
    $('.content-tabs').tabCollapse();

    // initialize tab function
    $('.nav-tabs a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // slide to top of panel-group accordion
    $('.panel-group').on('shown.bs.collapse', function() {
        var panel = $(this).find('.in');
        $('html, body').animate({
            scrollTop: panel.offset().top + (-60)
        }, 500);
    });

});
</script>

@endsection
