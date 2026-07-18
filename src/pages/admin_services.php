<?php
session_start();
require_once 'db.php';
if (!isset($_SESSION['admin_id'])) { header('Location: login.php'); exit(); }

$message = '';

// Handle Delete
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM services WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    $message = 'Service deleted successfully!';
}

// Handle Add or Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['save_service']) || isset($_POST['add_service']))) {
    $title = trim($_POST['title']);
    $desc = trim($_POST['description']);
    $icon = trim($_POST['icon']);
    $cat = trim($_POST['category']);
    $id = !empty($_POST['service_id']) ? $_POST['service_id'] : null;

    if ($id) {
        $stmt = $pdo->prepare("UPDATE services SET title = ?, description = ?, icon = ?, category = ? WHERE id = ?");
        $stmt->execute([$title, $desc, $icon, $cat, $id]);
        $message = 'Service updated successfully!';
    } else {
        $stmt = $pdo->prepare("INSERT INTO services (title, description, icon, category) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $desc, $icon, $cat]);
        $message = 'New service added!';
    }
}

// Fetch service for editing
$editService = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $editService = $stmt->fetch();
}

$services = $pdo->query("SELECT * FROM services ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Services | Crown Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-slate-50 flex min-h-screen">
    <!-- Reuse Sidebar Logic -->
    <aside class="w-72 bg-[#0f172a] text-slate-400 flex flex-col hidden md:flex">
        <div class="p-8 text-white font-bold text-2xl border-b border-slate-800/50">CROWN<span class="text-emerald-500">CMS</span></div>
        <nav class="flex-1 p-6 space-y-3">
            <a href="dashboard.php" class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-800/50 transition">Dashboard</a>
            <a href="admin_services.php" class="flex items-center gap-3 p-3 rounded-xl bg-emerald-600/10 text-emerald-400 font-semibold border border-emerald-500/20">Manage Services</a>
        </nav>
    </aside>

    <main class="flex-1 p-10">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-slate-800">Services Management</h1>
            <?php if($message): ?>
                <div class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg text-sm"><?= $message ?></div>
            <?php endif; ?>
        </div>

        <!-- Service Form (Add/Edit) -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 mb-10">
            <h2 class="text-lg font-bold mb-6"><?= $editService ? 'Edit Service' : 'Add New Service' ?></h2>
            <form method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php if ($editService): ?>
                    <input type="hidden" name="service_id" value="<?= $editService['id'] ?>">
                <?php endif; ?>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Service Title</label>
                    <input type="text" name="title" value="<?= htmlspecialchars($editService['title'] ?? '') ?>" required class="w-full px-4 py-2 border rounded-xl outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Icon (Emoji or SVG)</label>
                    <input type="text" name="icon" value="<?= htmlspecialchars($editService['icon'] ?? '') ?>" placeholder="🌐" class="w-full px-4 py-2 border rounded-xl outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                    <textarea name="description" rows="3" required class="w-full px-4 py-2 border rounded-xl outline-none focus:ring-2 focus:ring-emerald-500"><?= htmlspecialchars($editService['description'] ?? '') ?></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Category</label>
                    <input type="text" name="category" value="<?= htmlspecialchars($editService['category'] ?? '') ?>" placeholder="Core / Digital" class="w-full px-4 py-2 border rounded-xl outline-none focus:ring-2 focus:ring-emerald-500">
                </div>
                <div class="flex items-end gap-2">
                    <button type="submit" name="save_service" class="bg-emerald-600 text-white px-8 py-2.5 rounded-xl font-bold hover:bg-emerald-700 transition w-full">
                        <?= $editService ? 'Update Service' : 'Save Service' ?>
                    </button>
                    <?php if ($editService): ?>
                        <a href="admin_services.php" class="bg-slate-200 text-slate-700 px-8 py-2.5 rounded-xl font-bold hover:bg-slate-300 transition text-center">Cancel</a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- Services List -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Icon</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Service Name</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Category</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <?php foreach ($services as $s): ?>
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-6 py-4 text-2xl"><?= htmlspecialchars($s['icon']) ?></td>
                        <td class="px-6 py-4 font-semibold text-slate-700"><?= htmlspecialchars($s['title']) ?></td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-full text-xs font-medium"><?= htmlspecialchars($s['category']) ?></span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="?edit=<?= $s['id'] ?>" class="text-emerald-600 hover:text-emerald-800 font-medium text-sm mr-3">Edit</a>
                            <a href="?delete=<?= $s['id'] ?>" onclick="return confirm('Delete this service?')" class="text-rose-500 hover:text-rose-700 font-medium text-sm">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>