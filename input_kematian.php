<?php
include("menu.html");
 ?>
<br><br>
<center>
	<p>PENDATAAN KEMATIAN</p>
<table border="2">
<tr><td>Nama Lengkap</td>
<td><input type="text" name="nama"></td></tr>
<tr><td>No KTP/NIK</td>
<td><input type="number" name="number"></td></tr>
<tr><td>Tempat, Tgl Lahir</td>
<td><input type="text" name="tll"></td></tr>
<tr><td>Jenis Kelamin</td>
<td><select name="s1">
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<tr><td>Agama</td>
<td><select name="s2">
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Katolik">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
</select>
<tr><td>Alamat</td>
<td><textarea name="Alamat" rows=3 cols=21>
</textarea></td></tr>
<tr><td>Tempat, Tgl Kematian</td>
<td><input type="text" name="tll"></td></tr>
<tr><td>Penyebab Kematian</td>
<td><input type="text" name="penyebab"></td></tr>
</select>
<td><input type="submit" value="KIRIM"></td>
<td><input type="reset" value="RESET"></td/tr>
</table>
</center>
