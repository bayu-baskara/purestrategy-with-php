<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>FINAL RO</title>
  </head>
  <body>
    <div class="new">
      <!--INPUT ISI MATRIKS-->
      <?php 
        $baris=0;
        $kolom=0;
        $data=array(array());

        if(isset($_POST['btnOK']))
        {
          $baris=$_POST['baris'];
          $kolom=$_POST['kolom'];
        }
        
        if(isset($_POST['btnSimpan']))
        {
          for ($row = 0; $row < $baris; $row++) 
          {
            echo "<tr>";
            for ($col = 0; $col < $kolom; $col++) 
            {
              echo $data[$row][$col];
            }
          }
        }
        ?>
        <form method="POST" name="frm" action="">
          <input name="baris" type="number" placeholder="Input Baris" />
          <input name="kolom" type="number" placeholder="Input Kolom" />
          <input type="submit" name="btnOK" value="OK" />
        </form>
        <?php

        for ($row = 0; $row < $baris; $row++) 
        {
          echo "<tr>";
          for ($col = 0; $col < $kolom; $col++) 
          {
            echo "data[$row][$col]";
            ?>
            <form method="POST" name="frm" action="">
              <input name="data[]" type="text" size="10" />
            </form>
            <?php
          }
        }
        ?>
        <form method="post" name="frm" action="">
          <input type="submit" name="btnSimpan" value="Simpan" />
        </form>
        <?php
      ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>