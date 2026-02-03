<?php include('db_config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Alunos - Bruno Estevão</title>
</head>
<body>
    <h2>Lista de Alunos (Sistema CRUD)</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
        </tr>
        <?php
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["course"]."</td></tr>";
            }
        }
        ?>
    </table>
</body>
</html>