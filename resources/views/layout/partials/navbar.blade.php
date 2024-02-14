{{-- Styles --}}

<style>
    .nav_ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333333;
    }
    
    .nav_li {
      float: left;
    }
    
    .nav_li_a{
      display: block;
      color: white;
      text-align: center;
      padding: 16px;
      text-decoration: none;
    }
    
    .nav_li_a:hover {
      background-color: #111111;
    }
</style>

{{-- NavBar --}}

<nav>
    <ul class="nav_ul">
        <li class="nav_li"><a href="{{route('home')}}" class="nav_li_a">Home</a></li>
        <li class="nav_li"><a href="{{route('cursos.index')}}" class="nav_li_a">Cursos</a></li>
        <li class="nav_li"><a href="{{route('cursos.create')}}" class="nav_li_a">Crear Cursos</a></li>
    </ul>
</nav>