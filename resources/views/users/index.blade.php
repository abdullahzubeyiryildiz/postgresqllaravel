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
        <div class="card-header">
            User Create  <a href="{{route('users.create')}}" class="btn btn-primary">Create</a>
        </div>
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @if ($data)
                    @foreach ($data as $key => $item)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td class="d-flex">
                            <a href="{{route('users.edit',$item->id)}}" class="btn btn-info mr-2">Edit</a>
                            <form action="{{route('users.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Destroy</button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                @endif
            </tbody>
          </table>
    </section>

  </body>
</html>
