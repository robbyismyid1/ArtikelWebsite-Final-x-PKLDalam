<!-- Modal -->
{{-- NON AJAX --}}
<div class="modal fade" id="create-bs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Bidang Studi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bidang-studi.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">Nama Bidang Studi</label>
                      <input type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama kategori" aria-describedby="helpId">

                      @if ($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-bs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Bidang Studi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bidang-studi.destroy', 'test') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="">Nama Bidang Studi</label>
                        <input disabled readonly type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama kategori" aria-describedby="helpId">
                        <small>Data akan dihapus permanen!</small>
                      @if ($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-bs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Bidang Studi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bidang-studi.update', 'test') }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="">Nama Bidang Studi</label>
                        <input type="text" name="nama" id="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama kategori" aria-describedby="helpId">
                        <small>Data akan diedit!</small>
                      @if ($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-info">Edit</button>
            </form>
            </div>
        </div>
    </div>
</div>