<html>

<head>
<title>Biodata </title>
</head>
<body style="background-color:silver">
<table border="1" style="width: 700px;">
<tr><td align="center" colspan="3" bgcolor="red"><font color="blue" size="20px">
<b>BIODATA</b>
</font></td></tr>
<tr>
<td rowspan="5" width="100px">
<img src="wdi.jfif" width="150px" height="200px" border="2">
</td>
<td bgcolor="#0000FF">NAMA </td>
<td> widiyanti rahayu </td>
</tr>
<tr>
<td bgcolor="#0000FF"> UMUR </td>
<td> 16 TAHUN </td>
</tr>
<tr>
<td bgcolor="#0000FF"> ALAMAT </td>
<td> surantaka </td>
</tr>
<tr>
<td bgcolor="#0000FF"> HOBI </td>
<td> MEMBACA DAN MENULIS </td>
</tr>
<tr>
</table>
</body>

<?php

//membuat array
$barang = ["meja", "penggaris","pulpen"];

// menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    echo $isi."<br>";
}

echo "<hr>";

//menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}
?>