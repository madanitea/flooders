<?php
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'flooders-config.php';
	
	$status = $_GET['status'];
	$ketinggian = $_GET['ketinggian'];
	$lokasi = $_GET['lokasi'];
	$subcribers = mysqli_query($connection, "SELECT email FROM subscribers");
	while ($subcriber = mysqli_fetch_array($subcribers)) {
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = $system_email;
		$mail->Password = $system_password;
		$mail->SetFrom("");
		$mail->Subject = "Flooders | Peringatan Siaga Banjir";
		$mail->Body = "<h2>Flooders :)</h2><p>Sampurasun sadayana ! Punten bade ngawartosan. <br> Di daerah ".$lokasi." terjadi perubahan ketinggian air. Dengan data sebagai berikut : <br><ul><li>Status : ".$status."</li><li>Jarak : ".$ketinggian."</li></ul><br><br>Waspada kepada warga yang tinggal di daerah ".$lokasi." dan pengendara yang ingin melintas. <br><br> <marquee><h1 style='color:red;'>STAY ALERT PEOPLE !!!</h1></marquee></p>";
		$mail->AddAddress($subcriber['email']);
		echo "Sent to ".$subcriber['email']." Sukses";
		if(!$mail->Send()) {
		    echo "456 Can't sent email !";
	 	} else {
		    echo "200 OK !";
	 	}
		echo "loop".$subcriber['email']."<br>";
	}

?>
