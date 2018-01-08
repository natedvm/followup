<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('layouts.allcases')}}">Case follow up</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=" @if( Request::path() == '/' ) active @endif ">
                <a href="{{route('layouts.allcases')}}">View Cases</a></li>
            <li class=" @if( Request::path() == 'addcase' ) active @endif ">
                <a href="{{route('layouts.addcase')}}">Add Case</a></li>
            <li class=" @if( strstr(Request::path(),'editcase') ) active @endif ">
                <a>Edit Case</a>
            </li>
        </ul>
    </div>
</nav>
