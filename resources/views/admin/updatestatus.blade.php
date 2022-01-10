@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span><a href="{{url ('/admin/daftarpesanan')}}">Daftar Pesanan</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Update Status Pesanan</strong></div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">

    <h2 class="h3 mb-3 text-black">Update Status Pesanan</h2>
    <form action="{{route('update', ['id'=> $item->id])}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12 mb-5 mb-md-0">
          <div class="p-3 p-lg-5 border">
            <div class="form-group row">
              <div class="col-md-12">
                <label for="resi" class="text-black">Nomor Resi<span class="text-danger">*</span></label>
                <input type="text" value="{{$item-> resi}}" class="form-control" id="resi" name="resi">
              </div>
            </div>
            <div class="form-group">
              <label for="status" class="text-black">Status Pesanan <span class="text-danger">*</span></label>
              <select name="status" id="status" class="form-control">
              <option value="Placed Order" {{($item->status === 'Placed Order') ? 'Selected' : ''}}>Placed Order</option>
                <option value="Dikonfirmasi"{{($item->status === 'Dikonfirmasi') ? 'Selected' : ''}} >Dikonfirmasi</option>
                <option value="Diproses" {{($item->status === 'Diproses') ? 'Selected' : ''}}>Diproses</option>
                <option value="Dikirim"{{($item->status === 'Dikirim') ? 'Selected' : ''}}>Dikirim</option>
                <option value="Selesai"{{($item->status === 'Selesai') ? 'Selected' : ''}}>Selesai</option>
                <option value="Dibatalkan"{{($item->status === 'Dibatalkan') ? 'Selected' : ''}}>Dibatalkan</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary col-12 mt-5">Simpan</button>
          </div>
        </div>
      </div>
    </form>
    <!-- </form> -->
  </div>
</div>

@endsection