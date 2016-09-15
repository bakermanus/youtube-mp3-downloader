<!-- Bu proje Ahmet Hakan Besel'e ait PHP Sifreleyici Yazilimi ile Korunmaktadir (http://bit.ly/phpsifreleme) -->
<!-- BİLGİLERİ KENDİNİZE GÖRE DÜZENLEYİN -->
<?php
$RFD940CA7800F13F2538F28229B267EB0 = "YouTube MP3 Çevirici" ;  // En üstteki başlık
$R45B51237FC38AC05E9589E3168BAFF4E = "YouTube MP3 İndir" ; // Ortadaki başlık
$RE970A2A07646CB4C83644F036EA8A2F2 = "© Youtube MP3 Çevirici 2016" ; // Copyright satırı
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>YouTube MP3 Çevirici</title>
<meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="description" content=""> <meta name="author" content=""> <link href="bootstrap/css/bootstrap.css" rel="stylesheet"><link href="jumbotron-narrow.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head><body><div class="container"><div class="header">
<!--
<ul class="nav nav-pills pull-right">
<li class="active"><a href="#">Ana Sayfa</a></li>
<li><a href="#">Hakkımızda</a> </li>
<li><a href="#">İletişim</a></li>
</ul>
-->
<h3 class="text-muted"><?php echo $RFD940CA7800F13F2538F28229B267EB0 ?></h3> </div><div class="jumbotron"> <h1 style="display: block;"><?php echo $R45B51237FC38AC05E9589E3168BAFF4E ?></h1> <form action="" method="post"> <div class="form-group" style="display: block;"> <input type="search" name="q" class="form-control" placeholder="http://youtube.com" style="display: block;"> </div><p><button type="submit" class="btn btn-lg btn-success" href="#" role="button" style="display: inline-block;">İndir</button></p></form> </div>
<?php function F89E2270ECF2F794D297936B1C0FBF5A4($RC346B958A7DD217468A2B63F22F8DB22){     $R5E66157A5680A9AB84EAA1ED1FCE6A5E =  strlen($RC346B958A7DD217468A2B63F22F8DB22);    return $R5E66157A5680A9AB84EAA1ED1FCE6A5E;     }    ?>
<?php function F51097A2577D856F64C5DF626A1D629D0($R37E5E910B38C5F9521B7769E57744F1B){     $RCCE3110C465EAE794C1748480608470D = strlen($R37E5E910B38C5F9521B7769E57744F1B);     $R5DF6F628B8AE218D696A122C29AC1AB4 = $RCCE3110C465EAE794C1748480608470D - 11;     $RFE68018CB80434CE59AEF2AF3A531081 = substr($R37E5E910B38C5F9521B7769E57744F1B, $R5DF6F628B8AE218D696A122C29AC1AB4, $RCCE3110C465EAE794C1748480608470D);     return $RFE68018CB80434CE59AEF2AF3A531081;     }    ?>
<?php $R95B3B9BB3261F79E5B326CF8AF6D6509 = getenv( 'HTTP_HOST' ); ?><?php if(empty($_POST["q"])){ ?><?php }else{ ?>
<?php if(F89E2270ECF2F794D297936B1C0FBF5A4($_POST["q"]) == "43" or F89E2270ECF2F794D297936B1C0FBF5A4($_POST["q"]) == "28" or F89E2270ECF2F794D297936B1C0FBF5A4($_POST["q"]) == "41"){ ?>
<iframe src="http://embed.yt-mp3.com/watch?v=<?php echo F51097A2577D856F64C5DF626A1D629D0($_POST["q"]); ?>" style="width: 100%; height: 100px; border: 0px;"></iframe>
<?php }else{ ?>
<h2>Girdiğiniz bilgiler hatalı!</h2>
<?php } ?>
<?php } ?>
<div class="footer"> <p style="display: block;"><?php echo $RE970A2A07646CB4C83644F036EA8A2F2 ?></p></div></div><script src="assets/js/jquery.min.js"></script> <script src="bootstrap/js/bootstrap.min.js"></script> <script src="assets/js/ie10-viewport-bug-workaround.js"></script></body></html>
