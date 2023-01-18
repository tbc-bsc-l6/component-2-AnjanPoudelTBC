<div class="navbar">
    <div class="container navbar-container">
        <div class="navbar-left">

            <div class="navbar-left-logo">
                <a href="/admin/dashboard"> <img src="/assets/logo.png" /></a>
            </div>


        </div>

        <div class="navbar-right">

            <div class="navbar-right-profile">


                @auth('')
                <div class="dropdown">
                    <div class="dropdown-toggle profile-dropdown" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">
                        <img src="/assets/default-user.png" />
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

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

    </div>


</div>