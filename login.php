<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meu Assistente Financeiro - Login</title>
    <!-- Bootstrap Core -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo.css">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/regular.css" integrity="sha384-A/oR8MwZKeyJS+Y0tLZ16QIyje/AmPduwrvjeH6NLiLsp4cdE4uRJl8zobWXBm4u"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"
    crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

		<style>
		:root {
		  --input-padding-x: .75rem;
		  --input-padding-y: .75rem;
		}

		html,
		body {
		  height: 100%;
		}

		body {
		  display: -ms-flexbox;
		  display: -webkit-box;
		  display: flex;
		  -ms-flex-align: center;
		  -ms-flex-pack: center;
		  -webkit-box-align: center;
		  align-items: center;
		  -webkit-box-pack: center;
		  justify-content: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #f5f5f5;
		}

		.form-signin {
		  width: 100%;
		  max-width: 420px;
		  padding: 15px;
		  margin: 0 auto;
		}

		.form-label-group {
		  position: relative;
		  margin-bottom: 1rem;
		}

		.form-label-group > input,
		.form-label-group > label {
		  padding: var(--input-padding-y) var(--input-padding-x);
		}

		.form-label-group > label {
		  position: absolute;
		  top: 0;
		  left: 0;
		  display: block;
		  width: 100%;
		  margin-bottom: 0; /* Override default `<label>` margin */
		  line-height: 1.5;
		  color: #495057;
		  border: 1px solid transparent;
		  border-radius: .25rem;
		  transition: all .1s ease-in-out;
		}

		.form-label-group input::-webkit-input-placeholder {
		  color: transparent;
		}

		.form-label-group input:-ms-input-placeholder {
		  color: transparent;
		}

		.form-label-group input::-ms-input-placeholder {
		  color: transparent;
		}

		.form-label-group input::-moz-placeholder {
		  color: transparent;
		}

		.form-label-group input::placeholder {
		  color: transparent;
		}

		.form-label-group input:not(:placeholder-shown) {
		  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
		  padding-bottom: calc(var(--input-padding-y) / 3);
		}

		.form-label-group input:not(:placeholder-shown) ~ label {
		  padding-top: calc(var(--input-padding-y) / 3);
		  padding-bottom: calc(var(--input-padding-y) / 3);
		  font-size: 12px;
		  color: #777;
		}
	</style>
	
	
	
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



	

</head>

<body>
    <form class="form-signin" method="POST" action="efetuar_login.php">
      <div class="text-center mb-4">
          <a href="index.php"><img class="mb-4" src="img/maf_logo3.png" alt=""></a>
<!--        <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>-->
<!--        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>-->
      </div>

      <div class="form-label-group">
        <input type="login" class="form-control" name="login" placeholder="CPF (somente números)" autofocus>
        <label for="inputEmail">CPF (somente números)</label>
      </div>

      <div class="form-label-group">
        <input type="password" class="form-control" name="senha" placeholder="Senha">
        <label for="inputPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar senha
        </label>
      </div>
        <input class="btn btn-lg btn-default btn-block btn-primary" type="submit" value="Logar"></input>
      
      <div class="text-center">
        <a class="d-block small mt-3" href="register.php">Registrar</a>
        <a class="d-block small" href="forgot-password.php">Esqueceu sua senha?</a>
    </div>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
    </form>
  </body>
</html>
