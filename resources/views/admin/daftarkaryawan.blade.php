@extends('admin.template')
@section('isi')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url ('/admin')}}">Daftar Obat</a> <span class="mx-2 mb-0">/</span><a href="{{url ('/admin/dokter')}}">Daftar Layanan</a> <span class="mx-2 mb-0">/</span><strong class="text-black">Daftar Karyawan</strong></div>
        </div>
      </div>
</div>
<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <a type="button" class="btn btn-primary mb-3" href="{{url ('/admin/tambahkaryawan')}}">Tambah Karyawan</a>
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-name">Nama</th>
                    <th class="product-name">No HP</th>
                    <th class="product-name">Email</th>
                    <th class="product-name">Role</th>
                    <th class="product-name">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($karyawan as $kar=> $k)
                  <tr>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$k->nama}}</h2>
                    </td>
                    <td>{{$k->nohp}}</td>
                    <td>{{$k->email}}</td>
                    <td>{{$k->role}}</td>
                    <td>
                         <form action="" method="POST">
                            <a href="{{route('editkaryawan', ['id' => $k->id])}}">
                                <button type="button" class="btn btn-warning btn-sm m-2">Edit</button>
                            </a>
                        </form>
                        <form action="{{route('deletekaryawan')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$k->id}}" name="id">
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                Delete
                            </button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>

@endsection