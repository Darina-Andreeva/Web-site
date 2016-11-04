
<?php
require 'app' . DIRECTORY_SEPARATOR . 'connection.php';
require 'view' . DIRECTORY_SEPARATOR . 'menu.php';
require 'template' . DIRECTORY_SEPARATOR . 'template.php';
$admin = new ADMIN($DB_con);
?>
<table style="width:90%; border: 1px solid black; margin: 0 auto; ">     
    <tr style="border: 1px solid black">
        <th class="fonts">USER ID</th>
        <th class="fonts">USER NAME</th>
        <th class="fonts">USER EMAIL</th>
        <th class="fonts">USER PASSWORD</th>
        <th class="fonts">DELETE</th>
        <th class="fonts">EDIT</th>
    </tr> 
    <?php foreach ($admin->allusers() as $user) { ?>
        <tr style="margin:8px;">
            <td style="border: 1px solid black; font-size: 18px;"><?php echo $user['user_id']; ?></td>
            <td style="border: 1px solid black; font-size: 18px;"><?php echo $user['user_name']; ?></td> 
            <td style="border: 1px solid black; font-size: 18px;"><?php echo $user['user_email']; ?></td>
            <td style="border: 1px solid black; font-size: 18px;"><?php echo $user['user_pass']; ?></td>
            <td style="border: 1px solid black; font-size: 18px;">
                <a href="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $user['user_id'] . '&action=delete'; ?>">
                    <?php $admin->deleteuser(); ?>DELETE</a>
            </td> 
            <td style="border: 1px solid black; font-size: 18px;">
                <a href="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $user['user_id'] . '&action=edit'; ?>">EDIT</a>
            </td> 
        </tr>

    <?php } ?>
</table>

<?php if (@$_GET['action'] == "delete") { ?>
    <a href='admin.php'>Refresh to see results</a>
<?php
}

if (@$_GET['action'] == 'edit') {
    include 'view' . DIRECTORY_SEPARATOR . 'edit-form.php';


    if (isset($_GET['id'])) {

        $sql = $DB_con->query("SELECT * FROM users WHERE user_id=" . $_GET['id']);
        $result = $sql->fetchAll();
    }
    if (isset($_POST['btn-update'])) {
        $fname = $admin->validate($_POST['first_name']);
        $uemail = $admin->validate($_POST['user_email']);
        $admin->update($fname, $uemail);
        ?>
        <a href='admin.php'>Refresh to see results</a>
    <?php
    }
}
         



