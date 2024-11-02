<form action="{{ route('buku.store') }}" method="POST">
    <h1>Tambah Pinjam</h1>
    
    @csrf

    <table class="table">
        <tr>
            <td>
                <label for="nama_peminjam">Nama Peminjam</label>
            </td>
            <td>
                <input type="text" name="nama_peminjam" required class="form-control">
            </td>
        </tr>

        <tr>
            <td>
                <label for="nama_buku">Nama Buku</label>
            </td>
            <td>
                <input type="text" name="nama_buku" required class="form-control">
            </td>
        </tr>

        <tr>
            <td>
                <label for="jumlah_buku">Jumlah Buku</label>
            </td>
            <td>
                <input type="number" name="jumlah_buku" required class="form-control" min="1">
                @if ($errors->has('jumlah_buku'))
                    <div class="alert alert-danger">{{ $errors->first('jumlah_buku') }}</div>
                @endif
            </td>
        </tr>

        <tr>
            <td>
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
            </td>
            <td>
                <input type="date" name="tanggal_pinjam" required class="form-control">
            </td>
        </tr>

        <tr>
            <td colspan="2" style="text-align: right;">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </td>
        </tr>
    </table>
</form>
