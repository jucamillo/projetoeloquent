<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Livro</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Detalhes do livro</h1>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">

            <div class="panel-heading"><strong>Livros</strong></div>

            <ul class="list-group">
              <li class="list-group-item">{{ $livro->titulo }}</li>
              <li class="list-group-item">{{ $livro->preco }}</li>
              <li class="list-group-item">{{ $livro->editora_id }}</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <script type="text/javascript" src="/js/app.js" ></script>
  </body>
</html>
