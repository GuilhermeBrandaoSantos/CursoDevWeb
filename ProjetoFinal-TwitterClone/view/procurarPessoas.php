<?php
	
	session_start();

	if(!isset($_SESSION['nome_usuario'])){
		header('Location: index.php?erro=1');
	}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Twitter clone</title>		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<!-- Icon -->
		<link rel="icon" sizes="192x192" href="../imagens/icone_twitter.png">       
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
		
		<script src="js/jsTweet.js"></script>
		<!-- <script>
			$(document).ready(function(){
				// Associar evento de click no botão de Tweet
				$('#btn_procurar_pessoa').click(function(){
					if($('#nome_pessoa').val().length > 0){
						$.ajax({
							url: 'get_pessoas.php',
							method: 'post',
							data: $('#form_procurar_pessoas').serialize(),
							success: function(data){
								alert(data);               
							}
						})
					}
				});  
			});
		</script> -->
	</head>
	<body>
		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="home.php">Home</a></li>              
	            <li><a href="index.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	    <div class="container">
	    	<div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4><?php echo $_SESSION['nome_usuario']; ?></h4>
                        <hr>
                        <div class="col-md-6">
                            TWEETS <br>
                            1
                        </div>

                        <div class="col-md-6">
                            SEGUIDORES <br>
                            1	
                        </div>							
                    </div>
                </div>	
            </div>

	    	<div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="form_procurar_pessoas" class="input-group">
                            <input type="text" id="nome_pessoa" name="nome_pessoa" class="form-control" placeholder="Quem você está procurando?"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" id="btn_procurar_pessoa" type="button">Procurar</button>
                            </span>
                        </form>
                    </div>
                </div>
                <div class="list-group" id="pessoas"></div>
				</div>
				<div class="col-md-3">
				<div class="panel panel-default">
                    <div class="panel-body">
                                                                        
                    </div>
                </div>
			</div>
		</div>	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>