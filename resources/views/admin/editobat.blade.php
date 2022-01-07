@extends('admin.template')
@section('isi')

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Edit Obat</strong></div>
        </div>
      </div>
</div>
<div class="site-section">
      <div class="container">
      <h2 class="h3 mb-3 text-black">Edit Obat</h2>   
        <form action="{{route('updateobat', ['id'=> $obat->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                  <label for="NamaObat" class="text-black">Nama Obat<span class="text-danger">*</span></label>
                  <input  value="{{$obat->NamaObat}}" type="text" class="form-control" id="NamaObat" name="NamaObat">
                </div>
            </div>
              
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="Harga" class="text-black">Harga<span class="text-danger">*</span></label>
                  <input value="{{$obat->Harga}}" type="text" class="form-control" id="Harga" name="Harga">
                </div>
                <div class="col-md-6">
                  <label for="Stok" class="text-black">Stok<span class="text-danger">*</span></label>
                  <input value="{{$obat->Stok}}" type="text" class="form-control" id="Stok" name="Stok">
                </div>
              </div>
              <div class="form-group">
                <label for="Kategori" class="text-black">Kategori <span class="text-danger">*</span></label>
                <select name="Kategori" id="Kategori" class="form-control">
                  <option value="Obat Kulit Luar" {{($obat->Kategori === 'Obat Kulit Luar') ? 'Selected' : ''}}>Obat Kulit Luar</option>
                  <option value="Pereda Nyeri" {{($obat->Kategori === 'Pereda Nyeri') ? 'Selected' : ''}}>Pereda Nyeri</option>
                  <option value="Antiseptik" {{($obat->Kategori === 'Antiseptik') ? 'Selected' : ''}}>Antiseptik</option>
                  <option value="Anti Inflamasi" {{($obat->Kategori === 'Anti Inflamasi') ? 'Selected' : ''}}>Anti Inflamasi</option>
                  <option value="Mata" {{($obat->Kategori === 'Mata') ? 'Selected' : ''}}>Mata</option>
                  <option value="Alergi" {{($obat->Kategori === 'Alergi') ? 'Selected' : ''}}>Alergi</option>
                  <option value="Mulut & Tenggorokan" {{($obat->Kategori === 'Mulut & Tenggorokan') ? 'Selected' : ''}}>Mulut & Tenggorokan</option>
                  <option value="Pencernaan" {{($obat->Kategori === 'Pencernaan') ? 'Selected' : ''}}>Pencernaan</option>
                  <option value="Vitamin dan Suplemen" {{($obat->Kategori === 'Vitamin dan Suplemen') ? 'Selected' : ''}}>Vitamin dan Suplemen</option>
                </select>
              </div>
    
            <div class="form-group">
                <label for="Deskripsi" class="text-black">Deskripsi</label>
                <textarea name="Deskripsi" id="Deskripsi" cols="30" rows="5" class="form-control"
                    placeholder="Deskripsi Obat ...">{{$obat->Deskripsi}}</textarea>
            </div>

            <div class="form-group">
                <label for="Indikasi" class="text-black">Indikasi Umum</label>
                <textarea name="Indikasi" id="Indikasi" cols="30" rows="5" class="form-control"
                    placeholder="Indikasi Umum ...">{{$obat->Indikasi}}</textarea>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Komposisi" class="text-black">Komposisi<span class="text-danger">*</span></label>
                  <input value="{{$obat->Komposisi}}" type="text" class="form-control" id="Komposisi" name="Komposisi">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Dosis" class="text-black">Dosis<span class="text-danger">*</span></label>
                  <input value="{{$obat->Dosis}}" type="text" class="form-control" id="Dosis" name="Dosis">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="AturanPakai" class="text-black">Aturan Pakai<span class="text-danger">*</span></label>
                  <input value="{{$obat->AturanPakai}}" type="text" class="form-control" id="AturanPakai" name="AturanPakai">
                </div>
            </div>
            <div class="form-group">
            <div class="mb-3">
                <label for="Foto" class="text-black">Gambar Obat<span class="text-danger">*</span></label>
                <input value="{{$obat->Foto}}" class="form-control" type="file" id="Foto" name="Foto">
            </div>
            </div>
   
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="p-3 p-lg-5 border">

            <div class="form-group">
                <label for="KontraIndikasi" class="text-black">Kontra Indikasi</label>
                <textarea name="KontraIndikasi" id="KontraIndikasi" cols="30" rows="5" class="form-control"
                    placeholder="Kontra Indikasi ...">{{$obat->KontraIndikasi}}</textarea>
            </div>

            <div class="form-group">
                <label for="Perhatian" class="text-black">Perhatian</label>
                <textarea name="Perhatian" id="Perhatian" cols="30" rows="5" class="form-control" placeholder="Perhatian ...">{{$obat->Perhatian}}</textarea>
            </div>

            <div class="form-group">
                <label for="EfekSamping" class="text-black">Efek Samping</label>
                <textarea name="EfekSamping" id="EfekSamping" cols="30" rows="5" class="form-control"
                    placeholder="Efek Samping ...">{{$obat->EfekSamping}}</textarea>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Segmentasi" class="text-black">Segmentasi<span class="text-danger">*</span></label>
                  <input value="{{$obat->Segmentasi}}" type="text" class="form-control" id="Segmentasi" name="Segmentasi">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Kemasan" class="text-black">Kemasan<span class="text-danger">*</span></label>
                  <input value="{{$obat->Kemasan}}" type="text" class="form-control" id="Kemasan" name="Kemasan">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Manufaktur" class="text-black">Manufaktur<span class="text-danger">*</span></label>
                  <input value="{{$obat->Manufaktur}}" type="text" class="form-control" id="Manufaktur" name="Manufaktur">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="NoRegis" class="text-black">No Registrasi<span class="text-danger">*</span></label>
                  <input value="{{$obat->NoRegis}}" type="text" class="form-control" id="NoRegis" name="NoRegis">
                </div>
            </div>  
            
            </div>
            <button type="submit" class="btn btn-primary col-12 mt-5" >Simpan</button> 
          </div>
        </div>
        </form>
        <!-- </form> -->
      </div>
    </div>

@endsection