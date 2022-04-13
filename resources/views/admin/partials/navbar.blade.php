<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link" href="/">首頁</a></li>
    @auth
        <li @if (Request::is('admin/post*')) class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/admin/post">文章</a>
        </li>
        <li @if (Request::is('admin/tag*')) class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/admin/tag">標簽</a>
        </li>
        <li @if (Request::is('admin/upload*')) class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/admin/upload">上傳</a>
        </li>
    @endauth
</ul>

<ul class="navbar-nav ml-auto">
    @guest
        <li class="nav-item"><a class="nav-link" href="/login">登入</a></li>
    @else
        <div class="nav-item dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/logout">登出</a></li>
            </ul>
        </div>
    @endguest
</ul>