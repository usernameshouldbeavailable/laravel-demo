<html>
<head>
    <title>Check Email</title>
</head>
<body>
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('post-check-email') }}" method="post">
    {{ csrf_field() }}
    <h5>Email</h5>
        <input type="text" name="email" value="" size="50" /><input type="submit" value="Submit" />

    </form>

</body>
</html>