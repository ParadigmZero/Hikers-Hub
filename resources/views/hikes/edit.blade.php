<html>
    <h1>
        Edit Hike
    </h1>
    <body>

        @if ($hike)

        {{-- Form action should always be POST due to browser issues later define method as PUT --}}
        <form action="{{ route('hikes.update', $hike->id) }}" method="POST">
            @method('PUT')
            @csrf



            <table >
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>{{ $hike->id }}</td>
                    </tr>
                    <tr>
                        <td>title</td>
                        <td><input type="text" name="title" value={{ $hike->title }}></td>
                    </tr>
                    <tr>
                        <td>description</td>
                        <td><input type="text" name="description" value={{ $hike->description }}>
                            </td>
                    </tr>
                </tbody>
            </table>




            <button>Update</button>
        </form>



        @else
        Hike does not exist
         @endif

        <br/>
        <br/>
        <br/>
        {{-- <a href="/hikes">ToDo - Update</a><br/> --}}

        {{-- The following doesn't work --}}




        <form action="{{ route('hikes.destroy', $hike->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>

<br/>
        <a href="{{ route('hikes.index') }}">Back</a>

    <script>



        axios.post('/???', {
            title: 'my new hike',

        }, function () {

        }).then(function () {
            //
        })

    </script>
    </body>
</html>
