$('#search').on('keyup',function(){

$value=$(this).val();

$.ajax({

type : 'get',

url : '/search',

data:{'search':$value},

success:function(data){

$('tbody').html(data);

}

});



})
$('#searchproductcat').on('keyup',function(){
/*
  var marchi = {};

      $('.marchio:checked').each(function () {
          marchi[$(this).attr('id')] = $(this).val();
      });
*/

$value=$(this).val();

$.ajax({

type : 'get',

url : '/searchproductcat',

data: {'searchproductcat': $value},
success:function(data){


$('article').html(data);

}

});



})

$('#searchproduct').on('keyup',function(){

$value=$(this).val();

$.ajax({

type : 'get',

url : '/searchproduct',

data:{'searchproduct':$value},

success:function(data){

$('section2').html(data);

}

});



})

$('#searchproduct2').on('keyup',function(){

$value=$(this).val();

$.ajax({

type : 'get',

url : '/searchproduct',

data:{'searchproduct':$value},

success:function(data){

$('section2').html(data);

}

});



})


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
