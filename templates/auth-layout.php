<!DOCTYPE html>
<html lang="<?= esc($locale);?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= esc($title);?></title>
<meta name="robots" content="noindex,nofollow">
<meta name="theme-color" content="#4272d7">
<link href="<?= base_url('themes/admin-cool-admin/css/font-face.css');?>" rel="stylesheet" media="all">
<?php
/*
<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
*/?>
<link href="<?= base_url('themes/admin-cool-admin/vendor/fontawesome-7.2.0/css/all.min.css');?>" rel="stylesheet" media="all">
<link href="<?= base_url('themes/admin-cool-admin/vendor/bootstrap-5.3.8.min.css');?>" rel="stylesheet" media="all">
<link href="<?= base_url('themes/admin-cool-admin/vendor/css-hamburgers/hamburgers.min.css');?>" rel="stylesheet" media="all">
<link href="<?= base_url('themes/admin-cool-admin/css/theme.css');?>" rel="stylesheet" media="all">
<link href="<?= base_url('themes/admin-cool-admin/css/theme-2026.css');?>" rel="stylesheet" media="all">
<style type="text/css">
    #debug-icon-link {
        display: block;
    }    
</style>
<?= $styles;?>
</head>
<body class="theme-2026 auth-page">
<main id="auth-form" class="login-wrap">
    <div class="login-content">
        <a href="<?= site_url('admin');?>" class="auth-brand" aria-label="<?= lang('Admin home');?>">
            <span class="logo-mark" aria-hidden="true">BA</span>
            <span class="logo-text">BasicApp</span>
        </a>
        <?= $slot;?>
        <?php
        /*
        <h1 class="auth-title">Welcome back</h1>
        <p class="auth-subtitle">Sign in to continue to your dashboard.</p>

        <form class="login-form" action="" method="post" onsubmit="return false">
            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" class="au-input" type="email" name="email"
                    placeholder="you@example.com" autocomplete="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="au-input" type="password" name="password"
                    placeholder="••••••••" autocomplete="current-password" required>
            </div>
            <div class="login-checkbox">
                <label>
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
                <a href="forget-pass.html">Forgot password?</a>
            </div>
            <button class="au-btn au-btn--green" type="submit">Sign in</button>

            <div class="social-login-content">
                <div class="social-button">
                    <button class="au-btn au-btn--blue" type="button">
                        <i class="fa-brands fa-google" aria-hidden="true"></i> Continue with Google
                    </button>
                    <button class="au-btn au-btn--blue2" type="button">
                        <i class="fa-brands fa-github" aria-hidden="true"></i> Continue with GitHub
                    </button>
                </div>
            </div>
        </form>

        <div class="register-link">
            <p>Don't have an account? <a href="register.html">Create one</a></p>
        </div>
        */?>
    </div>
</main>
<script src="<?= base_url('themes/admin-cool-admin/js/vanilla-utils.js');?>"></script>
<script src="<?= base_url('themes/admin-cool-admin/vendor/bootstrap-5.3.8.bundle.min.js');?>"></script>
<script src="<?= base_url('themes/admin-cool-admin/js/bootstrap5-init.js');?>"></script>
<script src="<?= base_url('themes/admin-cool-admin/js/main-vanilla.js');?>"></script>
<script src="<?= base_url('themes/admin-cool-admin/js/modern-plugins.js');?>"></script>
<?= $scripts;?>
</body>
</html>
