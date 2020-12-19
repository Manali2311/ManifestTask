@extends('layouts.app')

@section('content')
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
<form action="/add" method="POST" enctype="multipart/form-data">
@csrf
<br/>
<input type="text" placeholder="Name" name="name" class="form-control" /><br/>
<input type="text" placeholder="Address" name="address" class="form-control"  /><br/>
<input type="text" placeholder="PhoneNo" name="phoneno" class="form-control" /><br/>
<input  type="file" name="file" accept="image/*"/><br/><br/>
<button type="submit" class="btn btn-outline-danger">Danger</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
