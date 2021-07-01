{{-- Show ( GET standard ) is no longer used. Now we only use GET EDIT --}}

<html>
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
                        <td><input type="text" name="title" value={{ $hike->title }}></td>
                    </tr>
                    <tr>
                        <td>description</td>
                        <td><input type="text" name="description" value={{ $hike->description }}>
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


// Sample of how an Axios could look
        // axios.post('/???', {
        //     title: 'my new hike',

        // }, function () {

        // }).then(function () {
        //     //
        // })

    </script>
    </body>
</html>
