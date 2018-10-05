@extends('admin.master.template')
@section('headerButton')
          <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item active">
                    <a href="#" class="nav-link">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="products" class="nav-link">Products List</a>
                    </li>
            </ul>
@endsection
@section('content')
<div class="main-panel">
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

 @if(count($errors) > 0 )
    <div class="alert alert-danger">
        <strong>Whoooppss !!</strong> There were some problem with your input. <br>
        <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
 @endif
 {!! Form::open(['id' => 'dataForm', 'url' => '/products', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="content-wrapper">
    <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Product</h4>
                      <p class="card-description">
                        Add a Product
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          {!!Form::label('productcode', 'Product Code', array('class' => 'form-control-label'))!!}
                          {!!Form::text('productcode',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('productname', 'Product Name', array('class' => 'form-control-label'))!!}
                          {!!Form::text('productname',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('productdescription', 'Product Description', array('class' => 'form-control-label'))!!}
                          {!!Form::text('productdescription',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('productdetails', 'Product Details', array('class' => 'form-control-label'))!!}
                          {!!Form::text('productdetails',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('value', 'Value', array('class' => 'form-control-label'))!!}
                          {!!Form::text('value',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                        <div class="form-group">
                          {!!Form::label('serving', 'Serving', array('class' => 'form-control-label'))!!}
                          {!!Form::text('serving',null, ['placeholder' => '', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                        </div>
                          <div class="form-group">
                          {!!Form::label('photo', 'Photo', array('class' => 'form-control-label'))!!}
                              <div class="row">
                                <input id="file-upload" name="digitalphoto" class="digitalphoto" type="file" accept="image/x-png,image/gif,image/jpeg">
                              </div>
                              <div class="row">
                                <img class="pre_img" src="https://yourprogramming.com/library/images/no_img.jpg">
                                <p class="image_view"></p><img src="">
                              </div>
                        </div>
                        {!!Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-success mr-2']) !!}
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

<style>
input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 14px 12px;
    cursor: pointer;
    width:94%;
    font-size: 18px;
    text-align: center;
}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(function () {
	//logo image preview 
	function filePreview(input){
		if(input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function(e){
				$('.pre_img').hide();
				$('.image_view').after('<img src="'+e.target.result+'" />');
				$('.digitalphotos img').css('max-width','100%');
				$("#remove_photo").show(200);
				$(".custom-file-upload").slideUp(0);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$('.digitalphoto').change(function(){
		filePreview(this);	
		$('.upload_photo').show();
	});

	//remove logo img 
	$("#remove_photo").click(function(){
		$('.digitalphotos img').hide();
		$('.pre_img').show();
		$('.digitalphoto').val('');
		$("#remove_photo").slideUp(300);
		$('.upload_photo').slideUp();
		$('.custom-file-upload').slideDown(0);
	});
	
	$(".upload_photo").click(function(){
		var new_img = $('.new_img').attr('src');
		$('.pre_img_main').attr('src',new_img);
		var mainPhto = $('.digitalphoto').val();
		alert(mainPhto);
	});
	//check is one of the check-box chosen or not
	$('.checkbox-inline').click(function(){
		$('.sub').prop('required',false);
	});


})
</script>
@endsection()

