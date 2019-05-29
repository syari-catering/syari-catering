<html>
    <head>
        <title>Syari Catering - Admin</title>

        {{-- Bootstrap CSS Link --}}
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        {{-- Font Awesome (Icon) Link --}}
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">


    </head>
    <body>
        <a href="{{route('admin.packet.create')}}" class="btn btn-primary">Add Post</a>
        <table class="table table-hover table-bordered">
            <tr>
                <th>ID</th>
                <th>Packet Name</th>
                <th colspan="2">Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td style="text-align: center;">
                    <a href="{{route('admin.packet.edit',$packets)}}">
                        <button class="btn btn-success" style="width: 70px;">Edit</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('admin.packet.destroy',$packets)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>