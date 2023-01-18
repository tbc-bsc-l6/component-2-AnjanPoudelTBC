@props(['activePanel'])
<div class="auth-nav">
    <div class="auth-navigation">

        @cannot('admin')
        <div class="user-profile-image">
            <img src="/assets/default-user.png" alt="">
        </div>

        @endcannot
        <div class="user-profile-name">
            {{auth()->user()->name}}
        </div>



        <div class="auth-nav-container">


            @cannot('admin')


            <a href="/profile">
                <div class="auth-nav-item {{  $activePanel=='my-profile' ? 'auth-nav-item-active' : "" }} ">
                    My Profile
                </div>


            </a>
            <a href="/my-orders">

                <div class="auth-nav-item {{ $activePanel=='my-orders' ? 'auth-nav-item-active' : "" }} ">
                    My Orders
                </div>

            </a>
            @endcannot

            @can('admin')
            <a href="/admin/dashboard">

                <div class="auth-nav-item {{ $activePanel=='dashboard' ? 'auth-nav-item-active' : "" }} ">
                    Dashboard
                </div>

            </a>

            <a href="/admin/products">

                <div class="auth-nav-item {{ $activePanel=='products' ? 'auth-nav-item-active' : "" }} ">
                    Products
                </div>

            </a>
            <a href="/admin/categories">

                <div class="auth-nav-item {{ $activePanel=='categories' ? 'auth-nav-item-active' : "" }} ">
                    Categories
                </div>

            </a>
            <a href="/admin/featured-products">

                <div class="auth-nav-item {{ $activePanel=='featured-products' ? 'auth-nav-item-active' : "" }} ">
                    Featured Products
                </div>

            </a>
            <a href="/profile">
                <div class="auth-nav-item {{  $activePanel=='my-profile' ? 'auth-nav-item-active' : "" }} ">
                    Admin Profile
                </div>
            </a>

            <a href="/admin/orders">

                <div class="auth-nav-item {{ $activePanel=='orders' ? 'auth-nav-item-active' : "" }} ">
                    Orders
                </div>

            </a>
            <a href="/admin/users">

                <div class="auth-nav-item {{ $activePanel=='users' ? 'auth-nav-item-active' : "" }} ">
                    Users
                </div>

            </a>


            @endcan
            <form class="form-blank" method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="auth-nav-item ">
                    <button class="btn btn-blank" style="display: flex; gap:1rem ; align-items:center">
                        <div>
                            Logout
                        </div>
                        <div class="logout-icon">
                            <img src="/assets/logout.png" alt="">
                        </div>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>