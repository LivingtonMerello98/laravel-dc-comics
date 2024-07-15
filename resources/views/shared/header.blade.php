<header>
    <div class="container">
        <div class="row">
            <div class="col-4 py-3">
                <div class="logo-container">
                    <img src="https://www.dc.com/img/dc-logo.svg" class="logo-header" alt="logo_dc">
                </div>
            </div>
            <div class="col-8 py-3 d-flex align-items-center justify-content-end">
                <li><a href="{{ route('comics.index') }}">comics</a></li>
                <li><a href="{{ route('comics.create') }}">upload comics</a></li>
                <li><a href="{{ route('comics.admin') }}">admin</a></li>
                <li>tv</li>
                <li>games</li>
                <li>collectibles</li>
                <li>videos</li>
                <li>fans</li>
                <li>news</li>
                <li>shop</li>
            </div>
        </div>
    </div>
</header>