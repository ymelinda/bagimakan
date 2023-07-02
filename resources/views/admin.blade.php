@extends('layout')

@section('content')
    <!-- ======= Admin ======= -->

    <div class="mt-8 ">
        <form method="POST" action="{{ route('admin') }}">
            @csrf
            <div class="mt-5">
                <div class="card recent-sales overflow-auto">



                    <div class="card-body">
                        <h5 class="card-title">Donasi Makanan <span>| Today</span></h5>
                        {{-- <div class="filter"> --}}
                            {{-- <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a> --}}


                                <a class="" href="#">Today</a> -
                                <a class="" href="#">This Month</a> -
                                <a class="" href="#">This Year</a>
                        {{-- </div> --}}
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Makanan</th>
                                    <th scope="col">Jumlah Porsi</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Tanggal Dibuat</th>
                                    <th scope="col">Tanggal Kadaluarsa</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- looping data dari database --}}
                                @foreach ($data as $d)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $d->nama_makanan }}</td>
                                        <td>{{ $d->porsi_makanan }}</td>
                                        <td>{{ $d->no_telp }}</td>
                                        <td>{{ $d->tanggal_dibuat }}</td>
                                        <td>{{ $d->tanggal_kadaluarsa }}</td>
                                        <td>{{ $d->id_lokasi }}</td>
                                        <td>
                                            <a href="{{ route('edit', $d->id) }}">edit</a>
                                            <a href="{{ route('approve', $d->id) }}">approve</a>
                                        </td>
                                        <td>
                                            @if ($d->Status == 'approved')
                                                <span class="badge bg-success">{{ $d->Status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
            </script>
            <!-- End Admin -->
        </form>

    </div>
@endsection
