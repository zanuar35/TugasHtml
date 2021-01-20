@extends('template.base')
@section('content')
<h1>Data Table</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('student.create') }}" class="btn btn-primary mb-3" >Tambah</a>
        <div class="table-responsive">
            <table class="table table-striped data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('student.data') }}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },
            {
                data: 'nim',
                name: 'nim',
            },
            {
                data: 'name',
                name: 'name',
            },
            {
                data: 'gender',
                name: 'gender',
            },
            {
                data: 'department',
                name: 'department',
            },
            {
                data: 'address',
                name: 'address',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
</script>
@endsection