<?php 
if (isset($_POST['submit'])) {
  $playerage = $_POST['playerage'];
  $battletag = $_POST['battletag'];
  $loglink = $_POST['loglink'];
  $charname = $_POST['charname'];
  $armorylink = $_POST['armorylink'];
  $charclass = $_POST['charclass'];
  $mainspec = $_POST['mainspec'];
  $offspec = $_POST['offspec'];
  $multispec = $_POST['multispec'];
  $description = $_POST['description'];

  $to = 'treehouserekry@gmail.com';
  $subject = 'Hakemus: ' . $charname . ' - ' . $charclass;
  $message = '
    <html>
    <head>
      <meta charset="utf-8">
      <title>Hakemus</title>
    </head>
    <body>

    <p><strong>Ikä: </strong>' . $playerage . '</p>
    <p><strong>Battletag: </strong>' . $battletag . '</p>
    <p><strong>Logit: </strong>' . $loglink . '</p>
    <p><strong>Nimi: </strong>' . $charname . '</p>
    <p><strong>Class: </strong>' . $charclass . '</p>
    <p><strong>Main-Spec: </strong>' . $mainspec . '</p>
    <p><strong>Off-Spec: </strong>' . $offspec . '</p>
    <p><strong>Valmis vaihtamaan specciä tilanteen vaatiessa?: </strong>' . $multispec . '</p>
    <p><strong>Armory: </strong>' . $armorylink . '</p><br>
    <p><strong>Lisätiedot: </strong>' . $description . '</p>

    </body>
    </html>
  ';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

  mail($to, $subject, $message, $headers);
  header('Location: http://treehouse-issues.fi/sent.php');
}
?>

<?php include 'includes/header.php' ?>

    <!-- First container -->
    <div class="container-fluid bg-1" id="first">
      <div class="col-md-3"></div>
      <div class="col-md-6">

          <h4>Haemme kokeneita pelaajia classiin tai rooliin katsomatta. Mikäli tunnistat itsesi, täytä alla oleva hakemus!</h4>

          <h3>Raidiajat</h3>
          <ul>
            <li>Keskiviikko 19-22</li>
            <li>Sunnuntai 19-22</li>
            <li>Maanantai 19-22</li>
          </ul>
          
          <h3>Mitä odotamme pelaajilta</h3>
          <ul>
            <li>Rentoa asennetta, mutta et ole kuitenkaan leväperäinen.</li>
            <li>Tunnet oman classisi ja sinulla on hyvä yleiskäsitys pelistä.</li>
            <li>Sitoutumista raidiaikoihin, eli pystyt osallistumaan suurimpaan osaan raideista.</li>
          </ul>

          <h3>Mitä voimme tarjota</h3>
          <p>Killan pitkällä historialla ja vahvalla pohjalla. Mukavan peliseuran raideilla ja aktiivisen yhteisön.</p>
          <br>
          <br>

        <form method="post" name="apply" action="">
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" min="1" max="100" name="playerage" class="form-control" placeholder="Minkä ikäinen olet?" required>
            </div>
            <div class="form-group">
              <input type="text" name="battletag" class="form-control" placeholder="Battletag, esim. Juhamieto#9283" required>
            </div>
            <div class="form-group">
              <input type="text" name="loglink" class="form-control" placeholder="Linkki logeihin. Ei pakollinen, mutta suotava.">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="charname" class="form-control" placeholder="Hahmon nimi, jolla haet kiltaan." required>
            </div>
            <div class="form-group">
              <input type="text" name="armorylink" class="form-control" placeholder="Hahmon armory-linkki." required>
            </div>  
            <div class="form-group">
              <select name="charclass" class="form-control" required>
                <option value="" disabled selected>Valitse classi</option>
                <option value="Death Knight">Death Knight</option>
                <option value="Demon Hunter">Demon Hunter</option>
                <option value="Druid">Druid</option>
                <option value="Hunter">Hunter</option>
                <option value="Mage">Mage</option>
                <option value="Monk">Monk</option>
                <option value="Paladin">Paladin</option>
                <option value="Priest">Priest</option>
                <option value="Rogue">Rogue</option>
                <option value="Shaman">Shaman</option>
                <option value="Warlock">Warlock</option>
                <option value="Warrior">Warrior</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" name="mainspec" class="form-control" placeholder="Main-Spec, esim. Resto" required>
            </div>
            <div class="form-group">
              <input type="text" name="offspec" class="form-control" placeholder="Off-Spec, esim. Resto" required>
            </div>
            <div class="form-group">
              <label for="multispec">Oletko valmis pelaamaan toisella specillä tilanteen vaatiessa?</label> <br>
              <input type="radio" name="multispec" value="Kyllä" checked> Kyllä <br>
              <input type="radio" name="multispec" value="Ei"> Ei
            </div>
          </div>
          <div class="col-md-12"> 
            <div class="form-group">
              <label for="description">Lisätietoa</label>
              <textarea name="description" placeholder="Tässä voit mainita esimerkiksi vanhoja kiltoja tai saavutuksiasi pelissä. Lisäksi voit antaa pienen kuvauksen itsestäsi." class="form-control" rows="10" required></textarea>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-md btn-default" value="Lähetä hakemus!">
            </div>
          </div>
        </form> 
      </div>
      <div class="col-md-3"></div>
    </div>

<?php include 'includes/footer.php' ?>
