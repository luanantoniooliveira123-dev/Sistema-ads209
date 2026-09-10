<!DOCTYPE html> <html lang="pt-BR"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Meu Site</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        min-height: 100vh;
        background: linear-gradient(135deg, #0f172a, #1e3a8a);
        color: #fff;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 30px 20px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        margin-left: 25px;
        transition: 0.3s;
    }

    nav a:hover {
        color: #60a5fa;
    }

    .hero {
        min-height: 70vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .hero h1 {
        font-size: 52px;
        margin-bottom: 20px;
    }

    .hero h1 span {
        color: #60a5fa;
    }

    .hero p {
        font-size: 20px;
        color: #cbd5e1;
        max-width: 650px;
        line-height: 1.6;
        margin-bottom: 35px;
    }

    .buttons {
        display: flex;
        gap: 15px;
    }

    .btn {
        display: inline-block;
        padding: 14px 25px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-primary {
        background: #2563eb;
        color: #fff;
    }

    .btn-primary:hover {
        background: #1d4ed8;
        transform: translateY(-2px);
    }

    .btn-secondary {
        border: 1px solid #60a5fa;
        color: #fff;
    }

    .btn-secondary:hover {
        background: #60a5fa;
        color: #0f172a;
    }

    footer {
        text-align: center;
        padding: 20px;
        color: #94a3b8;
        font-size: 14px;
    }

    @media (max-width: 600px) {
        .hero h1 {
            font-size: 38px;
        }

        .hero p {
            font-size: 17px;
        }

        header {
            flex-direction: column;
            gap: 20px;
        }

        nav a {
            margin: 0 8px;
        }

        .buttons {
            flex-direction: column;
            width: 100%;
            max-width: 250px;
        }

        .btn {
            text-align: center;
        }
    }
</style>

</head> <body>
<div class="container">

    <header>
        <div class="logo">
            Meu Site
        </div>

        <nav>
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('Home/luan') ?>">Luan</a>
        </nav>
    </header>

    <main class="hero">

        <h1>
            Bem-vindo ao <span>CodeIgniter</span>
        </h1>

        <p>
            Esta é a página inicial do seu projeto.
            Seu Controller Home está funcionando corretamente!
        </p>

        <div class="buttons">
            <a class="btn btn-primary" href="<?= base_url('Home/luan') ?>">
                Página do Luan
            </a>

            <a class="btn btn-secondary" href="<?= base_url('/') ?>">
                Voltar para Home
            </a>
        </div>

    </main>

    <footer>
        &copy; <?= date('Y') ?> - Meu Site
    </footer>

</div>

</body> </html>