@extends('Layout')
@section('Content')

<a href="#" onclick="ModalTambahGame()"  class="btn btn-success"> + Add New Data</a>


<table class="table table-bordered">
    <tr>
        <th>Kode Game</th>
        <th>Nama Game</th>
        <th>Link Game</th>
        <th>Opsi</th>
    </tr>
    @foreach($game as $Get)
    <tr>
        <td>{{ $Get->kd_game}}</td>
        <td>{{ $Get->nama_game}}</td>
        <td>{{ $Get->link_game}}</td>
        
        <td>
        <a href="#" onclick="ModalEditGame('{{ $Get->kd_game }}' , '{{ $Get->nama_game }}')" class="btn btn-info">Update</a>
            |
            <a href="#" onclick="ModalHapusGame('{{ $Get->kd_game }}')" class="btn btn-danger">Delete</a>

        </td>
    </tr>
    @endforeach
</table>

<!-- Form Modal Tambah Kontak -->
<form action="Game/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahGame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Game</label>
                <input type="text" class="form-control" name="kd_game" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Game</label>
                <textarea name="nama_game" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
    <label class="form-label">Link Game</label>
    <input type="text" class="form-control" name="link_game" required>
</div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Tambah Kontak -->

<!-- Form Modal Hapus Kontak-->
<form action="game/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusGame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="kd_game">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Kontak-->

  <!-- Form Modal Edit Kontak -->
<form action="game/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditGame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Game</label>
                <input type="text" class="form-control" name="kd_game" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Game</label>
                <input type="text" class="form-control" name="nama_game"  required>
            </div>
            <div class="mb-3">
    <label class="form-label">link Game</label>
    <input type="text" class="form-control" name="link_game" required>
</div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Edit Berita -->





<script>

    // Modal Tambah Kontak
    function ModalTambahGame () {
           $('#ModalTambahGame').modal('show');
       }
    // Modal Tambah Kontak

    // Modal Hapus Kontak
    function ModalHapusGame ($id) {
            $('[name="kd_game"]').val($id);
           $('#ModalHapusGame').modal('show');
       }
    // Modal Hapus Kontak

    // Modal Edit Berita
    function ModalEditGame (id,nama) {
    
    $('[name="kd_game"]').val(id);
    $('[name="nama_game"]').val(nama);
   $('#ModalEditGame').modal('show');
}
// Modal Edit Berita



   

          
   </script>




@endsection

