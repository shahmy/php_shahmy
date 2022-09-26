<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('salesreps.index') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    List Sales Representatives
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('salesreps.create') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Cerate Sales Representatives
                </a>
            </li>

        </ul>


    </div>
</nav>
