@extends('admin.template')
@section('isi')

<div class="site-section">
      <div class="container">
          
      <h2 class="h3 mb-3 text-black">Tambah Obat</h2>   
        <form action="{{route('simpanobat')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                  <label for="NamaObat" class="text-black">Nama Obat<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="NamaObat" name="NamaObat">
                </div>
            </div>
              
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="Harga" class="text-black">Harga<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Harga" name="Harga">
                </div>
                <div class="col-md-6">
                  <label for="Stok" class="text-black">Stok<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Stok" name="Stok">
                </div>
              </div>
              <div class="form-group">
                <label for="Kategori" class="text-black">Kategori <span class="text-danger">*</span></label>
                <select name="Kategori" id="Kategori" class="form-control">
                  <option value="Obat Kulit Luar">Obat Kulit Luar</option>
                  <option value="Pereda Nyeri">Pereda Nyeri</option>
                  <option value="Antiseptik">Antiseptik</option>
                  <option value="Anti Inflamasi">Anti Inflamasi</option>
                  <option value="Mata">Mata</option>
                  <option value="Alergi">Alergi</option>
                  <option value="Mulut & Tenggorokan">Mulut & Tenggorokan</option>
                  <option value="Pencernaan">Pencernaan</option>
                  <option value="Vitamin dan Suplemen">Vitamin dan Suplemen</option>
                </select>
              </div>
    
            <div class="form-group">
                <label for="Deskripsi" class="text-black">Deskripsi</label>
                <textarea name="Deskripsi" id="Deskripsi" cols="30" rows="5" class="form-control"
                    placeholder="Deskripsi Obat ..."></textarea>
            </div>

            <div class="form-group">
                <label for="Indikasi" class="text-black">Indikasi Umum</label>
                <textarea name="Indikasi" id="Indikasi" cols="30" rows="5" class="form-control"
                    placeholder="Indikasi Umum ..."></textarea>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Komposisi" class="text-black">Komposisi<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Komposisi" name="Komposisi">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Dosis" class="text-black">Dosis<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Dosis" name="Dosis">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="AturanPakai" class="text-black">Aturan Pakai<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="AturanPakai" name="AturanPakai">
                </div>
            </div>
            <div class="form-group">
            <div class="mb-3">
                <label for="Foto" class="text-black">Gambar Obat<span class="text-danger">*</span></label>
                <input class="form-control" type="file" id="Foto" name="Foto">
            </div>
            </div>
   
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="p-3 p-lg-5 border">

            <div class="form-group">
                <label for="KontraIndikasi" class="text-black">Kontra Indikasi</label>
                <textarea name="KontraIndikasi" id="KontraIndikasi" cols="30" rows="5" class="form-control"
                    placeholder="Kontra Indikasi ..."></textarea>
            </div>

            <div class="form-group">
                <label for="Perhatian" class="text-black">Perhatian</label>
                <textarea name="Perhatian" id="Perhatian" cols="30" rows="5" class="form-control" placeholder="Perhatian ..."></textarea>
            </div>

            <div class="form-group">
                <label for="EfekSamping" class="text-black">Efek Samping</label>
                <textarea name="EfekSamping" id="EfekSamping" cols="30" rows="5" class="form-control"
                    placeholder="Efek Samping ..."></textarea>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Segmentasi" class="text-black">Segmentasi<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Segmentasi" name="Segmentasi">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Kemasan" class="text-black">Kemasan<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Kemasan" name="Kemasan">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="Manufaktur" class="text-black">Manufaktur<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Manufaktur" name="Manufaktur">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                  <label for="NoRegis" class="text-black">No Registrasi<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="NoRegis" name="NoRegis">
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