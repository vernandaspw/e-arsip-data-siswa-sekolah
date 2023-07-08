<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>e-arsip data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class="sb-nav-fixed">
    @if (auth()->check())
        <livewire:c.navbar />
        <div id="layoutSidenav">
            <livewire:c.sidebar />
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        {{ $slot }}
                    </div>
                </main>
                {{-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
    @else
        {{ $slot }}
    @endif

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('sbadmin/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sbadmin/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('sbadmin/js/datatables-simple-demo.js') }}"></script>

    <script src="{{ asset('vendor/sweatalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        Livewire.on('success', data => {
            console.log(data.pesan);
            Swal.fire({
                position: 'center',
                title: 'success!',
                text: data.pesan,
                icon: 'success',
                confirmButtonText: 'oke'
                // showConfirmButton: false
                // , timer: 1500
            })
        })
        Livewire.on('error', data => {
            console.log(data.pesan);
            Swal.fire({
                position: 'center',
                title: 'error!',
                text: data.pesan,
                icon: 'error',
                confirmButtonText: 'oke'
                // showConfirmButton: false
                // , timer: 1500
            })
        })


    </script>

    @stack('script')
</body>

</html>
