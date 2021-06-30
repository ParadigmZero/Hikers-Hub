<html>
    <body>

        <h1>
            Create hike
        </h1>

        <form action="{{ route('hikes.store') }}" method="POST">
            @csrf

            Title: <input type="text" name="title"> <br>
            @error('title')

                <h3>Title was bad!</h3>
                @foreach($errors->get('title') as $error)
                    <p>
                        {{ $error }}
                    </p>
                @endforeach
            @enderror

            Desc: <input type="text" name="description"> <br>

            @error('description')
                <h3>desc was bad!</h3>
            @enderror

            <button>Create</button>

        </form>

    </body>
</html>
