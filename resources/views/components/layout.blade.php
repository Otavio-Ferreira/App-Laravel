<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary vh-100" style="width: 4.5rem;">
        <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard">
                <use xlink:href="#speedometer2"></use>
            </svg>
            <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ route('series.index') }}" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                    <i class="bi bi-collection-play fs-5"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
                    <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
                    <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders">
                        <use xlink:href="#table"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
                    <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products">
                        <use xlink:href="#grid"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
                    <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </a>
            </li>
        </ul>
        <div class="dropdown border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <main class="w-100">
        <nav class="navbar bg-body-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    {{$title}}
                </a>
            </div>
        </nav>
        <div class="container mt-3">
            {{$slot}}
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>