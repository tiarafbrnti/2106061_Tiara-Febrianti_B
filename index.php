<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Pemesanan Buket E.Florist</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kotak">
        <h1>Form Pemesanan</h1>
        <form action="./addpelanggan.php" method="post">
            <label for="nama">nama</label>
            <input type="text" name="nama" maxlength="50" class="form-input" required>

            <label for="no_hp">no_hp</label>
            <input type="tel" name="no_hp" class="form-input" required>

            <label for="alamat">alamat</label>
            <input type="text" name="alamat" maxlength="100" class="form-input" required>

            <label for="jenis_buket">jenis_buket</label>
            <select name="jenis_buket" class="form-input" required>
                        <option selected disabled>Pilih Jenis Buket</option>
                        <option value="buket_snack">Buket Snack</option>
                        <option value="buket_uang">Buket Uang</option>
                        <option value="buket_bunga">Buket Bunga</option>
                        <option value="buket_mix">Buket Mix</option>
                    </select>

            <label for="harga">harga</label>
            <input type="number" name="harga" min="30000" class="form-input" required>
                    
            <label for="tgl_diambil">tgl_diambil</label>
            <input type="date" name="tgl_diambil" class="form-input" required>

            <label for="waktu_diambil">waktu_diambil</label>
            <input type="time" name="waktu_diambil" class="form-input" required>

            <button type="submit" id="btn-kirim">kirim</button>
        </form>
    </div>
</body>
</html>
