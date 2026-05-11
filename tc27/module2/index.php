<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators and Control Structures</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- div.container>div.header>h3{Operators and Control Structures Demo}^div.main>table>thead>th*3^tbody -->
    <div class="container">
        <div class="header">
            <h3>Operators and Control Structures Demo</h3>
        </div>
        <div class="main">
            <table>
                <thead>
                    <th>Number</th>
                    <th>Odd/Even</th>
                    <th>Double</th>
                </thead>
                <tbody>
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td>
                                <?php if($i % 2 == 0):
                                    echo "Even";
                                else:
                                    echo "Odd";
                                endif;
                                ?>
                            </td>
                            <td><?= $i * 2; ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>