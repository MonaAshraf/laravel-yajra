<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(function() {
      function readURL(input) {
             if (input.files && input.files[0]) {
                 var reader = new FileReader();

                 reader.onload = function (e) {
                     $('.preview-img').attr('src', e.target.result);
                 }

                 reader.readAsDataURL(input.files[0]);
             }
         }

         $("#UploadedFile").change(function(){
             readURL(this);
         });

      });

    </script>
	  <link rel="stylesheet" href="{{asset('css/createusercss.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
</head>
<body>
    <div class="container">
       <div class="Back">
            <a href="{{route('owner.dashboard')}}"><i class="fa fa-arrow-left" onclick="Back()"></i></a>
        </div>

        <p class="h2 text-center">{{$title ?? ''}}</p>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>
@endif
{{  Form::open( array('url' => action('Owner\HomeController@update',$owner->id), 'files'=>true,'method'=>'post','enctype'=>'multipart/form-data','id'=>'$owner->id') )  }}
  @csrf

  <div class="preview text-center">
    @if ($owner->image ?? '')
    <img class="preview-img" src="/{{$owner->image}}" alt="{{$owner->image}}" value="{{$owner->image}}" width="200" height="200"/>
    @else
    <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" i width="200" height="200"/>
    @endif
               <!-- <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" i width="200" height="200"/> -->
               <div class="browse-button">
                   <i class="fa fa-pencil-alt"></i>
                   <input class="browse-input" type="file" name="image" id="UploadedFile" accept="image/*" />

               </div>
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <label>Full Name:</label>
               <input class="form-control" type="text" name="name" required value="{{$owner->name ?? ''}}" placeholder="Enter Your Full Name"/>
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <label>Email:</label>
               <input class="form-control" type="email" name="email" value="{{$owner->email ?? ''}}"required placeholder="Enter Your Email"/>
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <label>Password:</label>
               <input class="form-control" type="password" name="password"value="{{$owner->password ?? ''}}" required placeholder="Enter Password"/>
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <label>Gender:</label><br/>
               <label><input type="radio" name="gender" required value="Male" checked /> Male</label>
               <label><input type="radio" name="gender" required value="Female" /> Female</label>
               <label><input type="radio" name="gender" required value="Other" /> Other</label>
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <input class="btn btn-primary btn-block" type="submit" value="Edit" name="add"/>
           </div>
<!-- </form> -->

{{ Form::close() }}
</div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
