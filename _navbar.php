<?php
		$id = $row['id'];
		$query3 = "SELECT *
		FROM papel
		LEFT JOIN (
		usuario_papel, usuario)
		ON ( papel.id = usuario_papel.papel_id
		AND usuario.id = usuario_papel.usuario_id ) 
		WHERE usuario.id ='$id'";

		$result1 = $db->query($query3);
		if ($result1->num_rows > 0) {
		// output data of each row
		$row3 = $result1->fetch_assoc();
		}
	
?>

<div class="sidebar" data-color="blue" data-image="assets/img/smartboard-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="user.php" class="simple-text">
                    <?php echo $row['nome'] . ' ' . $row['sobrenome'];?>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="menu.php">
                        <i class="pe-7s-menu"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
							<?php 
							
							
							
							if($row3['papel_id'] == 2){
							echo "<li>
                    <a href='criarTurma.php'>
                        <i class='pe-7s-plus'></i>
                        <p>Criar Turma</p>
                    </a>
                </li> ";
							}
								?>
							<li>
                    <a href="minhasturmas.php">
                        <i class="pe-7s-science"></i>
                        <p>Minhas Turmas</p>
                    </a>
                </li> 
                <li>
                    <a href="procurarturma.php">
                        <i class="pe-7s-search"></i>
                        <p>Procurar Turmas</p>
                    </a>
                </li>							
                <li>
                    <a href="typography.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>                             
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
							  <li>
                    <a href="logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>