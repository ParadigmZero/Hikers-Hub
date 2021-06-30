
<html>
    <head>
        <script>
            function myFunction()
            {
            console.log("test");
            }
            </script>
    </head>
<h1>
        All hikes
    </h1>

    <a href="{{ route('hikes.create') }}">
        Click to create a new hike
    </a>

    <br/>
    <br/>
    <p>


        @foreach ($hikes as $hike)


            <a href="{{ $hike->getUrl() }}">

                <table >
                    <tbody>
                        <tr>
                            <td>id</td>
                            <td>{{ $hike->id }}</td>
                        </tr>
                        <tr>
                            <td>title</td>
                            <td>{{ $hike->title }}</td>
                        </tr>
                        <tr>
                            <td>description</td>
                            <td>{{ $hike->description }}</td>
                        </tr>
                    </tbody>
                </table>
                <br/>
            </a>

            {{-- <form action="{{ route('hikes.destroy', $hike->id) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <button>Delete</button>
            </form> --}}

            {{-- shorter version --}}
            <form action="{{ route('hikes.destroy', $hike->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button>Delete</button>
            </form>

            <br/>
            <br/>
            <br/>
        @endforeach
    </p>

</html>

