@extends('template.base')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <h1>Edit Data Mahasiswa</h1>
        <form action="{{ route('student.update',['id' => $student->id]) }}" method="post">
            @method('PUT')
            @csrf 
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $student->nim }}">
                @error('nim')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input typp="text" name="name" class="form-control" placeholder="Nama" value="{{ $student->name }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" class="form-control">
                        <option value=""></option>
                        @foreach ($gender as $gd)
                        <option value="{{ $gd }}" {{ ($student->gender == $gd) ? 'selected' : '' }} > {{ $gd }} </option>
                        @endforeach
                    </select>
                    @error('gender')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
            </div>

            <div class="form-group">
                <label for="nim">Jurusan</label>
                <select name="department" class="form-control">
                <option value=""></option>
                        @foreach ($department as $dp)
                        <option value="{{ $dp }}" {{ ($student->department == $dp) ? 'selected' : '' }} > {{ $dp }} </option>
                        @endforeach
                    </select>
                    @error('department')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
            </div>

            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control" placeholder="Alamat">{{ $student-> address }} </textarea>
            </div>

            <button type="submit" class="btn btn-info">Edit</button>
        </form>
        </div>
    </div>
 @endsection