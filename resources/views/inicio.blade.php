<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Hey Briefing</title>
    <link rel="icon" type="image/png" href="{{asset('img/logoAba.png')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body style="background-image: url({{asset('img/fundo.png')}}) ; background-repeat: no-repeat; background-position: right ; bottom: 0 ; overflow: auto;">
<!-- Conteúdo -->
<nav class="navbar navbar-expand-lg navbar-light ">
    <img alt="Erro ao carregar imagem" style="margin-left: 25px; margin-top: 20px" width="120px" src="{{asset('img/LogoHey.png')}}">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="#" style="color: white" class="px-3">Esqueci minha senha</a>
            <button type="button" class="btn btn-transparent px-4" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: transparent ; border-color: white ; color: white; border-radius: 10px; margin-right: 10px" type="submit" >Login</button>
        </form>
    </div>
</nav>

<div class="container ajustcontainer" style="margin-top: 18%; margin-left: 5%">

    <p class="font-weight-bold" style="font-size: x-large ; color: #ff6456 ; letter-spacing: 5px">plataforna iterativa</p>
    <p class="font-weight-bold" style="font-size: xxx-large ;color: #ff6456 ">Para sua empresa</p>
    <div style="width: 55%">
        <p class="font-weight-light" align="justify">É por meio do briefing que conseguimos captar exatamente a
            ideia do projeto desejado pelo cliente, o objetivo, a mensagem a ser transmitida
            e qual resultado ele deseja alcancar. E foi pensando nisso que criamos o Briefing totalmente
            online e iterativo</p>
    </div>

    <br>
    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModal" style=" padding: 25px ; background-image: linear-gradient(to right, #f4347b 0%, #ff6456 100%); color: white ; border-radius: 28px">COMECAR AGORA</button>
</div>

<!-- Modal -->
<div class="modal fade "  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container" style="align-items: center">
                    <p class="font-weight-bold" style="font-size: xx-large ; color: #205ce2 ; letter-spacing: 3px ; margin-top: 15% ; ">Login</p>
                </div>
                <div class="container">

                    <!-- FORMULARIO DE LOGIN -->
                    <form>
                        <div class="form-group">
                            <input type="text" style="border-radius: 10px" class="form-control form-control-lg" id="usuario" aria-describedby="emailHelp" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <input type="password" style="border-radius: 10px" class="form-control form-control-lg" id="senha" placeholder="Senha" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembrar meu Login</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 15px ; background-color: #205ce2 ; border-radius: 15px ; margin-bottom: 15%">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
