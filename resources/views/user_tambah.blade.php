<html>
    <body>
        <h1>Form Tambah Data User</h1>
        <form action="/user/tambah_simpan" method="post">
            {{csrf_field()}}

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama">
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password">
            <br>
            <label>Level ID</label>
            <input type="number" name="level_id" placeholder="Masukkan ID Level">
            <br><br>
            <input type="Submit" class="btn btn-success" value="simpan">
        </form>
    </body>
</html>