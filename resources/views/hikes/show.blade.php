<html>
    <body>

        @if (!$hike->isEmpty())
        <table >
            <tbody>
                <tr>
                    <td>id</td>
                    <td>{{$hike[0]['id']}}</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>{{$hike[0]['title']}}</td>
                </tr>
                <tr>
                    <td>description</td>
                    <td>{{$hike[0]['description']}}</td>
                </tr>
            </tbody>
        </table>
        @else
        Hike does not exist
         @endif

        <br/>
        <br/>
        <br/>
        <a href="/hikes">Back</a>

    </body>
</html>
