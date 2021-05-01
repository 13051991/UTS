<html>
<head>
<title>Data Pemantauan Pasien Covid-19</title>
</head>
<body>
<table cellspacing="2" cellpadding="2" border="1" width="70%" >
<caption>Data Pemantauan Covid19 Wilayah <?php echo $_POST['wilayah'] . "<br>";
echo "Per " . date("d M Y h:i:s") . "<br>";
echo $_POST['nama'] . " / " . $_POST['nim'];
?></caption>
 <tr>
 <th width="20%" align="center">Positif</th>
 <th width="20%" align="center">Dirawat</th>
 <th width="20%" align="center">Sembuh</th>
 <th width="20%" align="center">Meninggal</th>
 </tr>
 <tr>
 <td width="20%" align="center"><?php echo $_POST['jmlpositif'];?></td>
 <td width="20%" align="center"><?php echo $_POST['jmldirawat'];?></td>
 <td width="20%" align="center"><?php echo $_POST['jmlsembuh'];?></td>
 <td width="20%" align="center"><?php echo $_POST['jmlmeninggal'];?></td>
 </tr>
 </tr>
</table>
</body
</html>