<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Using operators and Control Structures</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Value</th>
                    <th>Odd/Even</th>
                    <th>Double</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 1; $i <= 10; $i++) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <?php if($i % 2 == 0):
                            echo "Even";
                        else :
                            echo "Odd";
                        endif;
                        ?>
                    </td>
                    <td><?= $i * 2 ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>
</html>