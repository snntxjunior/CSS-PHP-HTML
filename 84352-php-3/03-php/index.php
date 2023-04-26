<?php
include "header.php";

include "conn.php";

//preparar
$stmt = $conn->prepare("SELECT * FROM product");

//executar
$stmt->execute();

//listar
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($list);
?>

    <!-- Start Main -->
    <main>
        <div class="container py-5">
            <h1>Lista de Produtos</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($list as $row): ?>
                    <tr>
                    <th scope="row"> <?= $row['id']; ?></th>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td><?= $row['price']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
             </table>

        </div>
    </main>
    <!-- End Main -->

<?php
include "footer.php";
?>