<h1>
        All hikes
    </h1>
    <br/>
    <br/>
    <p>
        @for ($i = 0; $i < sizeof($hikes); $i++)
        <a href="/hikes/{{$hikes[$i]['id']}}">

        <table >
            <tbody>
                <tr>
                    <td>id</td>
                    <td>{{$hikes[$i]['id']}}</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>{{$hikes[$i]['title']}}</td>
                </tr>
                <tr>
                    <td>description</td>
                    <td>{{$hikes[$i]['description']}}</td>
                </tr>
            </tbody>
        </table>
        <br/>
    </a>
    <button onclick="myFunction()">Delete</button>
        <br/>
        <br/>
        <br/>
        @endfor
    </p>



