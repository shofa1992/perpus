<?php
include 'conn/koneksi.php';
$pinjam			= date("d-m-Y");
$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali		= date("d-m-Y", $tuju_hari);
?>
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Transaksi
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Input Transaksi</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=transaksi_proses" method="post">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">Judul Buku</td>
                    <td><select name="buku">
                    	<option>Pilih Judul Buku</option>
                        <?php
							$query = "SELECT * FROM tbl_buku ORDER by id";
							$sql = mysql_query($query);
							while ($buku=mysql_fetch_array($sql)) {
								echo "<option value='$buku[0].$buku[1]'>$buku[1]</option>";
							}
							
						?>
                    	</select>
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Pemnijam</td>
                    <td><select name="peminjam">
                    	<option>Pilih Peminjam</option>
                        <?php 
							$query = "SELECT * FROM tbl_anggota ORDER by nim";
							$sql = mysql_query($query);
							while ($nama=mysql_fetch_array($sql)) {
								echo "<option value='$nama[0].$nama[1]'>$nama[0]. $nama[1]</option>";
							}
							
						
						?>
                        
                        
                    	</select>
                    	
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Pinjam</td>
                    <td><input type="text" name="tgl_pinjam" size="30%" value="<?php echo $pinjam; ?>" readonly="readonly"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Kembali</td>
                    <td><input type="text" name="tgl_kembali" size="30%" value="<?php echo $kembali; ?>" readonly="readonly"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Keterangan</td>
                    <td><input type="text" name="ket" size="50%"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=transaksi">Kembali</td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>