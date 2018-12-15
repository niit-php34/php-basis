<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Content</td>
            <td>Date Post</td>
        </tr>

        <tr>
            <?php
            foreach ($data as $r) {
                ?>
                <tr>
                    <td> <?php echo $r->id;?></td>
                    <td> <?php echo $r->title;?></td>
                    <td> <?php echo $r->content?></td>
                    <td> <?php echo $r->post_date; ?></td>
                </tr>
                <?php
            }
            ?>
        </tr>
    </table>
</body>
</html>