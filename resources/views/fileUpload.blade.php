<!DOCTYPE html>
<html>

<head>
    <title>file upload example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>file upload</h2>
            </div>
            <div class="panel-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="file" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button><br />
                        </div>

                    </div>
                </form>

                <br /><br />
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>view</th>
                    </tr>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data['id'] }}</td>
                            <td>{{ $data['name'] }}</td>
                            <td><a href="{{ asset('uploads/' . $data['name'] . '') }}">Open the pdf!</a></td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</body>

</html>
