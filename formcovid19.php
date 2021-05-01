<html>
<head><title>FORM DATA COVID-19</title></head>
<body>
<form action="outputdatacovid19.php" method="POST">
<H1> Form Data Pemantauan Covid-19</H1><hr>
<PRE>
Nama Wilayah	: <select name=wilayah>
 <option value="DKI Jakarta">DKI Jakarta</option>
 <option value="Jawa Barat">Jawa Barat</option>
 <option value="Banten">Banten</option>
 <option value="Jawa Tengah">Jawa Tengah</option>
 </select>

Jumlah Positif	: <input type="text" size="11" name="jmlpositif">

Jumlah Dirawat	: <input type="text" size="11" name="jmldirawat">

Jumlah Sembuh	: <input type="text" size="11" name="jmlsembuh">

Jumlah Meninggal: <input type="text" size="11" name="jmlmeninggal">

Nama Operator	: <input type="text" size="25" name="nama">

NIM Mahasiswa	: <input type="text" size="11" name="nim">

<input type="submit" value="submit" name="submit">
</form>
</body>
</html>