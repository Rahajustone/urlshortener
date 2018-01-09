<!DOCTYPE html>
<html lang="en">

<head>
    <title>URL Shortener</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Comfortaa&subset=latin,cyrillic"> 
</head>

<body style="background-color: #eee">
    <div class="container">
        @if(Session::has('errors'))
            <h3 class="alert alert-danger">{{ $errors->first('link')}}</h3>
        @endif
        <div class="text-center center-block" style="margin-top: 200px;">
            <form action="{{ url('/') }}" class="form" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-10 col-md-offset-1">
                    <h1 class="">Uber-Shortener</h1>
                        <div class="input-group  input-group-lg">
                          <input type="text" class="form-control" placeholder="Insert your url here and press enter!" name="links">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Go!</button>
                          </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>