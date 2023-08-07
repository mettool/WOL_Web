<html>
	<head>
		<title>
			Despertador
		</title>
	</head>

	<body style="text-align:center;">
		<pre>
  _    _       _                        _                 
| |  | |     | |                      | |                
| |  | | __ _| | _____    ___  _ __   | |     __ _ _ __  
| |/\| |/ _` | |/ / _ \  / _ \| '_ \  | |    / _` | '_ \ 
\  /\  / (_| |   <  __/ | (_) | | | | | |___| (_| | | | |
 \/  \/ \__,_|_|\_\___|  \___/|_| |_| \_____/\__,_|_| |_|
                                                                                                                  
		</pre>
			<?php
				if (isset($_POST['button']))
					{
						echo shell_exec('wakeonlan 6c:cc:6c:c6:c6:c6');	// Reemplazar por la MAC del equipo a verificar.					
					}
				if (empty($_POST)) {
				exec('ping -c 1 192.168.x.x', $output, $return); // Reemplazar por la ip del equipo a verificar.
					if ($return != 0)
						{
			?>
				<html>
					<body>
							<form method="post">
								<p>
									El Equipo NO está en linea, ¿deseas activarlo?
									<br>
									<button name="button">Envíar Magic Packet!</button>
								</p>
							</form>
					</body>
			<?php
						}
							else
							{
								echo "El equipo está en linea.";
							}
									}							
			?>
	</body>
</html>