{{-- Modal edit --}}
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/update/{{$row->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kd_barang</label>
                    <input type="number" class="form-control" id="kd_barang" name="kd_barang" value="{{$row->kd_barang}}"> @error('kd_barang')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nm_barang</label>
                    <input type="text" class="form-control" id="nm_barang" name="nm_barang" value="{{$row->nm_barang}}"> @error('nm_barang')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div div class="mb-3">
                    <label class="form-label">Tipe barang</label>
                    <select type="text" class="form-select" id="tipe_barang" name="tipe_barang" >
                    <option value="{{$row->tipe_barang}}" >{{$row->tipe_barang}}</option>
                    <option value="box">box</option>
                    <option value="pcs">pcs</option>
                    <option value="pack">pack</option>
                    <option value="slop">slop</option>
                    </select>
                    @error('tipe_barang')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{$row->jumlah}}"> @error('jumlah')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Distributor</label>
                    <input type="text" class="form-control" id="distributor" name="distributor" value="{{$row->distributor}}"> @error('distributor')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal masuk</label>
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="{{$row->tgl_masuk}}"> @error('tgl_masuk')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal keluar</label>
                    <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" value="{{$row->tgl_keluar}}"> @error('tgl_keluar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
        </div>
      </div>
    </div>
  </div>
