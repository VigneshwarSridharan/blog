<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>upload</title>
  </head>
  <body>

    {{ Form::open(array('url' => 'foo/bar','files'=>true)) }}
    
    {{ Form::close() }}

  </body>
</html>
