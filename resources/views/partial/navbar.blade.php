<nav>
    <div class="logo">
        <h1>AHM |</h1>
        <p>BOOKONLINE</p>
    </div>
    <div id="menu-icon">
        <i class="ph ph-list"></i>
    </div>
    <ul id="menu-list" class="hiddenn">
        <li><a href="/">Beranda</a></li>
        <li><a href="/Book">Daftar Book</a></li>
        <li>
            <div class="search">
                <form action="/Book">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input type="text" name="search" placeholder="Search Book" value="{{ request('search') }}">
                    <button type="submit"><i class="ph ph-magnifying-glass"></i></button>
                </form>
            </div>
        </li>
        @auth        
        <li class="dropdown">
            <a href="#" id="user-menu">Welcome Back!, {{ auth()->user()->username }} <i class="ph ph-caret-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="/dashboard"><i class="ph ph-layout"></i> Dashboard</a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"><i class="ph ph-sign-out"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </li>
        @else
        <li>
            <a href="/login"><i class="ph ph-sign-in"></i> Login</a>
        </li>
        @endauth
    </ul>
</nav>
<div class="welcome">
    <h3>Selamat Datang Di Bookonline!</h3>
</div>
