<?php

    include_once("templates/header.php");
    include_once("process/pizza.php");

?>

    <div id="main-contaner">
        <div class="container min-height-container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gerenciar pedidos:</h2>
                </div>
                <div class="col-md-12 table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scopo="col"><span>Pedido</span> #</th>
                                <th scopo="col">Borda</th>
                                <th scopo="col">Massa</th>
                                <th scopo="col">Sabores</th>
                                <th scopo="col">Status</th>
                                <th scopo="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>Cheddar</td>
                                <td>Catupiry</td>
                                <td>4 Queijos</td>
                                <td>
                                    <form action="process/orders.php" class="form-group update-form" method="POST">
                                        <input type="hidden" name="type" value="update">
                                        <input type="hidden" name="id" value="1">
                                        <select name="status" class="form-control status-input">
                                            <option value="">Entrega</option>
                                        </select>
                                        <button type="submit" class="update-btn">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="process/orders.php" method="POST">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="id" value="1">
                                        <button type="submit" class="delete-btn">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php

    include_once("templates/footer.php") 

?>