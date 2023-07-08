<div>
    <div class="">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="my-4">
            <h4>
                E-ARSIP DATA SISWA PADA SMA BINA WARGA 1 PALEMBANG
            </h4>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-header">Data Siswa Aktif</div>
                    <div class="card-body">
                        <div class="">
                            {{ $siswaAktif }}
                        </div>
                        <div class="">
                            Pending : {{ $siswaAktifPending }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-header">Data Siswa Alumni</div>
                    <div class="card-body">{{ $siswaAlumni }}</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-header">Siswa Mutasi Masuk</div>
                    <div class="card-body">{{ $siswaMutasiMasuk }}</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-header">Siswa Mutasi Keluar</div>
                    <div class="card-body">{{ $siswaMutasiKeluar }}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Data Siswa Aktif
                    </div>
                    <div class="card-body"><canvas id="dataSiswaAktif" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Data Siswa Alumni
                    </div>
                    <div class="card-body"><canvas id="dataSiswaAlumni" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Siswa Mutasi Masuk
                    </div>
                    <div class="card-body"><canvas id="siswaMutasiMasuk" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Siswa Mutasi Keluar
                    </div>
                    <div class="card-body"><canvas id="siswaMutasiKeluar" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>

    </div>
</div>

@push('script')
    <script>
        var ctx = document.getElementById("dataSiswaAktif");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: "aa",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: [
                        {{ $siswaAktif1 }},
                        {{ $siswaAktif2 }},
                        {{ $siswaAktif3 }},
                        {{ $siswaAktif4 }},
                        {{ $siswaAktif5 }},
                        {{ $siswaAktif6 }},
                        {{ $siswaAktif7 }},
                        {{ $siswaAktif8 }},
                        {{ $siswaAktif9 }},
                        {{ $siswaAktif10 }},
                        {{ $siswaAktif11 }},
                        {{ $siswaAktif12 }},
                    ],
                }],
            },
            options: {
                scales: {
                    // xAxes: [{
                    //     time: {
                    //         unit: 'month'
                    //     },
                    //     gridLines: {
                    //         display: false
                    //     },
                    //     ticks: {
                    //         maxTicksLimit: 6
                    //     }
                    // }],
                    // yAxes: [{
                    //     ticks: {
                    //         min: 0,
                    //         max: 15000,
                    //         maxTicksLimit: 5
                    //     },
                    //     gridLines: {
                    //         display: true
                    //     }
                    // }],
                },
                legend: {
                    display: false
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById("dataSiswaAlumni");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: "aa",
                    backgroundColor: "RGB(255, 193, 7)",
                    borderColor: "RGB(255, 193, 7)",
                    data: [
                        {{ $siswaAlumni1 }},
                        {{ $siswaAlumni2 }},
                        {{ $siswaAlumni3 }},
                        {{ $siswaAlumni4 }},
                        {{ $siswaAlumni5 }},
                        {{ $siswaAlumni6 }},
                        {{ $siswaAlumni7 }},
                        {{ $siswaAlumni8 }},
                        {{ $siswaAlumni9 }},
                        {{ $siswaAlumni10 }},
                        {{ $siswaAlumni11 }},
                        {{ $siswaAlumni12 }},
                    ],
                }],
            },
            options: {
                scales: {
                    // xAxes: [{
                    //     time: {
                    //         unit: 'month'
                    //     },
                    //     gridLines: {
                    //         display: false
                    //     },
                    //     ticks: {
                    //         maxTicksLimit: 6
                    //     }
                    // }],
                    // yAxes: [{
                    //     ticks: {
                    //         min: 0,
                    //         max: 15000,
                    //         maxTicksLimit: 5
                    //     },
                    //     gridLines: {
                    //         display: true
                    //     }
                    // }],
                },
                legend: {
                    display: false
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById("siswaMutasiMasuk");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: "aa",
                    backgroundColor: "RGB(25, 135, 84)",
                    borderColor: "RGB(25, 135, 84)",
                    data: [
                        {{ $siswaMutasiMasuk1 }},
                        {{ $siswaMutasiMasuk2 }},
                        {{ $siswaMutasiMasuk3 }},
                        {{ $siswaMutasiMasuk4 }},
                        {{ $siswaMutasiMasuk5 }},
                        {{ $siswaMutasiMasuk6 }},
                        {{ $siswaMutasiMasuk7 }},
                        {{ $siswaMutasiMasuk8 }},
                        {{ $siswaMutasiMasuk9 }},
                        {{ $siswaMutasiMasuk10 }},
                        {{ $siswaMutasiMasuk11 }},
                        {{ $siswaMutasiMasuk12 }},
                    ],
                }],
            },
            options: {
                scales: {
                    // xAxes: [{
                    //     time: {
                    //         unit: 'month'
                    //     },
                    //     gridLines: {
                    //         display: false
                    //     },
                    //     ticks: {
                    //         maxTicksLimit: 6
                    //     }
                    // }],
                    // yAxes: [{
                    //     ticks: {
                    //         min: 0,
                    //         max: 15000,
                    //         maxTicksLimit: 5
                    //     },
                    //     gridLines: {
                    //         display: true
                    //     }
                    // }],
                },
                legend: {
                    display: false
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById("siswaMutasiKeluar");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: "aa",
                    backgroundColor: "RGB(220, 53, 69)",
                    borderColor: "RGB(220, 53, 69)",
                    data: [
                        {{ $siswaMutasiKeluar01 }},
                        {{ $siswaMutasiKeluar02 }},
                        {{ $siswaMutasiKeluar03 }},
                        {{ $siswaMutasiKeluar04 }},
                        {{ $siswaMutasiKeluar05 }},
                        {{ $siswaMutasiKeluar06 }},
                        {{ $siswaMutasiKeluar07 }},
                        {{ $siswaMutasiKeluar08 }},
                        {{ $siswaMutasiKeluar09 }},
                        {{ $siswaMutasiKeluar10 }},
                        {{ $siswaMutasiKeluar11 }},
                        {{ $siswaMutasiKeluar12 }},
                    ],
                }],
            },
            options: {
                scales: {
                    // xAxes: [{
                    //     time: {
                    //         unit: 'month'
                    //     },
                    //     gridLines: {
                    //         display: false
                    //     },
                    //     ticks: {
                    //         maxTicksLimit: 6
                    //     }
                    // }],
                    // yAxes: [{
                    //     ticks: {
                    //         min: 0,
                    //         max: 15000,
                    //         maxTicksLimit: 5
                    //     },
                    //     gridLines: {
                    //         display: true
                    //     }
                    // }],
                },
                legend: {
                    display: false
                }
            }
        });
    </script>
@endpush
