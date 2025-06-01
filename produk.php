<html>
  <head>
    <title>F-SHOP</title>
  </head>
  <body bgcolor=white>
    <!-- Header -->
    <div
      style="
        display: flex;
        border-radius: 1px;
        border: 0px lightgray solid;
        padding: 20px;
        width: 1879px;
        height: 100px;
        margin-left: -9px;
        margin-bottom: 20px;
        margin-top: -7px;
        background-image: url('bg header.jpg');
        background-size: cover;
        background-position: center;
      ">
      <div style="margin-left:600px; margin-top: 10px; text-align: center; color:rgb(255, 0, 0); -webkit-text-stroke: px red; font-size: 25px; font-family: 'Arial', sans-serif;">
        SELAMAT DATANG...SELAMAT DATANG...DI FONTAINE SHOP
      </div>
      <div style="margin-left: -500; margin-top: 42px; text-align: center; color: red; font-size: 20; font-family: 'Arial', sans-serif;">
        "Kami Layani Sampai Dompet Kering"
      </div>
    </div>
    
    <!-- Menu Navigasi -->
    <div style="display: center; align: center; margin-bottom: 1px;">
      <center><a href="tentang.php">Tentang Kami</a></center>
    </div>
    <div>
      
      <center><a href="home.php">Home</a></center>
    </div>
    
    <!-- Sidebar dan Konten -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <!-- Baris Menu -->
      <tr>
        <!-- Sidebar -->
        <td width="100" bgcolor="white" valign="top">
          <div align="center">
            <p>
              <img src="monta.gif" alt="Video GIF" width="220" height="500">
            </p>
          </div>
        </td>
        <!-- Konten Utama -->
        <td width="500%" bgcolor="#ffffff" valign="top" style="padding: 20px;">
          <!-- Form -->
           <h2><b>FORM TRANSAKSI</b></h2><br>
          <form name=form>
          <hr> 
           <table>
            <tr><td>Nama Anda<td>: <input type=text name="nama" size=20>
            <tr><td>Menu<td>: <input type=checkbox name="gurita"
            value=Gurita>gurita
            <tr><td><td>: <input type=checkbox name="cumi"
            value=Cumi>cumi
            <tr><td><td>: <input type=checkbox name="kerang"
            value=Kerang>kerang
            <tr><td>Jam Pengantaran<td>: <input type=radio name="kirim"
            value=17:00>17:00 
            <input type=radio name="kirim"
            value=17:00>19:00
            <input type=radio name="kirim"
            value=besok>Besok
            <tr><td>Alamat Pengantaran<td>: <textarea name="alamat" cols=40 rows=5> </textarea>
            <tr><td>Catatan<td>: <input type=text name="catatatan" size=20>
           </table>
           <br>
           <hr>
           <input type=submit value=Kirim><input type=reset>
          </form> 
 <!-- Footer -->
     <br><br><br><br><br><br><br>
    <div style= 
    "text-align: center; 
     border-radius: 1px;
     border: 10px #333;
     padding: 20px;
     width: 1879px;
     height: 70px;
     margin-left: -249px;
     margin-top: 150px;
     background-color: #333; 
     color: white; ">
      <p> 2023 Fontaine Shop. All rights reserved.</p>
    </div>
  </body>
</html>