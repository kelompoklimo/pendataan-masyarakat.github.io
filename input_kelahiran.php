<?php
include("menu.html");
 ?>
<br><br>
<center>
	<p>PENDATAAN KELAHIRAN</p>
<table border="1">
<tr><td>Nama Lengkap</td>
<td><input type="text" name="nama"></td></tr>
<tr><td>Tempat, Tgl Lahir</td>
<td><input type="text" name="tll"></td></tr>
<tr><td>Jenis Kelamin</td>
<td><select name="s1">
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<tr><td>Anak Ke</td>
<td><select name="s2">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
<tr><td>Agama</td>
<td><select name="s3"><
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Katolik">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
</select>
<tr><td>Nama Ayah</td>
<td><input type="text" name="Ayah"></td></tr>
<tr><td>Nama Ibu</td>
<td><input type="text" name="Ibu"></td></tr>
<tr><td>Tinggi Badan</td>
<td><input type="text" name="angka"></td></tr>
<tr><td>Berat Badan</td>
<td><input type="text" name="angka"></td></tr>
<tr><td>Alamat</td>
<td><textarea name="Alamat" rows=5 cols=21>
	</textarea></td></tr>
<td><input type="submit" value="KIRIM"></td>
<td><input type="reset" value="RESET"></td/tr>
</table></center>

</body>
</html>
