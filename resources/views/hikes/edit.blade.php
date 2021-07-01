<html>
    <h1>
        Edit Hike
    </h1>
    <body>

        @if ($hike)
            <table >
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>{{ $hike->id }}</td>
                    </tr>
                    <tr>
                        <td>title</td>
                        <td><input type="text" value={{ $hike->title }}></td>
                    </tr>
                    <tr>
                        <td>description</td>
                        <td><input type="text" value={{ $hike->description }}>
                            </td>
                    </tr>
                </tbody>
            </table>
        @else
        Hike does not exist
         @endif

        <br/>
        <br/>
        <br/>
        <a href="/hikes">ToDo - Update</a><br/>
        <a href="/hikes">ToDo - Delete</a><br/>
        <a href="/hikes">Back</a>

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
