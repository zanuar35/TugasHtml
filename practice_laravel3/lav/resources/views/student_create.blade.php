@extends('template.base') 
@section('content') 
<div class="row">
    <div class="col-lg-6">
        <h1>Tambah Data Mahasiswa</h1> 
        <form action="{{ route('student.store') }}" method="post">
        @csrf 
        <div class="form-group"> 
            <label for="nim">NIM</label> 
            <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ old('nim') }}"> 
        @error('nim') 
            <div class="text-danger">
                {{ $message }} 
            </div> 
        @enderror 
        </div> 
        <div class="form-group"> 
            <label for="name">Nama </label> 
            <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}"> 
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
                <option value="{{ $gd }}" {{ (old('gender') == $gd) ? 'selected' : ''}}>{{ $gd }} </option> 
                @endforeach 
            </select> 
            @error('gender') 
                <div class="text-danger"> 
                {{ $message }} 
            </div> 
            @enderror 
        </div> 
        
        <div class="form-group">
            <label for="department">Jurusan</label>
            <select name="department" class="form-control">
                <option value=""></option>
                @foreach ($department as $dp)
                <option value="{{ $dp }}" {{ (old('department') == $dp) ? 'selected' : '' }} > {{ $dp }} </option>
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
            <textarea name="address" class="form-control" placeholder="Alamat">{{ old('address')}} </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>
        </div>
        @endsection