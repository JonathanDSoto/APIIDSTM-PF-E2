<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Home Example</title>
</head>
<body>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    <h1>Home Example</h1>
    {{ Auth::user()->name }}
</body>
</html>
