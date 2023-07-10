<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5C5959;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/" style="letter-spacing: 5px; font-family: Viga; font-size: 32px">Palla.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-left:260px">
                    <a class="nav-link hov @if($active=='home') active @endif ms-5 me-3"   href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hov @if($active=='transactions') active @endif me-3 " href="/transactions">Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hov @if($active=='warehouses') active @endif me-3" href="/warehouses">Warehouses</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item mt-1">
                <a class="nav-link @if($active=='checkout') active @endif " href="/checkout"> 
                    <button type="button" class="btn btn-warning torder position-relative">
                        <i class="bi bi-house-door"></i> 
                        @if (empty(App\Models\Order::where('user_id', Auth::user()->id)->where('status', 0)->first()))
                        
                        @else
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php
                                $order = App\Models\Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
                                $notif = App\Models\DetailOrder::where('order_id', $order->id)->count();
                                ?>
                            {{ $notif }}
                            {{-- <span class="visually-hidden">unread messages</span> --}}
                        </span>
                        @endif
                    </button>
                </a>
            </li>
            <li class="nav-item dropdown" style="margin-top: -10px">
                {{-- <a class="welkom nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false""> Welcome back, {{ auth()->user()->name }} </a> --}}
                <a class="welkom nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false""><img src="/img/sign-in/person.png" width="50px" alt="" style="filter:brightness(0) invert(1)"></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                  <li><a class="dropdown-item" href="/dashboard">Become Renter ?</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                      <form action="/logout" method="POST">
                                    @csrf
                        <button type="submit" class="dropdown-item ">Logout   <i class="bi bi-door-closed ms-2"></i></button>
                      </form>
                  </li>
                </ul>
            </li>
            @else
                <li class="nav-item">
                    <a class=" @if($active=='login') active @endif " href="/login">
                        <button type="submit" class="btn btn-warning login"><i class="bi bi-door-open"></i>  Login</button>
                    </a>
                </li>
            @endauth
            </ul>

        </div> 
      </div>
    </div>
</nav>

