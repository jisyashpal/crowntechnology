<?php
// Session Security - Must be set before session_start()
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);

session_start();
require_once 'db.php';

if (!isset($pdo) || !$pdo) {
    die('Database connection failed. Please try again later.');
}

if (isset($_SESSION['admin_id'])) {
    header('Location: dashboard.php');
    exit();
}

// CSRF Token Generation
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF Validation
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('CSRF token validation failed.');
    }

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $username = trim($username);
    $password = trim($password);

    if (!empty($username) && !empty($password)) {
        try {
            $stmt = $pdo->prepare("SELECT id, name, username, password, role FROM users WHERE LOWER(username) = LOWER(?)");
            $stmt->execute([$username]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                session_regenerate_id(true);
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_name'] = $user['name'];
                $_SESSION['admin_user'] = $user['username'];
                $_SESSION['admin_role'] = $user['role'];
                
                header('Location: dashboard.php');
                exit();
            } else {
                $error = 'Invalid credentials. Please try again.';
            }
        } catch (PDOException $e) {
            // --- FIX: Database query error handling ---
            error_log("ERROR: Database query failed: " . $e->getMessage());
            $error = 'An internal error occurred. Please try again later.';
            // --- END FIX ---
        }
    } else {
        $error = 'All fields are required.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Crown Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-[#020617] flex items-center justify-center min-h-screen relative overflow-hidden">
    <!-- Background Decorative Blobs -->
    <div class="absolute top-[-10%] left-[-10%] w-72 h-72 bg-emerald-500/20 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-72 h-72 bg-blue-500/20 rounded-full blur-[120px]"></div>

    <div class="glass p-10 rounded-3xl shadow-2xl w-full max-w-md z-10 mx-4">
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-500/10 rounded-2xl mb-4 text-emerald-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">CROWN CMS</h1>
            <p class="text-slate-500 mt-2 font-medium">Admin Authentication</p>
        </div>
        
        <?php if ($error): ?>
            <div class="bg-rose-50 border border-rose-100 text-rose-600 px-4 py-3 rounded-xl mb-6 text-sm font-medium flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <div>
                <label for="username" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2 ml-1">Username</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <input type="text" id="username" name="username" required placeholder="Enter username" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:bg-white outline-none transition-all placeholder:text-300">
                </div>
            </div>
            <div>
                <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2 ml-1">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </span>
                    <input type="password" id="password" name="password" required placeholder="••••••••" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:bg-white outline-none transition-all placeholder:text-300">
                </div>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-emerald-600 to-teal-600 text-white py-3 rounded-xl font-bold hover:from-emerald-700 hover:to-teal-700 hover:shadow-lg hover:shadow-emerald-500/30 transition-all active:scale-[0.98] mt-4">
                Sign In
            </button>
        </form>

        <div class="mt-8 text-center">
            <a href="#" class="text-sm text-slate-400 hover:text-emerald-600 transition font-medium">Forgot your password?</a>
        </div>
    </div>
</body>
</html>