<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Inserindo novo aluno</title>
    </head>
    <body class="antialiased">
    <table class="table col-4"><!--esta retornando código 419-->
        <form action="/aluno" method="POST" class="m-4">
            
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            
                    <label class="p-4">Nome:</label>
                    <input type="text" name="nome"/>
            <tr>
                <td>
                    <label>Sobrenome:</label>
                    <input type="text" name="sobrenome"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Nº Protocolo:</label>
                    <input type="text" name="num_protoc"/>
                </td>
            </tr>

            <tr>
                <td>
                    <label>CPF:</label>
                    <input type="text" name="cpf"/>
                </td>
            </tr>
            
           <tr>
                <td>
                    <label>Matrícula:</label>
                    <input type="text" name="matricula"/>
                </td>
           </tr>

           <tr>
            <td>
                <label>Idade:</label>
                <input type="text" name="idade"/>
            </td>
           </tr>
            
           <tr>
                <td>
                    <label>Turma:</label>
                    <input type="text" name="turma"/>
                </td>
           </tr>

        <tr>
            <td>
                <label>Data de Nascimento</label>
                <input type="text" name="data_nasc"/>
            </td>
        </tr>

        <tr>
            <td>
                <label>Nome do Responsável</label>
                <input type="text" name="responsavel"/>
            </td>
        </tr>

        <tr>
            <td>
                <label>Motivo encaminhamento</label>
                <textarea type="text" name="motivo_enc"> </textarea>
            </td>
        </tr>
            
           <tr>
            <label>Vunerabilidade Econômica/Social</label>
            <td>
                <input type="radio" name="vulner_social" value="1">
                <label for="html">Sim</label><br>
              <input type="radio" name="vulner_social" value="0">
                <label for="css">Não</label><br>
            </td>
           </tr>
    
            <tr>
                <td>
                    <button type="button" class=""><input type="submit" value="Criar"/></button>
                </td>
            </tr>
            
          </form>
    </table>
      
    </body>
</html>
