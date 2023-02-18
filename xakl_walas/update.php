<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../images/icons/tc.ico"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
      body {
        width: 100%;
        height: 100vh;
        color: white;
        background-color: #292b2c;
        padding: 0;
        margin: 0;
      }

      #custom-button {
        padding: 10px;
        color: white;
        background-color: #292929;
        border-radius: 5px;
        cursor: pointer;
      }

      #custom-button:hover {
        background-color: #1a1a1a;
        transition: 0.5s;
      }

      #custom-text {
        margin-left: 10px;
        font-family: sans-serif;
        color: white;
      }

      #container {
        display: flex;
        position: relative;
        top: 50%;
        transform: translatey(-50%);
        justify-content: center;
        align-items: center;
        vertical-align: middle;
      }

      .box {
        border: none;
        background-color: #3d3d3d;
        border-radius: 7px;
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 80px;
        padding-bottom: 80px;
      }
    </style>
    <title>Input Data</title>
  </head>
  <body>
<?php 
include '../koneksi.php';
?>

<div id="container">
<form method="post" enctype="multipart/form-data" action="updateProses.php">
      <div class="box">
          <center><img src="../images/logo.png" alt="logotc" width="30%"></center>
          <br>
          <input type="file" name="datanilai" id="real-file" hidden="hidden" />
          <input type="hidden" name=id class="form-control" value="<?php echo $row['id']; ?>" disable>
          <button type="button" id="custom-button">Upload file</button>
          <span id="custom-text">Anda belum mengupload file apapun</span>
          <br><br>
          <CENTER><a href="index.php" class="btn btn-danger">Kembali</a>
          <input type="submit" value="input" name="upload" class="btn btn-primary col-3"></CENTER>
      </div>
      </form>
</div>

<?php 

if(isset($_GET['datanilai'])) {
  if($_GET['datanilai'] == "success")
  {
    echo '<script type="text/javascript">';
    echo 'alert("Nilai berhasil di input!");';
    echo 'window.location.href = "index.html?pesan=berhasil";';
    echo '</script>';
  }
  else {
    echo '<script type="text/javascript">';
    echo 'alert("Nilai gagal di input!");';
    echo 'window.location.href = "index.html?pesan=gagal";';
    echo '</script>';
  }
}

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript">
      const realFileBtn = document.getElementById("real-file");
      const customBtn = document.getElementById("custom-button");
      const customTxt = document.getElementById("custom-text");

      customBtn.addEventListener("click", function() {
        realFileBtn.click();
      });

      realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
          customTxt.innerHTML = realFileBtn.value.match(
            /[\/\\]([\w\d\s\.\-\(\)]+)$/
          )[1];
        } else {
          customTxt.innerHTML = "Upload dibatalkan";
        }
      });
    </script>
  </body>
</html>