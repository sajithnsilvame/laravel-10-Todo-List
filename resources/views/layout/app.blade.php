<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  @include('lib.styles')
</head>
<body>
  @include('components.navbar')
  @yield('content')

  @include('lib.script')
</body>
</html>