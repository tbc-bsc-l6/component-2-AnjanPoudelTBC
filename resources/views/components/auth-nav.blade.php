@props(['activePanel'])
<div class="auth-nav">
    <div class="auth-navigation">
        <div class="user-profile-image">
            <img src="/assets/default-user.png" alt="">
        </div>
        <div class="user-profile-name">
            {{auth()->user()->name}}
        </div>
        <div class="auth-nav-container">

            <a href="/profile" style="text-decoration: none">
                <div class="auth-nav-item {{  $activePanel=='my-profile' ? 'auth-nav-item-active' : "" }} ">
                    My Profile
                </div>


            </a>
            <a href="/my-orders" style=" text-decoration: none">

                <div class="auth-nav-item {{ $activePanel=='my-orders' ? 'auth-nav-item-active' : "" }} ">
                    My Orders
                </div>

            </a>
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