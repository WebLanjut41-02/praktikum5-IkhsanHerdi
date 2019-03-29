<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo base_url(); ?>index.php/Welcome/prosesinput/" method="post">
        Nama <input type="text" name="nama"><br>
        NIM <input type="text" name="nim"><br>
        Tanggal Lahir <input type="date" name="tgl"><br>
        IPK <input type="text" name="ipk"><br>
        Kelas <select name="kelas">
            <option value="D3SI-41-01">D3SI-41-01</option>
            <option value="D3SI-41-02">D3SI-41-02</option>
            <option value="D3SI-41-03">D3SI-41-03</option>
            <option value="D3SI-41-04">D3SI-41-04</option>
        </select><br>
        <input type="submit" name="submit" value="input">
    </form>
</body>
</html>