<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item"><a class="nav-link" href="{{route('users.userlist')}}">用户列表</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h5" href="#" id="navbarDropdown"   onclick="myFunction()" role="button">
                {{ Auth::user()->name }}
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown">
                        <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
                            <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">编辑资料</a>
                            <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                </form>
                            </a>
                    </div>
                </li>

            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a>
                <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a>
            @endif
        </ul>
    </div>
</nav>
<script>
    function myFunction() {
        document.getElementById("dropdown").classList.toggle("show");
    }
    // 点击下拉菜单意外区域隐藏
    window.onclick = function(event) {
        if (!event.target.matches('.h5')) {

            var dropdowns = document.getElementsByClassName("dropdown-menu");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
