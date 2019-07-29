<?php
include("../template/header.php");
include("../template/navbar.php");
?>
<!-- start main -->
<main role="main">
    <!-- Start Container -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-3 mt-4">
                <div class="card">
                    <!-- Start Form -->
                    <form action="../../controller/siswa/daftar.php" method="post">
                        <div class="card-header">
                            <h2 class="text-center">Daftar Akun Siswa</h2>
                        </div>
                        <div class="container pt-4 pb-2">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Masukkan Nama Lengkap" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Masukkan Email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Masukkan Password" class="form-control" id="pass" name="pass">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <input class="btn btn-lg btn-primary" value="Daftar" type="submit" name="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Finish Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- Finish container -->
</main>
<!-- Finish main -->
<?php
include("../template/footer.php");
?>