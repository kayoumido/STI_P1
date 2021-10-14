<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();

use Messenger\Authorization;
use Messenger\Database;

require_once('database.php');
require_once('authorization.php');

if (!Authorization::access(Authorization::ADMIN))
    Authorization::redirect();
$db = new Database();

require_once('includes/header.php');
?>

<!-- Navigation-->
<?php include 'includes/nav.php' ?>
<!-- Masthead-->
<div class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <section class="projects-section bg-light" id="login">
                    <table>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>State</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($db->get_users() as $user): ?>
                        <tr>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['password'] ?></td>
                            <td><?= $user['active'] == '1' ? 'Active' : 'Inactive' ?></td>
                            <td><?= $user['role'] ?></td>
                            <td>
                                <a href="">Delete</a>
                                <a href="modifyUser.php">Modify</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </section>
            </div>
        </div>
    </div>
</div>

