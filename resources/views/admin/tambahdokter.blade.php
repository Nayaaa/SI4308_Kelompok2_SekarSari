@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
        <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span><a href="{{url ('/admin/dokter')}}">Daftar Layanan</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tambah Layanan</strong></div>
        </div>
      </div>
</div>
<div class="site-section">
      <div class="container">
          
      <h2 class="h3 mb-3 text-black">Tambah Layanan</h2>   
        <form action="{{route('simpandokter')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0">
            <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                  <label for="nama" class="text-black">Nama Dokter<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
              
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="nohp" class="text-black">No HP Dokter<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="nohp" name="nohp">
                </div>
                <div class="col-md-6">
                  <label for="email" class="text-black">Email Dokter<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="form-group">
                <label for="alamat" class="text-black">Alamat Dokter</label><span class="text-danger">*</span>
                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"
                    placeholder="Alamat Dokter ..."></textarea>
            </div>
              <div class="form-group">
                <label for="spesialis" class="text-black">Spesialis <span class="text-danger">*</span></label>
                <select name="spesialis" id="spesialis" class="form-control">
                  <option value="Psikiater">Psikiater</option>
                  <option value="Umum">Umum</option>
                  <option value="Psikolog Klinis">Psikolog Klinis</option>
                  <option value="Terapi Wicara">Terapi Wicara</option>
                </select>
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