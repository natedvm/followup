<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Case follow up</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('layouts.allcases')}}">View Cases</a></li>
            <li><a href="{{route('layouts.addcase')}}">Add Case</a></li>
            <li><a href="{{route('layouts.editcase',1)}}">Edit Case</a></li>
        </ul>
    </div>
</nav>
{{--TODO change active class in NavBar to reflect page when we go to Add Case and back--}}