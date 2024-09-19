<html>
    <body>
        <h1>Form Ubah Data User</h1>
        <form action="/user/ubah_simpan/{{$data->user_id}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" value="{{$data->username}}">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama" value="{{$data->username}}">
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" value="{{$data->password}}">
            <br>
            <label>Level ID</label>
            <input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{$data->level_id}}">
            <br><br>
            <input type="Submit" class="btn btn-success" value="ubah">
        </form>
    </body>
</html>