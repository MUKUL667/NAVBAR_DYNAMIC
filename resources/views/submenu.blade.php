<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css">

    
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                @foreach ($menus as $menu)
                <a class="nav-link active" aria-current="page" href="{{url($menu->link)}}">{{$menu->name}}</a>
                {{-- @if (count($menu->SUBMENU) > 0) --}}
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{-- {{$menu->name}} --}}
                  {{-- </a> --}}
                  {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown2"> --}}
                    {{-- @foreach ($menu->SUBMENU as $sub)
                    <a class="dropdown-item" href="{{$sub->link}}">{{$sub->name}}</a>
                    @endforeach --}}
                  {{-- </div> --}}
                <li> 
              
               {{-- @else --}}
                {{-- <a class="nav-link active" aria-current="page" href="{{url($menu->link)}}">{{$menu->name}}</a> --}}
              </li>
              {{-- @endif --}}
                
              @endforeach
       
     
              {{-- <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  @foreach ($submenu as $sub)
                  <a class="dropdown-item" href="#">{{$sub->name}}</a>
                  @endforeach
              </li> --}}
            
              
          {!! $menus->links() !!}  
             
            </ul>
          </div>
        </div>
        <a href="{{url('submenuadd/')}}" class="btn btn-primary delete">ADD</a>
      </nav>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js,  
      https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<script type="text/javascript">
    (window.jQuery)||document.write('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"><\/script>');//]]>
</script>

   <script>
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
      </script>
      <table class="table table-hover">
        <thead>
          
 <tr>
            <th scope="col">SNO.</th>
            <th scope="col">NAME</th>
            <th scope="col">STATUS</th>
            <th scope="col">ACTION</th>
      
          </tr>
        </thead>
        <tbody>
          {{-- @foreach ($menus as $menu) --}}
          <tr>
            @foreach ($menus as $menu)
            <th scope="row">{{$menu->id}}</th>
            <td>{{$menu->name}}</td>
            <td>{{$menu->status}}</td>
            
            <td>
              <a href="{{url('subdelete/'.$menu->id)}}" class="btn btn-danger ml-auto">Delete</a>
              <a href="{{url('subedit/'.$menu->id)}}" class="btn btn-primary ml-auto ">Edit</a>
            </td>
         
           
          </tr>
          @endforeach
     
          
        </tbody>
  
      </table>
      {{-- @endforeach  --}}
       {{-- <div class="d-flex flex-row-reverse ">
        
        <a href="{{url('delete/'.$menu->id)}}" class="btn btn-danger mx-1">Delete</a>
        
                 <a href="{{url('edit/'.$menu->id)}}" class="btn btn-primary mx-2 ">Edit</a>
       </div> --}}
</body>
</html>