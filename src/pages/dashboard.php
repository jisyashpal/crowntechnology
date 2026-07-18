<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['admin_id'])) { header('Location: login.php'); exit(); }

// Fetch Stats
try {
    $serviceCount = $pdo->query("SELECT COUNT(*) FROM services")->fetchColumn();
    $pageCount = $pdo->query("SELECT COUNT(*) FROM pages")->fetchColumn();
    $userCount = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
    $leadCount = $pdo->query("SELECT COUNT(*) FROM leads WHERE is_read = 0")->fetchColumn();
    $appointmentCount = $pdo->query("SELECT COUNT(*) FROM appointments WHERE status = 'pending'")->fetchColumn();

    // Recent Activities
    $recentLeads = $pdo->query("SELECT name, created_at FROM leads ORDER BY created_at DESC LIMIT 5")->fetchAll();
} catch (Exception $e) {
    $serviceCount = $pageCount = $userCount = $leadCount = $appointmentCount = 0;
    $recentLeads = [];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown Admin | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-[#f8fafc] flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-[#0f172a] text-slate-400 flex flex-col hidden md:flex shadow-2xl">
        <div class="p-8 text-white font-bold text-2xl tracking-tight border-b border-slate-800/50">
            CROWN<span class="text-emerald-500">CMS</span>
        </div>
        <nav class="flex-1 p-6 space-y-3">
            <a href="dashboard.php" class="flex items-center gap-3 p-3 rounded-xl bg-emerald-600/10 text-emerald-400 font-semibold border border-emerald-500/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 11l4-4m0 0l4 4m-4-4v4" stroke-width="2"></path></svg>
                Dashboard
            </a>
            <a href="admin_services.php" class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-800/50 hover:text-white transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-width="2"></path></svg>
                Manage Services
            </a>
            <a href="pages.php" class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-800/50 hover:text-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2"></path></svg>
                Pages
            </a>
        </nav>
        <div class="p-4 border-t border-slate-800">
            <a href="logout.php" class="text-sm text-rose-400">Logout</a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 tracking-tight">System Overview</h1>
                <p class="text-slate-500 text-sm">Welcome back, <?= htmlspecialchars($_SESSION['admin_user']) ?>. Here is what's happening today.</p>
            </div>
            <div class="flex items-center gap-4">
                <button class="bg-white p-2.5 rounded-xl border border-slate-200 text-slate-400 hover:text-emerald-500 transition shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" stroke-width="2"></path></svg>
                </button>
                <div class="w-11 h-11 rounded-xl bg-slate-900 border-2 border-white shadow-md flex items-center justify-center text-emerald-400 font-bold">
                    <?= strtoupper(substr($_SESSION['admin_user'], 0, 1)) ?>
                </div>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-500/10 rounded-2xl flex items-center justify-center text-emerald-600 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-width="2"></path></svg>
                </div>
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Active Services</p>
                <h3 class="text-3xl font-bold mt-1 text-slate-900"><?= $serviceCount ?></h3>
            </div>
            <!-- Additional Stats... -->
        </div>

        <!-- Recent Activity Sections -->
        <div class="grid lg:grid-cols-2 gap-8 mt-12">
            <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">
                <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <span class="w-2 h-6 bg-emerald-500 rounded-full"></span>
                    Recent Leads
                </h2>
                <div class="space-y-4">
                    <?php foreach($recentLeads as $lead): ?>
                    <div class="flex justify-between items-center p-4 rounded-2xl hover:bg-slate-50 transition">
                        <span class="font-medium text-slate-700"><?= htmlspecialchars($lead['name']) ?></span>
                        <span class="text-xs text-slate-400"><?= date('M d, H:i', strtotime($lead['created_at'])) ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>