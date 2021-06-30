<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="content">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laravel PHP Ajax Country State City Dropdown List - Tutsmake.COM</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">
<h2 class="text-success">Laravel categories Subcategories Dependent Dropdown List with Ajax</h2>
</div>
<div class="card-body">
<form>

<div class="form-group">
<label for="country">Categories</label>


<select class="form-control" name="categories" id="categories-dropdown">
<option value="">Select Categories</option>
@foreach ($categories as $categories) 
<option value="{{$categories->id}}">
{{$categories->title}}
</option>
@endforeach
</select>

</div>


<div class="form-group">
<label for="subcategories">Sub Categories</label>
<select class="form-control" name="subcategories"  id="subcategories-dropdown">
</select>
</div>   




</form>
</div>
</div>
</div>
</div>
</div>


<script>
$(document).ready(function() {
$('#categories-dropdown').on('change', function() {
var cat_id = this.value;
$("#subcategories-dropdown").html('');
$.ajax({
url:"{{url('subcategories')}}",
type: "POST",
data: {
cat_id: cat_id,
_token: '{{csrf_token()}}' 
},
dataType : 'json',
success: function(result){
$('#subcategories-dropdown').html('<option value="">Select State</option>'); 
$.each(result.subcategories,function(key,value){
$("#subcategories-dropdown").append('<option value="'+value.id+'">'+value.title+'</option>');
});

}
});
});   

});
</script>
</body>
</html>