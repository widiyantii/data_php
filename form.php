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

<form action="proses-form-pendaftaran.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div>
        <label>Email</label> <br>
        <input type="email" name="email">
    </div>
    <div>
        <label>Usia</label> <br>
        <input type="number" name="usia">
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal_lahir">
    </div>
    <div>
        <label>Alamat</label> <br>
        <textarea name="alamat"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="l"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="p"> Perempuan
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Status</label> <br>
        <select name="status">
            <option value="lajang">Lajang</option>
            <option value="menikah">Menikah</option>
        </select>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Hobi</label> <br>
        <input type="checkbox" name="hobi[]" value="berenang"> Berenang <br>
        <input type="checkbox" name="hobi[]" value="sepak bola"> Sepak Bola <br>
        <input type="checkbox" name="hobi[]" value="bulu tangkis"> Bulu Tangkis <br>
        <input type="checkbox" name="hobi[]" value="ngoding"> Ngoding <br>
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>