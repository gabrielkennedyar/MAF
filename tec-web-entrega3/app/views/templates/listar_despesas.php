<?php include_once("../layouts/header.php"); ?>
<main>
    <div class="container-fluid">
<div>
            <br>
            <p>
                <span style="color:#395143; font-size: 18px;">
                    <i class="far fa-hand-point-right"></i> Você está em: Listar Despesas
                </span>
            </p>
        </div>

        <hr>
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Listagem de Despesas</div>
      <div class="card-body">
        <table>
          <tr>
            <td>Nome</td>
            <td>Valor</td>
            <td>Data Vencimento</td>
            <td></td>
          </tr>
          <tr>
            <td>Conta luz Janeiro</td>
            <td>100,00</td>
            <td>10/02/2018</td>
            <td><a href="editar_despesa.php">Editar</a></td>
          </tr>
          <tr>
            <td>Conta Água Janeiro</td>
            <td>80,00</td>
            <td>10/02/2018</td>
            <td><a href="editar_despesa.php">Editar</a></td>
          </tr>
          <tr>
            <td>Conta Telefone Janeiro</td>
            <td>50,00</td>
            <td>05/02/2018</td>
            <td><a href="editar_despesa.php">Editar</a></td>
          </tr>
        </table>
        </ul>
      </div>
    </div>
  </div>



    </div> <!-- Fim container-fluid -->
</main>


<?php include_once("../layouts/footer.php"); ?>

</body>

</html>