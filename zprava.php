<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mystyle.css">
    <title>Zpráva</title> 
</head>
<body>
  <?php
  $jmeno = addslashes($_POST["jmeno"]);
  $email = addslashes($_POST["email"]);
  $predmet = addslashes($_POST["predmet"]);
  $zprava = addslashes($_POST["zprava"]);
  $adresa = "janazadrazilova@seznam.cz";  
  
  $text_zpravy = 'Jméno: ' . $jmeno . "\n";
  $text_zpravy .= 'Email: ' . $email . "\n";
  $text_zpravy .= 'Predmet: ' . $predmet . "\n";
  $text_zpravy .= 'Zprava: ' . $zprava . "\n";
  

  if(mail($adresa, $predmet, $text_zpravy)) {
    echo '
    <section>
      <div class="container pt-5">
        <h2 class="fst-italic">Zpráva odeslána. Děkuji.</h2>
        <div class="mt-3">
          <a href="index.html" class="mybutton2 btn">Zpět</a>
        </div>
      </div>  
    </section>'
  ;} else {
    echo '
    <section>
      <div class="container pt-5">
        <h2 class="fst-italic">Odeslání zpávy bohužel nebylo možné.</h2>
        <div class="mt-3">
          <a href="index.html" class="mybutton2 btn">Zpět</a>
        </div>
      </div>  
    </section>'
    ;} 
  ?>  
</body>
</html>