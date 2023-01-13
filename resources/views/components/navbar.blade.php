<div class="navbar">
    <div class="container navbar-container">
        <div class="navbar-left">

            <div class="navbar-left-logo">
                <a href="/"> <img src="/assets/logo.png" /></a>
            </div>

            <div class="dropdown show navbar-left-products">
                <a class="btn btn-blank dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="navbar-middle">
            <div class="navbar-middle-search">
                <div class="navbar-middle-search-logo">
                    <img src="/assets/search.svg" />
                </div>
                <input placeholder="Find Your Products here ..." />
            </div>

        </div>
        <div class="navbar-right">
            <div class="navbar-right-search">
                <div class="navbar-middle-search-logo" data-toggle="modal" data-target="#searchModal">
                    <img src="/assets/search.svg" />
                </div>
            </div>


            <div class="navbar-right-cart">
                <a href="/cart">
                    <img src="/assets/cart.svg" />
                    <div class="navbar-cart-num">
                        0
                    </div>
                </a>
            </div>
            <div class="navbar-right-profile">
                @guest
                <a class="btn btn-primary btn-sm" href="{{ route('login') }}">
                    Login
                </a>
                @endguest

                @auth('')
                <div class="dropdown">
                    <div class="dropdown-toggle profile-dropdown" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">
                        <img src="/assets/default-user.png" />
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/profile">My Profile</a>
                        <a class="dropdown-item" href="/my-orders">My Orders</a>
                        <div class=" dropdown-item">
                            <form class="form-blank dropdown-item" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn-blank">
                                    Logout
                                </button>
                            </form>
                        </div>


                    </div>
                </div>
                @endauth


            </div>
        </div>
        <div class="navbar-hamburger">
            <div class="navbar-right-cart">
                <img src="/assets/cart.svg" />
                <div class="navbar-cart-num">
                    0
                </div>
            </div>
            <button class="navbar-hamburger-btn btn-blank" type="button" data-toggle="collapse"
                data-target="#mobile-menu" aria-expanded="false" aria-controls="mobile-menu">
                <img src="/assets/hamburger-menu.png" alt="menu" />
            </button>
        </div>
    </div>


</div>
<div class="mobile-navigation-container collapse" id="mobile-menu">
    <div class="card card-body">
        <div class="mobile-navigation">
            <div class="w-100" type="button" data-toggle="collapse" data-target="#mobile-products" aria-expanded="false"
                aria-controls="mobile-products">
                Products
            </div>
            <div class="collapse" id="mobile-products">
                <div class="card card-body">
                    <a class="" href="#">Vegetables</a>
                    <a class="" href="#">Fruits</a>
                    <a class="" href="#">Drinks</a>
                </div>
            </div>
        </div>
        <div class="mobile-navigation" data-toggle="modal" data-target="#searchModal">

            <span class="search-mobile">
                <img src="/assets/search.svg" />
            </span> Search Products

        </div>
        <a href="{{ route('login') }}">
            <div class="mobile-navigation">

                Login

            </div>
        </a>
    </div>
</div>
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Search Your Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
</div>