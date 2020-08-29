<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>User profile card info - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
            <div class="container">
              <div class="Back">
                   <a href="{{route('owner.dashboard')}}"><b>Back</b><i class="fa fa-arrow-left" onclick="Back()"></i></a>
               </div>
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >Owner Profile</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        @if ($owner->image ?? '')
                        <img alt="User Pic" src="/{{$owner->image}}" id="profile-image1" class="img-circle img-responsive" width="600" height="600">
                        @else
                        <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive" width="600" height="600">
                        @endif


                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2>{{$owner->name}}</h2>
                            <p>an   <b> Employee</b></p>


                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>{{$owner->name}}</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$owner->email}}</p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " >Date Of Joining: {{$owner->created_at}}</div>

                      </div>
                </div>
            </div>
            </div>

<script type="text/javascript">

</script>
</body>
</html>
