<?php
  include_once('header.php');
  include_once('function.php');
  session_start();
  if (isset($_POST['go'])){
    if ($_POST['vorname'] != '' && !is_array($_POST['vorname'])){
      if ($_POST['nachname'] != '' && !is_array($_POST['nachname'])){
        if($_POST['plz'] != '' && !is_array($_POST['plz'])){
          if($_POST['adresse'] != '' && !is_array($_POST['adresse'])){
            if($_POST['wohnort'] != '' && !is_array($_POST['wohnort'])){
              if($_POST['email']!= '' && !is_array($_POST['email'])){
                if($_POST['kennwort'] != '' && !is_array($_POST['kennwort'])){
                  if(isset($_POST['geschlecht'])){
                  anderenkunden($_SESSION['kundennummer'], $_POST['nachname'],$_POST['vorname'],$_POST['geschlecht'], $_POST['adresse']
                  , $_POST['plz'], $_POST['wohnort'],$_POST['email'],$_POST['bankkonto'],$_POST['kennwort'] );
                }
                }
              }
            }
          }
          }
        }
      }
     }

 ?>
<body>

  <header>
<div class="collapse bg-dark" id="navbarHeader">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">About</h4>
        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
      </div>
      <div class="col-sm-4 offset-md-1 py-4">
        <h4 class="text-white">Contact</h4>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Follow on Twitter</a></li>
          <li><a href="#" class="text-white">Like on Facebook</a></li>
          <li><a href="#" class="text-white">Email me</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="navbar navbar-dark bg-dark shadow-sm">
  <div class="container d-flex justify-content-between">
    <a href="to_index.php" class="navbar-brand d-flex align-items-center">
      <img alt="Shoe Market" class="img-fluid" width="15%" height="15%" src="Anmerkung 2020-06-19 064822.png">
      <strong>Gestionnaire</strong>
    </a>

    <a href="https://www.facebook.com/ghali.rasoul" class="navbar-brand d-flex align-items-center">
       <img alt="Shoe Market" width="25" height="25px" s class="img-fluid" src="https://www.facebook.com/images/fb_icon_325x325.png">
    </a>
    <a href="tel:(781) 749-5411" class="navbar-brand d-flex align-items-center">
      <strong Type = "text " onclick="ga('send', 'event', { eventCategory: 'general', eventAction: 'click to call', eventLabel: 'lead', eventValue: 1});">(0049) 12345567</strong>
    </a>

    <a href="index.php" class="navbar-brand d-flex align-items-center">
      <strong >Abmelden</strong>
    </a>

    <a href="acuont.php">  <img alt="Shoe Market" class="img-fluid" width="35" height="35" src="3.png"></a>
    <a href="warenkorb.php" ><img alt="Shoe Market" class="img-fluid" width="35" height="35" src="warenk.png">

  </div>
</div>
    <a  id="m-logo"><img alt="Shoe Market" class="img-fluid" width="1550" height="50"class="img-fluid" src="acount2.png"> </a>
    <div class="container">
      <div class="py-5 text-center">

    <h2>Ihre gespeicherten Daten</h2>
    <p class="lead">Hier können Sie Ihre perönliche Daten ändern.</p>
  </div>
  </div>
</header>

<main role="main">
           <div class="col-md-8 order-md-1">
             <h4 class="mb-3">Ihre persönlichen Daten (Felder mit * sind notwedig)</h4>
             <form class="needs-validation" novalidate action="datenaedern.php" method="post">
               <?php  $kunde =  getkunden($_SESSION['kundennummer']); // kunden ändern?>
                <hr class="mb-4">
               <div class="row">
                 <div class="col-md-6 mb-3">
                   <label for="firstName">Vorname*</label>
                   <input type="text" name ="vorname" class="form-control" id="Vorname" placeholder="" value="<?php echo $kunde['vorname']; ?>" required>
                   <div class="invalid-feedback">
                     Bitte geben Sie Ihren Vorname ein.
                   </div>
                 </div>
                 <div class="col-md-6 mb-3">
                   <label for="lastName">Nachname*</label>
                   <input type="text" name ="nachname" class="form-control" id="Nachname" placeholder="" value="<?php echo $kunde['name']; ?>" required>
                   <div class="invalid-feedback">
                     Bitte geben Sie Ihren Nachname ein.
                   </div>
                 </div>
                 <div class="col-md-6 mb-3">
                   <label for="lastName">Geschlecht*</label>
                    <input type="radio" name ="geschlecht" id="Geschlecht" value="m" /> m
                    <input type="radio" name ="geschlecht" id="Geschlecht" value="w" />w<br />
                    <div class="invalid-feedback">
                      Bitte geben Sie Ihren Geschlecht ein.
                    </div>
                 </div>
               </div>
               <div class="mb-3">
                 <label for="address">Adresse*</label>
                 <input type="text" name ="adresse" class="form-control" id="Adresse" placeholder="" value="<?php echo $kunde['adresee']; ?>" required>
                 <div class="invalid-feedback">
                   Bitte geben Sie Ihren Adresse ein.
                 </div>
               </div>

               <div class="row">
                 <div class="col-md-5 mb-3">
                   <label for="country">Stadt*</label>
                   <input type="text" name ="wohnort" class="form-control" id="Stadt" placeholder="" value="<?php echo $kunde['wohnort']; ?>" required>
                   <div class="invalid-feedback">
                     Bitte geben Sie Ihren Stadt ein.
                   </div>
                 </div>
                 <div class="col-md-5 mb-3">
                   <label for="country">PLZ*</label>
                   <input type="text"name ="plz" class="form-control" id="plz" placeholder="" value="<?php echo $kunde['plz']; ?>" required>
                   <div class="invalid-feedback">
                     Bitte geben Sie Ihren PLZ ein.
                   </div>
                 </div>
               </div>
               <div class="mb-3">
                 <label for="address">Bankkonto*</label>
                 <input type="text" name ="bankkonto" class="form-control" id="bankkonto" placeholder="" value="<?php echo $kunde['bankkonto']; ?>" required>
                 <div class="invalid-feedback">
                   Bitte geben Sie Ihren Bankkonto ein.
                 </div>
               </div>

               <hr class="mb-4">
               <div class="mb-3">
                 <label for="email">E-Mail-Adresse*</label>
                 <input type="email" name ="email" class="form-control" id="email" placeholder="" value="<?php echo $kunde['e_mail']; ?>">
                 <div class="invalid-feedback">
                   Bitte geben Sie Ihren E-Mail-Adresse ein.
                 </div>
               </div>
               <div class="mb-3">
                 <label for="email">Kennwort*</label>
                 <input type="email" name ="kennwort" class="form-control" id="Passwort" placeholder="" value="<?php echo $kunde['kennwort']; ?>">
                 <div class="invalid-feedback">
                   Bitte geben Sie Ihren Passwort ein.
                 </div>
               </div>
               <hr class="mb-4">
               <button class="btn btn-primary btn-lg btn-block"  name="go" type ="submit" >Ändern</button>
               <a type="text" class="btn btn-primary btn-lg btn-block"  href="acuont.php"><</a>
             </form>
           </div>
         </div>


</main>



<?php
  include_once('footer.php');
 ?>
