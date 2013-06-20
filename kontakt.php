<?php

function getErrorInfo()
{
  $info= ' get : '.print_r($_GET, true).' post '.print_r($_POST, true);
  $info .= ' session : '.print_r($_SESSION, true);
  $info .= ' client '.$_SERVER['REMOTE_ADDR'];
  return $info;
}

function sendErrorMail($message)
{
   error_log($message.getErrorInfo());
   error_log($message.getErrorInfo(), 1, "ana.oleski@gmail.com");
}

function sendEmail($name, $email, $phonenumber, $message) {

    $text = "Name: $name, Email: $email, Telefon: $phonenumber, Nachricht:$message" ;


    $from = "no-reply@kitaharmsstrasse.de";
    $header = "From:" . $from. "\r\n";
    $header .= 'Cc:ana.oleski@gmail.com' . "\r\n";
    $subject= "Kontaktanfrage kitaharmmstrasse.de";
    $to= "kitaharmsstrasse@web.de";
	# Mail it out
	$success= mail($to, $subject, $text, $header);
	if (!$success)
	{
	     sendErrorMail("Fehler in kitaharmstrasse.de/kontakt.php : Emailversand (to = $to header = $header ) hat nicht geklappt. ");
	     return ("Es gab einen Fehler auf dem Server bei der Verarbeitung des Formulars. Bitte schicken Sie direkt eine Mail an kitaharmsstrasse@web.de");
	}
	else
	{
	   return ' <h3 class="Stil1">Vielen Dank!<br /> <br /> Ihre Nachricht wurde erfolgreich übermittelt.</h3>  <h3 class="Stil1">Unser Team wird sich ggf. bei Ihnen melden.</h3><p/><h3 class="Stil1"><a href="kontakt.php">Formular erneut anzeigen</a> </h3>';
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>KiTa Harmsstrasse - Unsere Kinder - Unsere Zukunft!</title>
<META NAME="author" CONTENT="KiTa Harmsstrasse">
<META NAME="expires" CONTENT="NEVER">
<META NAME="publisher" CONTENT="KiTa Harmsstrasse">
<META NAME="copyright" CONTENT="KiTa Harmsstrasse">
<META NAME="page-topic" CONTENT="Kita in Hamburg-Harburg">
<META NAME="keywords" CONTENT="KiTa Harmsstrasse Kindergarten Krippe Kinderbetrauung Kinder Harburg Hamburg">
<META NAME="description" CONTENT="KiTa Harmsstrasse - TOP Kindergarten im Süden Hamburgs - Unsere Kinder sind die Wichtigste Investition in die Zukunft!">
<META NAME="page-type" CONTENT="nicht Kommerzielle ">
<META NAME="audience" CONTENT="Alle">
<META NAME="robots" CONTENT="INDEX,FOLLOW">

<link href="kitastyleroot.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    <script src="Scripts/jquery.js"></script>
    <script src="Scripts/jquery.validate.js"></script>
</head>

<body>

<div align="center">
  <table width="980" height="240" border="0" cellpadding="0" cellspacing="0" background="images/titlepic01-980.jpg" id="titletab">
    <tr>
      <td width="0" height="0" valign="bottom">&nbsp;</td>
    </tr>
    <tr>
      <td width="0" height="0" valign="bottom"><table width="980" border="0" align="center" cellpadding="0" cellspacing="0" id="tablenav">
        <tr>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom"><a href="kita_cms_index.html" target="_self">Startseite</a></td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td align="center" valign="bottom">&nbsp;</td>
        </tr>
        <tr>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom">&nbsp;</td>
          <td height="0" align="center" valign="bottom"><a href="kita_cms_kontakt_anmeldung_formular.html" target="_self">Kontakt</a></td>
          <td align="center" valign="bottom">&nbsp;</td>
        </tr>
        <tr>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom"><a href="kita_cms_specials.html" target="_self">Specials</a></td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="middle"><a href="kita_cms_jahresplan_termine.html" target="_self">Jahresplan<br />
          </a></td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="top"><a href="kita_cms_galerie.html" target="_self">Galerie</a></td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td height="40" align="center" valign="bottom">&nbsp;</td>
          <td align="center" valign="bottom">&nbsp;</td>
        </tr>
        <tr>
          <td width="40" height="44" align="center" valign="bottom">&nbsp;</td>
          <td width="76" align="center" valign="bottom"><a href="kita_cms_index1.html" target="_self">Über<br />
            Uns</a></td>
          <td width="35" align="center" valign="bottom">&nbsp;</td>
          <td width="67" align="center" valign="bottom"><a href="kita_cms_unserverein.html" target="_self">Unser<br />
            Verein</a></td>
          <td width="37" align="center" valign="bottom">&nbsp;</td>
          <td width="65" align="center" valign="bottom"><a href="kita_cms_unserhaus.html" target="_self">Unser<br />
            Haus</a></td>
          <td width="40" align="center" valign="bottom">&nbsp;</td>
          <td width="72" align="center" valign="middle"><a href="kita_cms_unseregruppen.html" target="_self">Unsere<br />
            Gruppen</a></td>
          <td width="32" align="center" valign="bottom">&nbsp;</td>
          <td width="48" align="center" valign="top"><a href="kita_cms_unseralltag.html" target="_self">Unser<br />
            Alltag</a></td>
          <td width="23" align="center" valign="bottom">&nbsp;</td>
          <td width="31" align="center" valign="bottom">&nbsp;</td>
          <td width="67" align="center" valign="bottom"><a href="kita_cms_specials.html" target="_self"></a></td>
          <td width="25" align="center" valign="bottom">&nbsp;</td>
          <td width="84" align="center" valign="bottom"><a href="kita_cms_jahresplan_termine.html" target="_self"></a></td>
          <td width="34" align="center" valign="bottom">&nbsp;</td>
          <td width="53" align="center" valign="bottom"><a href="kita_cms_galerie.html" target="_self"></a></td>
          <td width="34" align="center" valign="bottom">&nbsp;</td>
          <td width="65" align="center" valign="bottom"><a href="kita_cms_kontakt_anmeldung_formular.html" target="_self"></a></td>
          <td width="52" align="center" valign="bottom">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="center"><br />
  <table width="900" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td align="left" valign="top"><h1>Kontakt </h1>
        <table width="880" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td width="407" valign="top"><p>Anschrift <br />
            </p>
              <p><strong>KiTa Harmsstraße </strong><br />
Harmsstraße 21 <br />
              21073 Hamburg </p>
              <p> Tel. 040/ 767 545 12 <br />
              Fax: 040/  767 585 69</p>
              <p>email: kitaharmsstrasse@web.de</p>
<p><img src="images/moderndesign.jpg" alt="moderndesign" name="moderndesign" width="400" height="35" id="moderndesign" /></p>
<h2>Anfahrt / Wegbeschreibung</h2>
              <p><strong>Mit dem Auto:</strong> Die  Harmsstrasse geht von der Bremer Straße ab. Wenn sie in Richtung Harburg-Zentrum  fahren, liegt die Harmsstrasse auf der rechten Seite. <br />
                  <br />
                  <strong>Mit den ÖPNV:</strong> Der Weg vom  Harburger S- und Fernbahnhof zu uns beträgt ca. 15 Gehminuten, von der  S-Bahn-Station Rathaus ca. 10 Minuten. Die Buslinien 144, 145, 245 und 340  halten in der Bremer Straße, Haltestelle Harmstraße. Von dort sind es zu Fuß 5  Minuten bis zu unserer Einrichtung.</p></td>
            <td width="461" valign="top" ><div align="right" >
            <?php
            if(isset($_POST["submit"]) && $_POST["submit"]=="Abschicken")
            {

               $result =   sendEmail($_POST["name"],$_POST["email"],$_POST["phonenumber"] , $_POST["message"]);
               echo $result;
            }
            else
            {
            ?>
                <script type="text/javascript">$(document).ready(function() {$("#contactform").validate();});</script>
               <form name="contactform"  method="post" >
                   <div>
                   <label for="name">Name: </label>
                   <input type="text" class="required " style=" " id="name" name="name" value="" maxlength="50" />
                   </div>
                   <div>
                   <label for="email">E-Mail: </label>
                   <input type="text" class="required email " style=" " id="email" name="email" value="" maxlength="100" />
                   </div>
                   <div>
                   <label for="phonenumber">Telefon: </label>
                   <input type="text"  id="phonenumber" name="phonenumber" value="" maxlength="30" />
                   </div >
                   <p/>
                    <div>
                    <label for="message">Ihre Nachricht:</label>
                     <textarea rows="8" cols="50" id="message" name="message" class="required " ></textarea>
                     </div>
                   <div class="center">
                   <input type="submit" value="Abschicken" name="submit" class="submit">
                   </div>
               </form>
              </div>
              <?
              }
              ?>
              </td>
          </tr>
        </table>
        <h2>Wie kommt Ihr Kind in den Kindergarten? </h2>
        <p>Zunächst sollten Sie sich  erkundigen, ob Plätze in unserer Einrichtung frei sind. Da wir keine  regelmäßigen Anmeldetermine anbieten, rufen Sie uns doch einfach unter 040 -  767 545 12 an, faxen Sie uns unter 040 - 767 585 69, nutzen Sie unsere E-Mail-  Adresse kitaharmsstrasse@web.de oder kommen Sie doch ganz einfach vorbei. Wir  informieren Sie umfassend über die Einrichtung und unsere Arbeit, zeigen Ihnen  das Haus sowie das Außengelände und geben Auskunft über das Verfahren der  Platzvergabe.<br />
          Wenn Sie sich dann für uns  entschieden haben, gehen Sie mit unserer vorläufigen Platzzusage zu Ihrem  zuständigen Jugendamt. Das Jugendamt prüft Ihren Anspruch und bewilligt den  Kindergartenplatz, gleichzeitig werden Ihre Einkommensverhältnisse geprüft.  Daraus ergibt sich dann der Elternbeitrag als ihr Eigenanteil. Die restliche Finanzierung  erfolgt durch das Amt für Jugend direkt an uns. <br />
          Nach der Bewilligung schließen Sie  dann mit uns einen Vertrag zur Betreuung Ihres Kindes.<br />
<p><strong>Haftungsausschluss:</strong> <br />
Trotz sorgfältiger inhaltlicher Kontrolle übernehmen wir keine Haftung für die  Inhalte externer Links. Für den Inhalt der verlinkten Seiten, die Einhaltung  der Bestimmungen des Datenschutzes, des Urheberrechtes und der Markenrechte  sind ausschließlich deren Betreiber verantwortlich.</p>
<p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p><strong>PDF- Download Anmeldeformular</strong> <a href="Download/AnmeldungKTH_27-1-2008.pdf" target="_blank"><img src="images/downloadbutton.png" alt="Download" name="Anmeldung" width="65" height="16" border="0" usemap="#Anmeldung" id="Anmeldung" /></a></p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<div align="center">
  <table width="980" height="127" border="0" cellpadding="0" cellspacing="0" background="images/downline-980_kon.png" id="downtab">
    <tr>
      <td valign="top"><p align="center"> <span class="undertext"></span><br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <span class="Stil1">•</span> KiTa Harmsstraße • Harmsstraße 21 • 21073 Hamburg • Tel. 040/ 767 545 12 • Fax: 040/  767 585 69<br />
      </p></td>
    </tr>
  </table>
</div>
</body>
</html>
