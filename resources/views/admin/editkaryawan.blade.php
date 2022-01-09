@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span><a href="{{url ('/admin/dokter')}}">Daftar Layanan</a> <span class="mx-2 mb-0">/</span><a href="{{url ('/admin/karyawan')}}">Daftar Karyawan</a> <span class="mx-2 mb-0">/</span><strong class="text-black">Edit Karyawan</strong></div>
        </div>
      </div>
</div>
<div class="site-section">
      <div class="container">
          
      <h2 class="h3 mb-3 text-black">Edit Karyawan</h2>   
        <form action="{{route('updatekaryawan', ['id'=> $karyawan->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0">
            <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                  <label for="nama" class="text-black">Nama Karyawan<span class="text-danger">*</span></label>
                  <input value="{{$karyawan->nama}}" type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
              
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="nohp" class="text-black">No HP Karyawan<span class="text-danger">*</span></label>
                  <input value="{{$karyawan->nohp}}" type="text" class="form-control" id="nohp" name="nohp">
                </div>
                <div class="col-md-6">
                  <label for="email" class="text-black">Email Karyawan<span class="text-danger">*</span></label>
                  <input value="{{$karyawan->email}}" type="email" class="form-control" id="email" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="password" class="text-black">Password<span class="text-danger">*</span></label>
                  <input value="{{$karyawan->password}}" type="password" class="form-control" id="password" name="password">
                </div>
                <div class="col-md-6">
                  <label for="role" class="text-black">Role <span class="text-danger">*</span></label>
                  <select name="role" id="role" class="form-control">
                    <option value="Admin" {{($karyawan->role === 'Admin') ? 'Selected' : ''}}>Admin</option>
                    <option value="Karyawan" {{($karyawan->role === 'Karyawan') ? 'Selected' : ''}}>Karyawan</option>
                  </select>
                </div>
              </div>
            <button type="submit" class="btn btn-primary col-12 mt-5" >Simpan</button> 
            </div>
          </div>
        </div>
        </form>
        <!-- </form> -->
      </div>
    </div>

@endsection