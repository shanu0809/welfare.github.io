<?php


include_once("google_translate.php");
?>
<form method="post">
<table width="640" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td valign="top" align="left">
    <select name="language">
    <?php echo $default_language; ?>
        <option value="ar">Arabic</option>
        <option value="be">Belarusian</option>
        <option value="bn">Bengali</option>
        <option value="bs">Bosnian</option>
        <option value="bg">Bulgarian</option>
        <option value="ca">Catalan</option>
        <option value="zh-CN">Chinese (China)</option>
        <option value="zh-TW">Chinese (Taiwan)</option>
        <option value="hr">Croatian</option>
        <option value="cs">Czech</option>
        <option value="da">Danish</option>
        <option value="nl">Dutch</option>
        <option value="en">English</option>
        <option value="fil">Filipino</option>
        <option value="fi">Finnish</option>
        <option value="fr">French</option>
        <option value="de">German</option>
        <option value="el">Greek</option>
        <option value="gu">Gujarati</option>
        <option value="he">Hebrew</option>
        <option value="hi">Hindi</option>
        <option value="hu">Hungarian</option>
        <option value="id">Indonesian</option>
        <option value="it">Italian</option>
        <option value="ja">Japanese</option>
        <option value="kn">Kannada</option>
        <option value="ko">Korean</option>
        <option value="lv">Latvian</option>
        <option value="lt">Lithuanian</option>
       <option value="mr">Marathi</option>       
        <option value="no">Norwegian</option>
        <option value="fa">Persian</option>
        <option value="pl">Polish</option>
        <option value="pt-BR">Portuguese (Brazil)</option>
        <option value="pt-PT">Portuguese (Portugal)</option>
        <option value="ro">Romanian</option>
        <option value="ru">Russian</option>
        <option value="sr">Serbian</option>
        <option value="sk">Slovak</option>
        <option value="sl">Slovenian</option>
        <option value="es">Spanish</option>
        <option value="sv">Swedish</option>
        <option value="sw">Swahili</option>
        <option value="ta">Tamil</option>
        <option value="te">Telugu</option>
        <option value="th">Thai</option>
        <option value="tr">Turkish</option>
        <option value="uk">Ukrainian</option>
        <option value="vi">Vietnamese</option>
      </select>
    </td>   
    </tr>
    <tr>
     <td valign="top" align="left">
      <input name="submit" type="submit" value="Translate" /></td>
  </tr>
 </table>
</form>