<div class="auth-nav">
    <div class="auth-nav-desktop">
        @include('components.auth-navigation',['activePanel'=>$activePanel])
    </div>
    <div class="auth-nav-mobile">

        <div class=" mb-4 flex items-center gap-2 p-2 rounded"
            style="border: 1px solid #00AA95; width:fit-content; font-size:0.875rem" type="button"
            data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">

            <div class="mobile-filter__text"> Menu</div>

        </div>
        <div class="collapse" id="mobile-filter">
            <div class="card card-body">
                @include('components.auth-navigation',['activePanel'=>$activePanel])
            </div>
        </div>

    </div>
</div>