<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100"
        style="background-color: #C1D0B5">
        <div class="card w-25" style="background-color: #D6E8DB; box-shadow: 1px 3px rgba(0,0,0,0.5)">
<<<<<<< HEAD
            <div class="card-header", style="background-color: #27374D">
=======
            <div class="card-header" style="background-color: #27374D">
>>>>>>> 2c27dd67e87ca2e4868bc21a143a4e6f1e72ef9e
                <div class="text-center">
                    <span class="text-primary h4">Form</span>
                    <span class="text-danger h5">Register</span>
                </div>
            </div>
            <div class="card-body">
                <form action="/simpan" method="POST">
                    @csrf
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="nik">Nik</label>
                        <input type="number" name="nik_user" id="nik" class="form-control"
                            placeholder="Masukan NIK" required>
=======
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="text" name="name" id="namalengkap" class="form-control" placeholder="Nama"
                            required>
>>>>>>> 2c27dd67e87ca2e4868bc21a143a4e6f1e72ef9e
                    </div>
                    <div class="form-group">
                        <label for="Nama">Username</label>
                        <input type="text" name="nama_user" id="Nama" class="form-control"
                            placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nohp">No Hp</label>
                        <input type="text" name="no_hp" id="nohp" class="form-control"
                            placeholder="Masukan No Hp" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Masukan Password" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
<<<<<<< HEAD
                            <input class="form-check-input" type="checkbox" id="gridCheck" onclick="checkPassword()">
=======
                            <input class="form-check-input" type="checkbox" id="gridCheck" onclick="myfunction()">
>>>>>>> 2c27dd67e87ca2e4868bc21a143a4e6f1e72ef9e
                            <label class="form-check-label" for="gridCheck">
                                Lihat Password
                            </label>
                        </div>
                    </div>
                    <script>
<<<<<<< HEAD
                        function checkPassword() {
                            var pass = document.getElementById("password").type;
                            if (pass == "password") {
                                document.getElementById("password").type = "text";
                            } else {
                                document.getElementById("password").type = "password";
=======
                        function myfunction() {
                            var pass = document.getElementById('password').type;
                            if(pass == 'password'){
                                document.getElementById('password').type = 'text';
                            }else{
                                document.getElementById('password').type = 'password';
>>>>>>> 2c27dd67e87ca2e4868bc21a143a4e6f1e72ef9e
                            }
                        }
                    </script>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50">Sign-Up</button>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <a class="btn btn-primary w-50" href="/login">Sudah Punya Akun</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
