<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Manoel Estevam">

    <title>Contato - Grupo JPX</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

  <div class="container-fluid" style="background-color: #ca1b24;">
        <div class="row-fluid">
            <div class="col-md-4 text-center">
                <h5 style="color: blanchedalmond; font-weight: bold;"><i class="fa fa-envelope-o"></i><a href="mailto:atendimento@grupojpx.com" style="color: blanchedalmond; font-weight: bold;"> atendimento@grupojpx.com</a></h5>
            </div>
            <div class="col-md-4 text-center">
                <h5 style="color: blanchedalmond; font-weight: bold;"><i class="fa fa-phone"></i> (00) 0000-0000</h5>
            </div>
            <div class="col-md-4 text-center">
            <h5 style="color: blanchedalmond; font-weight: bold;"><a href="email" style="color: blanchedalmond; font-weight: bold;"><i class="fa fa-sign-in"></i> Login</a></h5>
            </div>
        </div>
    </div>

  <nav class="navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a href="index.html">
                    <img src="img/logo.png" alt="Grupo JPX">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" class="navbar-link">INÍCIO</a>
                    </li>
                    <li>
                        <a href="grupo.html" class="navbar-link">O GRUPO</a>
                    </li>
                    <li>
                        <a href="servicos.html">SERVIÇOS</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTATO</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">EMPRESAS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="jpautocenter.html">JP Auto Center</a>
                            </li>
                            <li>
                                <a href="postojpmossoro.html">Posto JP Mossoró</a>
                            </li>
                            <li>
                                <a href="postojpgdr.html">Posto JP Governador</a>
                            </li>
                            <li>
                                <a href="postojppaudosferros.html">Posto JP Pau dos Ferros</a>
                            </li>
                            <li>
                                <a href="postojpassu.html">Posto JP Assú</a>
                            </li>
                            <li>
                                <a href="#">JP Pré-Moldados</a>
                            </li>
                            <li>
                                <a href="email">Login</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contato <small>Gostaríamos muito de ouvir você!</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contato</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
        
            <h3 class="page-header text-center">Nossa Localização</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.5677140007842!2d-37.36211568522097!3d-5.173010653671028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ba06ca19a9c559%3A0x7751afa8b0bbecc0!2sPOSTO%20JP%20MOSSOR%C3%93!5e0!3m2!1sen!2sbr!4v1577700646505!5m2!1sen!2sbr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Vamos entrar em contato!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Nome</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Telefone</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Menssagem</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-danger">Enviar</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Grupo JPX</h3>
          <h4>Endereço</h4>
          <p>
            Av. Wilson Rosado de Sá<br>
            Nova Betânia, Mossoró - RN, 59780-000<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">Fone</abbr>: (84) 0000-0000</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:atendimento@grupojpx.com">atendimento@grupojpx.com</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours"></abbr>:</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Grupo JPX 2020</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script src="js/retina-1.3.0.zip"></script>

  </body>
</html>
