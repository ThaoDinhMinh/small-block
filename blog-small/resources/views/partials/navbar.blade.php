<nav class="navbar navbar-expand-lg bg-light p-relative">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/news/create">Post</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Quản lý
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/quanly/post">Bài Post</a></li>
                            <li><a class="dropdown-item" href="/quanly/category/manager">Category</a></li>
                        </ul>
                    </li>
                @else
                    <li></li>
                @endif
            </ul>
            <div class="login d-flex align-center">
                @if (Auth::check())
                    <p class="btn btn-sm">{{ Auth::user()->email }}</p>
                    <p class="">
                        <a class="btn btn-sm" href="/logout">Đăng xuất</a>
                    </p>
            </div>
        @else
            <p class="btn btn-login">Đăng nhập</p>
        </div>
        @endif

        <div class="from-login p-3">
            <div class="icone text-end">
                <button class=" btn btn-lg">X</button>
            </div>
            <form action="{{ route('login-user') }}" method="POST">
                @csrf
                <label for="emailid" class="form-label  mt-3">Nhập email</label>
                <input name="email" value="kienminh.tnut@gmail.com" type="email" class="form-control" id="emailid"
                    aria-describedby="emailHelp">
                <label for="passwordid" class="form-label  mt-3">Nhập password</label>
                <input name="password" value="password" type="password" class="form-control" id="passwordid"
                    aria-describedby="passwordHelp">
                <input class="btn btn-lg btn-primary mt-3" name="submit" type="submit" value="Đăng nhập">
            </form>
        </div>
    </div>
    </div>
</nav>
