<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Acasa</title>
</head>

<body>
</body>
  <?php
  include("page_top_logat.php");
  ?>

<div class="mbody">
   <div class="info">
       <i class="bi bi-person-circle account"> <a href="account.php" class="cont">Account</a></i>
       <i class="bi bi-telephone phone"><a href="#" class="telefon"> 0250868339</a></i>
        <a href="detalii_destinatii.php" class="tour">Detalii destinatii turistice</a>
    </div>

    <div class="line"></div>

    <div class="content">
      <h3 style="text-align: center;">Galerie de imagini</h3>
      <div class="image">
        <div class="gallery">
          <a href="japan.php">
            <img src="japan.jpg" alt="Japan picture" width="600" height="400">
          </a>
          <div class="description">O vacanta minunata in Japonia</div>
        </div>
      </div>

      <div class="image">
        <div class="gallery">
          <a href="dubai.php">
            <img src="dubai.jpg" alt="Dubai picture" width="600" height="400">
          </a>
          <div class="description">O vacanta minunata in Dubai</div>
        </div>
      </div>

      <div class="image">
        <div class="gallery">
          <a href="germany.php">
            <img src="nurnberg.jpg" alt="Nurnberg picture" width="600" height="400">
          </a>
          <div class="description">O vacanta minunata in Germania</div>
        </div>
      </div>

      <div class="image">
        <div class="gallery">
          <a href="caraibe.php">
            <img src="caribbean.jpg" alt="Caraibe pic" width="600" height="400">
          </a>
          <div class="description">O vacanta minunata in Caraibe</div>
        </div>
      </div>

      <div class="image">
        <div class="gallery">
          <a href="#">
            <img src="beachc.jpg" alt="Beach pic">
          </a>
          <div class="description">O vacanta la mare</div>
        </div>
      </div>

      <div class="image">
        <div class="gallery">
          <a href="#">
            <img src="casino.jpg" alt="Casino Constanta" width="600" height="400">
          </a>
          <div class="description">O vacanta in Romania</div>
        </div>
      </div>
    </div>

    <div class="line"></div>

  <?php 
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"travel_ag");
    
    $sql = "SELECT * FROM orase";
    $sql1 = "SELECT * FROM destinatie";
    $sql2 = "SELECT * FROM firme_transport";
    $res = $conn -> query($sql);
    $res1 = $conn -> query($sql1);
    $res2 = $conn -> query($sql2);
    ?>

    <div class="content">
        <div class="head">Rezerva o vacanta acum!</div>
        <form method="post" action="rezervare.php">
            <div class="form_input">
                <label>Destinatie</label>
                <select name="destinatiee">
                  <?php 
                  while($row = $res1->fetch_assoc()){
                    $destinatie = $row['destinatie'];
                    echo "<option value='$destinatie'>$destinatie</option>";}
                  ?>
                </select>
            </div>
            <div class="form_input">
                <label>Orasul de plecare</label>
                <select name="orasel">
                  <?php 
                  while($row = $res->fetch_assoc()){
                    $oras = $row['oras'];
                    echo "<option value='$oras'>$oras</option>";}
                  ?>
                </select>
            </div>
            <div class="form_input">
                <label>Firma de transport</label>
                <select name="transportare">
                  <?php 
                  while($row = $res2->fetch_assoc()){
                    $transport = $row['firma_transport'];
                    echo "<option value='$transport'>$transport</option>";}
                  ?>
                </select>
            </div>
            <div class="form_input">
              <input type="text" name="nume" placeholder="Nume">
            </div>
            <div class="form_input">
              <input type="text" name="prenume" placeholder="Prenume">
            </div>
            <div class="form_input">
              <input type="text" name="email" placeholder="Adresa de e-mail">
            </div>
            <div class="form_input">
                <button type="submit" class="btn" name="login_btn">Rezerva</button>
            </div>
        </form>
        <div class="line"></div>
    </div>

    <div class="line"></div>

    <div class="line"></div>
    <?php 
      include("bottom_page.php")
    ?>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>