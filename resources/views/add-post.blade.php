<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add </title>
</head>

<body>
   
    @if(Session::has('post-add'))
    <span>{{Session::get('post-add')}}</span>
    @endif
    <form method="post" action="{{url('add/')}}">
        @csrf
     menu: <input type="text" name="name" value=""><br>
        status:<input type="text" name="status" value=""><br>
        url:<input type="text" name="link" value=""><br>
         category:<input type="text" name="category" value=""><br>
        {{-- sub_category:<input type="text" name="sub_category" value=""><br> --}} --}}
        {{-- <label for="category" >select the category:</label> --}}
        {{-- <select required name="menu_item_id" >
            @foreach($men_us as $menu)
            <option value="{{$menu->id}}">
                {{$menu->category}}
               </option>
           @endforeach
          </select>  --}}
        <input type="submit" value="submit">
    </form>
 
</body>

</html>