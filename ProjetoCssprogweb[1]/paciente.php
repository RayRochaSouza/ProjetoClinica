<!DOCTYPE html>
<html>
	
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Listagem de pacientes</title>
  <link rel="stylesheet" type="text/css" href="paciente.css">
	
	body {
  font-family: Arial, sans-serif;
  background-color: white;
}

h1 {
  color: dodgerblue;
  text-align: center;
}

h1 i {
  font-style: italic;
}

ol {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

ol a {
  display: block;
  padding: 10px;
  background-color: #fff;
  color: #333;
  text-decoration: none;
  margin-bottom: 5px;
  border-radius: 5px;
}

ol a:hover {
  background-color: #e5e5e5;
}

.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #f2f2f2;
  color: #333;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #ddd;
}

/* Posicionamento */
h1 {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}

ol {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
}

.button {
  margin: 0 auto;

}
  
</head>

<body>

  <body>	
			<?php
				include 'conexao.php';
			?>
			<br>
			<br>
			<br>
			<h1>Listagem dos Pacientes</h1>
			
			
			
			<a href="novopaciente.php">
			<img src="https://cdn-icons-png.flaticon.com/512/760/760737.png" width = "30px" alt="Botão de Link">
			
			</a><br><br>
			<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Idade</th>
            <th>Número</th>
        </tr>
    </thead>
    
					<?php
						$result = mysqli_query($conexao, "select idpacientes, nome, cpf, rg, idade, celular from pacientes");
						if(mysqli_num_rows($result) != 0){
							while($linha = mysqli_fetch_array($result)){
								
								echo "<tr>";
								echo "	<td> " . $linha['nome'] . "</td>";
								echo "	<td> " . $linha['cpf'] . "</td>";
								echo "	<td> " . $linha['rg'] . "</td>";
								echo "	<td> " . $linha['idade'] . "</td>";
								echo "	<td> " . $linha['celular'] . "</td>";
								echo "</tr>";
							
							}
						} else {
						
							echo "<tr>";
							echo "	<td colspan='3'> Não existem registros! </td>";
							echo "</tr>";
						}
					?>
					
					
				
				</tbody>
			</table>
			
			<br>
			<a href="index.php">Voltar</a>
	</body>

 

</html>
