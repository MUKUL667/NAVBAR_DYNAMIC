<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add </title>
</head>

<body>
   
    @if(Session::has('post-subadd'))
    <span>{{Session::get('post-subadd')}}</span>
    @endif
    <form method="post" action="{{url('submenuadd/')}}">
        @csrf
     SUBMENU: <input type="text" name="name" value=""><br>
       STATUS:<input type="text" name="status" value=""><br>
       URL:<input type="text" name="link" value=""><br>
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