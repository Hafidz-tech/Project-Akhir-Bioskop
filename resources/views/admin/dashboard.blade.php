@extends('admin.layouts.app')

@section('content')
    <div class="row">

        {{-- Statistik Card --}}
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Penjualan Bulan Ini</h5>
                    <h2 class="fw-bold">Rp {{ number_format($penjualanBulanIni ?? 0, 0, ',', '.') }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Tiket Terjual</h5>
                    <h2 class="fw-bold">{{ $tiketTerjual ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-warning mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Film Tayang Hari Ini</h5>
                    <h2 class="fw-bold">{{ count($filmsToday ?? []) }}</h2>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-4">

        {{-- Grafik Penjualan Tiket --}}
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-semibold mb-4">Grafik Penjualan Tiket</h5>

                    <canvas id="salesChart" height="120"></canvas>
                </div>
            </div>
        </div>

        {{-- Film yang tayang hari ini --}}
        <div class="col-md-4">
            <h5 class="fw-semibold mb-3">🎬 Film yang Tayang Hari Ini</h5>

            @forelse ($filmsToday as $film)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <img src="{{ asset('posters/' . $film->poster) }}" width="60" class="rounded me-3">

                        <div>
                            <h6 class="mb-1">{{ $film->judul }}</h6>
                            <small class="text-muted">{{ $film->genre->nama }}</small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    Tidak ada film tayang hari ini.
                </div>
            @endforelse

        </div>

    </div>
@endsection


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('salesChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($chartLabels ?? ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min']) !!},
                datasets: [{
                    label: 'Tiket Terjual',
                    data: {!! json_encode($chartData ?? [12, 19, 7, 15, 22, 30, 18]) !!},
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                tension: 0.3
            }
        });
    </script>
@endsection
