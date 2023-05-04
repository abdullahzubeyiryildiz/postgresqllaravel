<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Create</title>
  </head>
  <body>

    <section class="container">
        <div class="card">
            <div class="card-header">
                User Create  <a href="{{route('users.index')}}" class="btn btn-primary">Geri</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')<p class="text test-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')<p class="text test-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')<p class="text test-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </section>

  </body>
</html>
