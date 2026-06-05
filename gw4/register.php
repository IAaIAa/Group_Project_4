<?php
require_once 'data.php';
require_once 'components.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($name) && !empty($email) && !empty($password)) {
        // ვინახავთ მონაცემებს სესიაში ბაზის სიმულაციისთვის
        $_SESSION['registered_user'] = [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];
        // წარმატებული რეგისტრაციის შემდეგ გადავდივართ ლოგინის გვერდზე
        header("Location: login.php");
        exit();
    } else {
        $error_message = "Please fill in all fields!";
    }
}

renderHeader($menu_items);
?>

<main class="container" style="padding: 60px 24px; display: flex; justify-content: center;">
    <div style="background: var(--neutral-light); padding: 40px; border-radius: 8px; box-shadow: var(--shadow-md); width: 100%; max-width: 400px;">
        <h2 style="color: var(--secondary); margin-bottom: 8px; text-align: center;">Create Account</h2>
        <p style="color: var(--neutral-grey); text-align: center; margin-bottom: 24px; font-size: 14px;">Join the Nexcent community today</p>
        
        <?php if (!empty($error_message)): ?>
            <div style="background: #FFCDD2; color: #B71C1C; padding: 12px; border-radius: 4px; margin-bottom: 16px; font-size: 14px; text-align: center;">
                <?= $error_message ?>
            </div>
        <?php endif; ?>

        <form action="register.php" method="POST" style="display: flex; flex-direction: column; gap: 16px;">
            <div>
                <label style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 6px; color: var(--neutral-d-grey);">Full Name</label>
                <input type="text" name="name" required style="width: 100%; padding: 12px; border: 1px solid #E5E7EB; border-radius: 4px; font-size: 14px;">
            </div>
            <div>
                <label style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 6px; color: var(--neutral-d-grey);">Email Address</label>
                <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #E5E7EB; border-radius: 4px; font-size: 14px;">
            </div>
            <div>
                <label style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 6px; color: var(--neutral-d-grey);">Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 12px; border: 1px solid #E5E7EB; border-radius: 4px; font-size: 14px;">
            </div>
            <button type="submit" class="btn-primary" style="justify-content: center; padding: 12px; font-size: 16px; margin-top: 8px;">Register</button>
        </form>

        <p style="text-align: center; margin-top: 20px; font-size: 14px; color: var(--neutral-grey);">
            Already have an account? <a href="login.php" style="color: var(--primary); text-decoration: none; font-weight: 600;">Login here</a>
        </p>
    </div>
</main>

<?php renderFooter(); ?>