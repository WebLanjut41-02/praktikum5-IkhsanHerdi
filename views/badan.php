<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table border="1" cellspacing ="10">
  <tr>
    <td><b>Nama</b></td>
    <td><b>NIM</b></td>
    <td><b>Tanggal Lahir</b></td>
    <td><b>IPK</b></td>
    <td><b>Kelas</b></td>
    <td><b>Aksi</b></td>
  </tr>
  <?php 
		// $no = $this->uri->segment('3') + 1;
		foreach($mahasiswa as $u){ 
		?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
      <td><?php echo $u->tanggal_lahir ?></td>
      <td><?php echo $u->ipk ?></td>
      <td><?php echo $u->kelas ?></td>
      <td><?php echo anchor('Welcome/hapus/'.$u->nim,'Hapus'); ?></td>	
		</tr>
	<?php } ?>
    

</table>

<br>

<?php 
	echo $this->pagination->create_links();
  ?>
  
  <button><a href="<?php echo base_url(); ?>index.php/Welcome/Input/">Input Data</a></button>
  <br><br><br>
  
  <form action="" method="post">
    <input type="text" name="cari"> SEARCH
  </form>
  
</body>
</html>