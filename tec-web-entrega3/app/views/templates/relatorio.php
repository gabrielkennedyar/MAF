<?php include_once("../../controllers/relatorioController.php"); ?>
<?php include_once("../layouts/header.php"); ?>
    <main>
        <div class="container-fluid">
            <div>
                <br>
                <p>
                    <span style="color:#395143; font-size: 18px;">
                        <i class="far fa-hand-point-right"></i> Você está em: Relatório
                    </span>
                </p>
            </div>

            <hr>

            <div class="container">
                <div class="card card-register mx-auto mt-5">
                  <div class="card-header">Relatórios</div>
                  <div class="card-body">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>Nome</th>
                                  <th>Valor</th>
                                  <th>Tipo</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php
                            $query = sprintf(" SELECT `nome`, `valor`, `categoria` FROM `lancamento`; ");
                            $dados = mysqli_query($conn,$query); // O primeiro argumento tem que ser sempre o $conn, que vem do config.php
                            $linha = mysqli_fetch_assoc($dados);
                            // calcula quantos dados retornaram
                            $total = mysqli_num_rows($dados);
                            if($total > 0) {

                                do{
                                    echo '<tr> ';
                                    echo '<td> ' . $linha['nome'] . '</td>';
                                    echo '<td> ' . $linha['valor'] . '</td>';
                                    echo '<td> ' . $linha['categoria'] . '</td>';
                                    echo '</tr>';
                                }while($linha = mysqli_fetch_assoc($dados));
                            }

                            ?>
                      </tbody>
              </table>
          </ul>
      </div>
  </div>
</div>

</div> <!-- Fim container-fluid -->
</main>


<?php include_once("../layouts/footer.php"); ?>

</body>
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
  })
})
</script>
</html>