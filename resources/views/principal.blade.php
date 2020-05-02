<!DOCTYPE html>
<html>
<head>
	<title>Sistema Gereciamento de Contas - @yield('title')</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   <!-- criar botão volta ao topo -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
   
    <style type="text/css">
      a[href="#top"]{
         padding:12px;
         position:fixed;
         top: 90%;
         right: 20px;
         display:none;
         font-size: 30px;
      }
      a[href="#top"]:hover{
        text-decoration:none;
      } 
    </style>

    <script type="text/javascript">
      $(document).ready(function(){
        $(window).scroll(function(){
          if ($(this).scrollTop() > 200) {
              $('a[href="#top"]').fadeIn();
          } else {
             $('a[href="#top"]').fadeOut();
          }
        });

        $('a[href="#top"]').click(function(){
          $('html, body').animate({scrollTop : 0},700);
            return false;
        });
      });       
    </script> 

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->  

</head>
<body>
  
  <!-- footer fixado, usar essa conf = fixed-bottom(<body style="margin-bottom: 260px;">) -->
  <!-- usado sticky-top no lugar de fixed-top para possilitar uso correto do BOTÃO HUMBURGUER -->  
  <nav class="navbar navbar-dark navbar-expand-md navbar-default bg-info mb-3 py-4 sticky-top">
    <div class="container-fluid">
      <h1 class="navbar-brand"><em>Sistema de Clientes</em></h1>          
       
      <!-- BOTÃO HUMBURGUER -->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button> 

      <!-- MENU -->
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ml-md-auto text-light">
          <li class="nav-item">
            <a href="{{ action('ContasPagarController@listar') }}" class="nav-link">Contas Pagar</a>
          </li>           
          <li class="nav-item">
            <a href="{{ action('ContasReceberController@listarReceber') }}" class="nav-link">Contas Receber</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </div>  
  </nav>

      <!-- <img src="<?php echo url('css-jquery.png'); ?>" style="max-width: 200px; max-height: 200px;"> -->

    <div class="container">
    	@yield('content')
    </div>

    <footer class="bg-primary mt-4">
      <!-- MENU -->
      <div class="container">
        <div class="row text-light">
          <div class="col-md-2 col-sm-6 col-12">
            <ul class="navbar-nav">
              <li class="mt-3">
                <a href="{{ action('ContasPagarController@listar') }}" class="text-light">Contas Pagar</a>
              </li>           
              <li class="mt-2">
                <a href="{{ action('ContasReceberController@listarReceber') }}" class="text-light">Contas Receber</a>
              </li>
              <li class="mt-2 mb-2">
                <a href="{{ action('ContasReceberController@listaDataCadReceber')}}" class="text-light">Data Cadastro</a>
              </li>
            </ul>
          </div> 

          <div class="col-md-10 col-sm-6 col-12">
             <div class="py-4 mt-4 mr-5">
               <p class="text-center text-light mr-5">Desenvolvido por Rafael Fernandes</p>
             </div>

              <!-- botão volta ao topo -->
              <a href="#top" class="text-light pb-5">
                  <!-- <i class="fas fa-arrow-circle-up mt-4 bg-danger text-dark" style="font-size: 180px"></i> -->
                <p class="display-3 pb-5 mb-5">^</p>
              </a>
           </div> 
        </div>  
      </div>    
    </footer>
    
    <script src="../resources/js/bootstrap.js"></script>
</body>
</html>
