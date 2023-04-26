<?php
include "header.php";
?>

    <!-- Start Main -->
    <main>
        <div class="container py-5">
            <h1>Cadastrar</h1>
            <form action="insert.php" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Digite o nome do produto:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o nome do produto:" name="name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Descrição do produto:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Descrição do produto:" name="description">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Preço:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Preço:" name="price">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger">Cadastrar</button>
                </div>
            </form>

        </div>
    </main>
    <!-- End Main -->

<?php
include "footer.php";
?>