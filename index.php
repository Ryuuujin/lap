<!DOCTYPE html>
<html>
<head>
  <title>ukk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="logo">
        <img src="logo.png" alt="Logo">
      </div>
      <div class="deskripsi">
        <h1>REKAP NILAI PESERTA DIDIK</h1>
        <h3>SMK ADI SANGGORO</h3>
        <h3>TP.2024/2025</h3>
      </div>
    </div>
   
    <h2>Data Guru</h2>
    <form action="" method="POST">
        <label for="nama">Nama Guru:</label>
        <input type="text" name="gr" value="" required><br><br>
        <label for="mapel">Mapel:</label>
        <input type="text" name="mapel" value="" required><br><br>
        <label for="kkm">KKM:</label>
        <input type="text" name="kkm" value="" required><br><br>
        <label for="kelas">Kelas:</label>
        <select name="kelas" required>
            <option value="" >Pilih</option>
            <option value="1">XII RPL 1</option>
            <option value="2">XII RPL 2</option>
        </select>
        <br><br>
        <input type="submit" value="OK" name="ok" class="button">
    </form>


<?php
    if (isset($_POST['ok'])) {
    $gr=$_POST['gr'];
    $mapel=$_POST['mapel'];
    $kkm=$_POST['kkm'];
    $kls=$_POST['kelas'];
    
  
   if($kls==1){
    $siswa1 = array([10111,'Andi'],[10112,'Budiana'],[10113,'Cahyadi'],[10114,'Diana'],[10115,'Evelina']);
   }else{
    $siswa1 = array([10121,'Aryanti'],[10122,'Supriyanto'],[10123,'Shintia'],[10124,'Riyo'],[10125,'Ananta']);
   }
   ?>

   <hr class="garis-tebal">
    
    <h2>Data Peserta Didik</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Nilai</th>
                
            </tr>
        </thead>
    <tbody>
<?php
   $no=1;
   echo "<form action='laporan.php' method='POST'>";
   echo "<input type='hidden' name='gr' value=".$gr."> ";
   echo "<input type='hidden' name='mapel' value=".$mapel.">";
   echo "<input type='hidden' name='kkm' value=".$kkm.">";
   echo "<input type='hidden' name='kelas' value=".$kls.">";
    foreach ($siswa1 as $key => $y) {
    echo "<tr><td>".$no."</td>";
    echo "<td> <input type='hidden' name='nis[]' value='$y[0]' >".$y[0]."</td>";
    echo "<td> <input type='hidden' name='nama[]' value='$y[1]'>".$y[1]."</td>";
    echo "<td> <input type='number' name='nilai[]' placeholder='input nilai' min='0' max='100' style='width: 100px;' required></td>";
    $no++;
    }
?>
    </tbody>
</table>
<input type="submit" value="Konversi" name="konversi" class="button">
<?php
}
?>
</form>
<hr class="garis-tebal">
  </div>
  
</body>
</html>


