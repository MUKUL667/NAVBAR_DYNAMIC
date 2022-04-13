<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add </title>
</head>
<body>
 
    @if(Session::has('post-update'))
    <span>{{Session::get('post-update')}}</span>
    @endif
    <form method="post" action="{{url('update/')}}">
        @csrf
        <input type="hidden" name="id" value="{{$menu->id}}">
     menu: <br><input type="text" name="name" value="{{$menu->name}}"><br>
        status:<br><input type="text" name="status" value="{{$menu->status}}"><br>
        url:<br><input type="text" name="link" value="{{$menu->link}}"><br>
        
        <input type="submit" value="submit">
    </form>
</body>
</html>



