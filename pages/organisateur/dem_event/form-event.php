<?php
include ("../../../includes/connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Organisation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgb(31, 104, 143);
            color: #fff;
            text-align: center;
            padding: 1em;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
        }

        nav {
            
            padding: 1em;
            
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        nav ul li {
            display: inline;
            margin-right: 60px;
            font-size: 1.0rem;
            text-transform: none;
            border-radius: 8px;
            padding: 5px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }
        nav ul li a:hover{
            color: #bbabab;
            text-decoration: underline;
            transition: 0.3 ease;
            
        }

        a{
         text-decoration: none;
         color: #221e1e;
         font-weight:bold ;
        }
        
        table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
        }

        th, td {
         padding: 10px;
         border: 1px solid #ddd;
         text-align: left;
        }

        th {
         background-color: #3498db;
         color: #fff;
        }

        button {
         background-color: #2ecc71;
         color: #fff;
         border: none;
         padding: 8px 12px;
         border-radius: 4px;
         cursor: pointer;
        }

         button:hover {
         background-color: #27ae60;
        }

        h2{
         text-align: center;
         font-family: serif;
         font-size: 2.1rem;
        }

    </style> 
</head>
<?php include ("..\headerorg.html"); ?>
<body>
    <h2>Event application Details </h2>
    <table>
        <thead>
            <tr>
                <th>Nom d'organisation</th>
                <th>Titre d'evenement</th>
                <th>Type d'evenement</th>
                <th>deadline</th>
                <th>Local</th>
                <th>Justificatif</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM event";
            $result = mysqli_query($conn, $sql);            
            while ($row = mysqli_fetch_assoc($result)) {
                $etat = ($row['checked'] == 0) ? 'Refusee' : (($row['checked'] == 1) ? 'Acceptee' : 'En cours de traitement');
                echo "<tr>";
                echo "<td>{$row['nom_org']}</td>";
                echo "<td>{$row['titre']}</td>";
                echo "<td>{$row['type']}</td>";
                echo "<td>{$row['deadline']}</td>";
                echo "<td>{$row['local']}</td>";
                echo "<td>{$row['justif']}</td>";
                echo "<td>{$etat}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>



  
    