<form action="update-data" method="POST">
    @csrf
    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
        <div class="col-span-12">
            <label for="pos-form-1" class="form-label">Nama Produk</label>
            <input id="pos-form-1" type="text" name="nama_produk" class="form-control flex-1" placeholder="Nama Produk">
        </div>
        <div class="col-span-12">
            <label for="pos-form-2" class="form-label">Kategori</label>
            <input id="pos-form-2" type="text" name="kategori_produk" class="form-control flex-1"
                placeholder="Makanan / Minuman ...">
        </div>
        <div class="col-span-12">
            <label for="pos-form-3" class="form-label">Jumlah</label>
            <input id="pos-form-3" type="text" name="jumlah_produk" class="form-control flex-1" placeholder="20 ...">
        </div>
        <div class="col-span-12">
            <label for="pos-form-3" class="form-label">Harga</label>
            <input id="pos-form-3" type="text" class="form-control flex-1" name="harga_produk"
                placeholder="14.000 ...">
        </div>
    </div>
    <div class="modal-footer text-right">
        <input type="clear" name="clear" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1"
            value="Batal">
        <input type="submit" name="submit" class="btn btn-primary w-32" value="Simpan">
    </div>
</form>
