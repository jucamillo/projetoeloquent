<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem das Livros</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Listagem de livros</h1>
      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">Livros</div>

            <table class="table table-striped">

              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Preço</th>
                    <th>Id Editora</th>
                    <th>#</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($livros as $livro)
                <tr>
                  <td>
                      {{$livro->id}}
                  </td>
                  <td>
                    {{$livro->titulo}}
                  </td>
                  <td>
                     {{$livro->preco}}
                  </td>
                  <td>
                     {{$livro->editora_id}}
                  </td>
                  <td>

                      <a href="/livros/{{ $livro->id}}">Detalhes</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
            </table>

        </div>

        </div>

      </div>

    </div>

    <script type="text/javascript" src="/js/app.js" ></script>
  </body>
</html>
