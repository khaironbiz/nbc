<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('user.training.mine.show', ['id'=> $training->id]) }}">Information</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('user.training.mine.pretest', ['id'=> $training->id]) }}">Pre Test </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.training.mine.schedule', ['id'=> $training->id]) }}">Sesi Pembelajaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Penugasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kelompok</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Materi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Anggota</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>