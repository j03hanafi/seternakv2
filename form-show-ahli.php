<?php 
include 'koneksi.php';
// $username =$_GET['username'];
session_start();
if($_SESSION['role']!="3"){
header("location:login.php?pesan=gagal");
}
$username = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- owl caurasl min.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- owl caurasel Theme.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- icon boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <title>Seternak</title>

  <?php

  include('layout/admin-navbar.php');
  include('koneksi.php');

  if (isset($_GET['id_ahli'])) {
    $id_ahli = $_GET['id_ahli'];
    $sql = pg_query("SELECT * FROM ahli where id_ahli='" . $id_ahli . "'");
    $user_data = pg_fetch_array($sql);

  ?>
  <?php

  }

  ?>



</head>

<body>
  <!-- Navbar -->

  <!-- Navbar -->


  <!-- Awal Body -->

  <div class="container-lg mt-5">

    <form action="function/edit-ahli.php" method="post" enctype="multipart/form-data">

      <div class="row">
        <div class="col-md-12 mt-5 mb-5">
          <div class="card shadow-sm bg-body rounded">
            <div class="card-header shadow-sm bg-body rounded" style="background-color: white;">
              <div class="card-title ps-3 fw-bold">Form Detail Ahli</div>
            </div>
            <div class="card-body">


              <div class="row">

                <div class="mb-3 pe-5 ps-5">
                  <label for="id_ahli" class="form-label">ID Ahli</label>
                  <input type="text" class="form-control" id="id_ahli" name="id_ahli" value="<?php echo $user_data['id_ahli']; ?>" disabled>
                </div>



                <div class="mb-3 pe-5 ps-5">
                  <label for="nama_ahli" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama_ahli" name="nama_ahli" value="<?php echo $user_data['nama_ahli']; ?>" disabled>
                </div>

                <div class="mb-3 pe-5 ps-5">
                  <label for="nip" class="form-label">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $user_data['nip']; ?>" disabled>
                </div>

                <div class="mb-3 pe-5 ps-5">
                  <label for="jabatan" class="form-label">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $user_data['jabatan']; ?>" disabled>
                </div>

                <div class="mb-3 pe-5 ps-5">
                  <label for="contact" class="form-label">Contact</label>
                  <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $user_data['contact']; ?>" disabled>
                </div>

                <div class="mb-3 pe-5 ps-5">
                  <label for="jam_available" class="form-label">Jam Available</label>
                  <input type="text" class="form-control" id="jam_available" name="jam_available" value="<?php echo $user_data['jam_available']; ?>" disabled>
                </div>


                <div class="mb-3 pe-5 ps-5">
                  <label for="foto" class="form-label">Foto</label>
                  <div>
                    <img src="upload/<?php echo $user_data['foto']; ?>" alt="" style="width: 100px;height:100px;">
                  </div>

                </div>

                <div class="mb-3 pe-5 ps-5">
                  <label for="video" class="form-label"> Video</label>
                  <div>
                    <video id="video" width="250" height="200" controls>
                      <source src="video_upload/<?php echo $user_data['video']; ?>">
                    </video>
                  </div>

                </div>


              

                <div class="mb-3 pe-5 ps-5">
                  <label for="deskripsi_ahli" class="form-label">Deskripsi Ahli</label>
                  <textarea class="form-control" id="deskripsi_ahli" name="deskripsi_ahli" rows="3" disabled><?php echo $user_data['deskripsi_ahli']; ?></textarea>
                </div>
             

              <div class="mb-3 pe-5 ps-5" style="padding-right: 10px;">
                <label for="profil_singkat" class="form-label">Profil Singkat</label>
                <textarea class="form-control" id="profil_singkat" name="profil_singkat" rows="3" disabled><?php echo $user_data['profil_singkat']; ?></textarea>
              </div>

              
            </div>
            
          </div>

        </div>
      </div>


      </div>




  </form>
  </div>







  <!-- Footer -->
  <?php include('layout/admin-footer.php'); ?>
  <!-- Footer end -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->
  <!-- <script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script> -->
  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- owl cousel min.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>