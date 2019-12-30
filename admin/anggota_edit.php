<?php 
include '../conn/koneksi.php';
$nis = $_GET['nis'];
$query = "SELECT * FROM tbl_anggota where nis='$nis'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$nis = $data['nis'];
$nama = $data['nama'];
$tempat = $data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$jk = $data['jk'];
$jurusan = $data['jurusan'];
$kelas = $data['kelas'];

?>
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Edit Anggota</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=anggota_proses_edit" method="post">
          <input type="hidden" name="nis" size="50%" value="<?php echo $nis; ?>"></td>
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">NIS</td>
                    <td><input type="text" name="nis1" size="50%" value="<?php echo $nis; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" size="50%" value="<?php echo $tempat; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Lahir</td>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jenis Kelamin</td>
                    <td><?php if ($data['jk'] === "L") : ?>
                    <input type="radio" name="jk" value="L" checked />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" />Perempuan</label>
                    <?php else : ?>
            		<input type="radio" name="jk" value="L" />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" checked />Perempuan</label>
            		<?php endif; ?>
                    	</select>
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jurusan</td>
                    <td><select name="jurusan">
                    		<option>Pilih Jurusan</option>
                            <option value="Administrasi Perkantoran" <?php if ($jurusan=='Administrasi Perkantoran') {echo "selected";} ?>>Administrasi Perkantoran</option>
                            <option value="Akuntansi"  <?php if ($jurusan=='Akuntansi') {echo "selected";} ?>>Akuntansi</option>
                            <option value="Multimedia" <?php if ($jurusan=='Multimedia') {echo "selected";} ?>>Multimedia</option>
                            <option value="Perbankan Syariah" <?php if ($jurusan=='Perbankan Syariah') {echo "selected";} ?>>Perbankan Syariah</option>
                            <option value="Pemasaran" <?php if ($jurusan=='Pemasaran') {echo "selected";} ?>>Pemasaran</option>    
                        </select>
                    </td>
                </tr>               
                <tr>
                	<td width="20%" align="right">Kelas</td>
                    <td><input type="text" name="kelas" size="50%" value="<?php echo $kelas; ?>"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=anggota">Kembali</td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>