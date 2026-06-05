<?php
require_once 'data.php';
require_once 'components.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // ვამოწმებთ, არსებობს თუ არა დარეგისტრირებული მომხმარებელი სესიაში
    if (isset($_SESSION['registered_user'])) {
        $reg_user = $_SESSION['registered_user'];
        
        if ($email === $reg_user['email'] && $password === $reg_user['password']) {
            // ავტორიზაცია წარმატებულია
            $_SESSION['user_name'] = $reg_user['name'];
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Invalid Email or Password!";
        }
    } else {
        $error_message = "No user found. Please register first!";
    }
}

renderHeader($menu_items);
?>

<main class="container" style="padding: 60px 24px; display: flex; justify-content: center;">
    <div style="background: var(--neutral-light); padding: 40px; border-radius: 8px; box-shadow: var(--shadow-md); width: 100%; max-width: 400px;">
        <h2 style="color: var(--secondary); margin-bottom: 8px; text-align: center;">Sign In</h2>
        <p style="color: var(--neutral-grey); text-align: center; margin-bottom: 24px; font-size: 14px;">Log in to access your Nexcent portal</p>
        
        <?php if (!empty($error_message)): ?>
            <div style="background: #FFCDD2; color: #B71C1C; padding: 12px; border-radius: 4px; margin-bottom: 16px; font-size: 14px; text-align: center;">
                <?= $error_message ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" style="display: flex; flex-direction: column; gap: 16px;">
            <div>
                <label style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 6px; color: var(--neutral-d-grey);">Email Address</label>
                <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #E5E7EB; border-radius: 4px; font-size: 14px;">
            </div>
            <div>
                <label style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 6px; color: var(--neutral-d-grey);">Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 12px; border: 1px solid #E5E7EB; border-radius: 4px; font-size: 14px;">
            </div>
            <button type="submit" class="btn-primary" style="justify-content: center; padding: 12px; font-size: 16px; margin-top: 8px;">Login</button>
        </form>

        <p style="text-align: center; margin-top: 20px; font-size: 14px; color: var(--neutral-grey);">
            Don't have an account yet? <a href="register.php" style="color: var(--primary); text-decoration: none; font-weight: 600;">Register here</a>
        </p>
    </div>
</main>

<?php renderFooter(); ?>