<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .active {
            background: #E07B67 !important;
        }

        .sidebar {
            width: 4.5rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #202024;
        }

        .content {
            margin-left: 4.5rem;
        }
    </style>
</head>

<body class="d-flex position-relative" style="background: rgba(32, 32, 36, 0.9);">
    <div class="d-flex flex-column flex-shrink-0 sidebar vh-100">
        <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
            <p class="m-0 text-center text-secondary">Sine</p>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ route('series.index') }}" class="nav-link py-3 rounded-0 {{ request()->routeIs(['series.index', 'series.edit', 'seasons.index', 'episodes.index']) ? 'active' : 'text-secondary'}} " aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                    <i class="bi bi-collection-play fs-5"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('series.create') }}" class="nav-link py-3 rounded-0 {{ request()->routeIs(['series.create']) ? 'active' : 'text-secondary'}}" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                    <i class="bi bi-folder-plus fs-5"></i>
                </a>
            </li>
        </ul>
    </div>
    <main class="w-100 content">
        <nav class="navbar" style="background: #17171A;">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#" style="color: #E07B67;">
                    {{$title}}
                </a>
            </div>
        </nav>
        <div class="container mt-3">
            @isset($messagem)
            <div class="alert alert-success bg-transparent text-success mb-3">
                {{$messagem}}
            </div>
            @endisset
            {{$slot}}
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($errors->any())
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 6000,
            timerProgressBar: true,
        });

        Toast.fire({
            icon: "error",
            title: "{{$errors->first()}}",
        });
    </script>
    @endif
</body>

</html>