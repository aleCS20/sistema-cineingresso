<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>CineIngresso - O seu site de Ingressos online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""> 
	

	
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Allura" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
	<script src="email/validation.js" type="text/javascript"></script>
</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
					 <a href="index.html" id="divSiteTitle"><img src="images/Logo_.jpg"></a><br/>
                      <!--<a href="index.html" id="divSiteTitle">LOGO</a><br/>-->
                      <!--<a href="index.html" id="divTagLine">LOGO</a>-->
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown"><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="about.html">Corporativo</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Serviços <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                            <li><a href="login_.php">Login</a></li>
                            <li><a href="contact2.php">Programação</a></li>
                            <!--<li><a href="contact3.php">Sessões</a></li>-->
							<li><a href="ajuda.html">Ajuda?</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Ingressos &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <!--<li><a href="contact4.php">Reservar</a></li>-->
                            <li><a href="login_.php">Comprar</a></li>
                            <!--<li><a href="#">Dropdown Item</a></li>-->
                            </ul>
                            </li>
                            </ul>
                                </li>
                                <li class="dropdown"><a href="gallery.html">Galeria</a></li>
                                <li class="dropdown active"><a href="contact.php">Cadastre-se</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <!--<a href="index.html">Home</a> &nbsp;/&nbsp; <span>Contact Us</span>-->
            </div> 

        <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Localizar Filmes</h1>
                   	<!--<h3 style="color:#FF6633;"--><?php// echo $_GET[msg];?><!--</h3>-->
					<hr>
			<!--Start Contact form -->		                                                
 <form name="enq" method="post" action="busca_filme.php"> <!--onsubmit="return validation();"-->
  <fieldset>
  
    <strong>Digite o nome do Filme</strong></br>
	<input type="text" name="TitFilme" title="Digite o nome do filme"/></br>
	 
	<input type="submit" value="Pesquisar" title="Clique para pesquisar"/></br>
	<a href="contact2.php" title="Clique para voltar para pesquisa de filme"><h5>Voltar</h5></a>
	<hr>
	
	<h1>Programação de Filmes</h1>
	<hr>
	
	<?php
	 include "conexao.php";
	?> 
	
	<?php
	 $palavra = $_POST['TitFilme'];
	 
	  $busca_query = mysql_query("SELECT filme.TitFilme, sala.Local, sessao.DataSessao, sessao.HorarioSessao FROM filme, sala, sessao WHERE filme.TitFilme LIKE '%$palavra%' AND filme.IdFilme=sessao.IdFilme AND sala.IdSala=sessao.IdSala") or die(mysql_error());
	 
	  if(empty($busca_query)){ 
       echo "<script language='javascript' type='text/javascript'>alert('Filme não encontrado');window.location.href='contact2.php';
	   </script>";
      }
	  
	  else{
	   echo "<table cellpadding=6 border=2 bordercolor=gray><tr align=center bgcolor=#eeeee0><th>Título do Filme </th><th> Local de Exibição </th><th> Data da Sessão </th><th> Horário da Sessão </th></tr>";
	  	  
	   while($dados = mysql_fetch_array($busca_query)) {
	   
	   echo "<tr align=center><td>".$dados['TitFilme']."</td><td>".$dados['Local']."</td><td>".$dados['DataSessao']."</td><td>".$dados['HorarioSessao']."</td></tr>";
	  }
	  
	   echo "</table>";
      }	
	?>
	
	<!--<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>-->
    
	<!--<div class="actions">
	<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>-->
	
	</fieldset>
 </form>  				 
			<!--End Contact form -->											 
                </div>
				
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Informações para Contato</h3>
                    <p>
                        <address><strong>CineIngresso Companhia Inc.</strong><br />
                        Endereço<br />
                        Av. Autaz Mirim 100, Manaus, AMAZONAS<br />
                        <abbr title="Phone">Telefone(s):</abbr> (92) 9145-5763 / (92) 8261-5038</address> 
                        <address>  <strong>Email</strong><br />
                        <a href="mailto:cineingresso@gmail.com">cineingresso@gmail.com</a></address>  
                    </p>     
                     
					 <!-- Start Side Categories -->
        <!--<h4 class="sidebox-title">Sidebar Categories</h4>
        <ul>
          <li><a href="#">Quisque diam lorem sectetuer adipiscing</a></li>
          <li><a href="#">Interdum vitae, adipiscing dapibus ac</a></li>
          <li><a href="#">Scelerisque ipsum auctor vitae, pede</a></li>
          <li><a href="#">Donec eget iaculis lacinia non erat</a></li>
          <li><a href="#">Lacinia dictum elementum velit fermentum</a></li>
          <li><a href="#">Donec in velit vel ipsum auctor pulvinar</a></li>
        </ul>-->
					<!-- End Side Categories -->
                    					
                    </div>
					
					
                    
                </div>
			<!--/End Sidebar Content-->
				
				
            </div>			

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                
                    <h3>CineIngresso Companhia</h3>

                    <p>CineIngresso Corporation</p>
					<p>Desenvolvido por </p>
					<p>Alessandro Barbosa de Oliveira</p>
					<p>Manaus - AM / 2014</p>
                    
                    <!--<p> 
                        <a href="#" title="Terms of Use">Terms of Use</a><br />
                        <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                        <a href="#" title="Sitemap">Sitemap</a>
                    </p>-->

                </div>
                <!--<div class="span3" id="footerArea2">

                    <h3>Recent Blog Posts</h3> 
                    <p>
                        <a href="#" title="">Lorem Ipsum is simply dummy text</a><br />
                        <span style="text-transform:none;">2 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Duis mollis, est non commodo luctus</a><br />
                        <span style="text-transform:none;">5 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Maecenas sed diam eget risus varius</a><br />
                        <span style="text-transform:none;">19 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">VIEW ALL POSTS</a>
                    </p>

                </div>-->
                <!--<div class="span3" id="footerArea3">

                    <h3>Sample Content</h3> 
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s. 
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.
                    </p>

                </div>-->
                <div class="span3" id="footerArea4">

                    <h3>Contate-nos</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Telefone(s):</span>
                        <br />
                        (92) 9145-5763 / (92) 8261-5038                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:cineingresso@gmail.com" title="Email">cineingresso@gmail.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Endereço:</span>
                        <br />
                        Av. Autaz Mirim 100<br />
                        Manaus<br />
                        Amazonas
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2014 Todos os Direitos Reservados.
                    </p>

                    <!--<p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
			<a href=""><i class="social foundicon-twitter"></i> Twitter</a>
			<a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
			<a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </p>-->
                </div>
            </div>
            <br />

        </div>

    </div>
    
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


</body>
</html>
