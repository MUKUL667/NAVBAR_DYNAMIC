<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add </title>
</head>
<body>
 
    @if(Session::has('post-subupdate'))
    <span>{{Session::get('post-subupdate')}}</span>
    @endif
    <form method="post" action="{{url('subupdate/')}}">
        @csrf
        <input type="hidden" name="id" value="{{$menu->subid}}">
    submenu: <br><input type="text" name="name" value="{{$menu->subname}}"><br>
        status:<br><input type="text" name="status" value="{{$menu->substatus}}"><br>
        url:<br><input type="text" name="link" value="{{$menu->sublink}}"><br>
        <label for="category" >select the category:</label>
        <select required name="menu_id" >
            @foreach($menus as $menu)
            <option value="{{$menu->id}}">
                {{$menu->name}}
               </option>
           @endforeach
          </select> 
        <input type="submit" value="submit">
    </form>
</body>
</html>


