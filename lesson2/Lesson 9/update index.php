@@ -13,7 +13,7 @@
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <title>Something</title>
</head>
<body>
<div class="container mt-3">
@@ -29,16 +29,17 @@
        </thead>
        <tbody>
        <?php foreach ($categories as $category) : ?>
        <form id="delete_<?= $category['id'] ?>" action="./delete.php" method="post">
        <tr>
            <th scope="row"><?= $category['id'] ?></th>
            <td><?= $category['name'] ?></td>
            <td>
                <form id="delete_<?= $category['id'] ?>" action="./delete.php" method="post">
                    <input type="hidden" value="<?= $category['id'] ?>" name="id">
                    <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $category['id'] ?>)">Delete</button>
                </form>
            </td>
        </tr>
                    <a href="./update.php?id=<?php echo $category['id'] ?>" class="btn btn-info">Edit</a>
                </td>
            </tr>
        </form>
        <?php endforeach; ?>
        </tbody>
    </table>