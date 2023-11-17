<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>Test</title>
</head>
<body>
  @if ($errors->any())
      <div class='alert alert-danger'>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action='{{ route("customers.store") }}' method='POST'>
    @csrf
    @method('POST')
    <input name='name' value='{{ old("name") }}'>
    <input name='phone' value='{{ old("phone") }}'>
    <input name='emergency_phone' value='{{ old("emergency_phone") }}'>
    <input name='email' value='{{ old("email") }}'>
    <input name='blood_group_id' value='{{ old("blood_group_id") }}'>
    <input name='is_active' value='{{ old("is_active") }}'>
    <button>Store</button>
  </form>
</body>
</html>
