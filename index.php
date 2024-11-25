<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
    <title>CliqueZero - Venda Fácil e Rápida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> <!-- Seu CSS personalizado, se houver -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo e Nome da Marca -->
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="img/icone.ico" alt="Logo CliqueZero" style="width: 40px; height: 40px; margin-right: 10px;">
                <span style="font-size: 1.5rem; font-weight: bold;">CliqueZero</span>
            </a>

            <!-- Botão do Navbar para dispositivos móveis -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links do Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#ebooksModal">Ebooks</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#featuresModal">Vantagens</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#contactModal">Contato</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Transforme Seus Conhecimentos com CliqueZero</h1>
        <p>Os melhores eBooks sobre saúde, negócios e desenvolvimento pessoal estão aqui.</p>
        <a href="ebooks.php">
            <button class="cta-button">Veja nossos eBooks</button>
        </a>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2>Por que Escolher CliqueZero?</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-check-circle fs-1 text-primary"></i>
                    <h4 class="mt-3">Ebooks de Qualidade</h4>
                    <p>Conteúdo selecionado para ajudar você a alcançar seus objetivos.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-clock-history fs-1 text-primary"></i>
                    <h4 class="mt-3">Entrega Imediata</h4>
                    <p>Compre e receba seus eBooks instantaneamente, sem complicações.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-wallet2 fs-1 text-primary"></i>
                    <h4 class="mt-3">Preços Acessíveis</h4>
                    <p>Conhecimento acessível para todos os bolsos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ebooks Section -->
    <section id="ebooks" class="container my-5">
        <h2 class="text-center mb-4">Ebooks Mais Vendidos</h2>
        <div class="row g-4">
            <div class="col-md-2">
                <div class="card ebook-card shadow-sm">
                    <!-- Imagem como link para outra página -->
                    <a href="produtos/detalhes-emagrecer.html" class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/emagrecer.jpg" class="img-fluid" alt="Ebook Emagrecer">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Emagreça Rápido:</h5>
                        <p class="card-text">Descubra as melhores estratégias para emagrecer com saúde.</p>
                        <center><span class="fw-bold">1.930,00kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/15f47f8b-8c2a-4962-be52-ec8926a5a3fc" class="btn btn-primary">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card ebook-card shadow-sm">
                    <!-- Imagem como link para outra página -->
                    <a href="produtos/detalhes-produto.html" class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/invasores.png" class="img-fluid" alt="Ebook 1">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Invasores Digitais:</h5>
                        <p class="card-text">Guia que aborda as técnicas usadas por hackers para acessar suas contas online</p>
                        <center><span class="fw-bold">930,00kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/7b8e9537-9a33-4bec-bfd7-d1b5fa6cfb2a" class="btn btn-primary">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card ebook-card shadow-sm">
                    <div class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/vma.jpg" class="img-fluid" alt="Ebook Invasores">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">VMA - ANGOLA</h5>
                        <p class="card-text">Aprenda marketing e empreenda em Angola!</p>
                        <center><span class="fw-bold">22 700,00 Kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/1a57a9ba-495b-47f6-a50b-76766cfe4a60?p=7310fe7d-7d26-4d67-b213-5455741e82d0" class="btn btn-primary">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Outros Cards de Ebooks -->
        </div>

    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>WhatsApp: (+244) 930090005| Email: geralnegociosvc@gmail.com</p>
        <p>Siga-nos: <a href="https://www.facebook.com/profile.php?id=61569456110696">CliqueZero</a></p>
        <p>&copy; 2024 CliqueZero. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<!-- Modal Contato -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Entre em Contato</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem dúvidas? Entre em contato conosco!</p>
                <p><strong>Email:</strong> geralnegociosvc@gmail.com</p>
                <p><strong>Telefone:</strong> +244 930 090 005</p>
                <p><strong>Endereço:</strong> Bairro Sassonde 2, Huambo, Angola</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ebooksModal" tabindex="-1" aria-labelledby="ebooksModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ebooksModalLabel">Nossos Ebooks</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Aqui você pode explorar todos os nossos ebooks disponíveis para venda, baseados em áreas como:</p>
                <ul>
                    <li>Educação e Desenvolvimento Pessoal</li>
                    <li>Saúde e Bem-Estar</li>
                    <li>Negócios e Empreendedorismo</li>
                    <li>Tecnologia e Habilidades Digitais</li>
                    <li>Hobbies e Lazer</li>
                    <li>Desenvolvimento Criativo</li>
                    <li>E muitos mais...</li>
                    <!-- Adicione mais ebooks conforme necessário -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="ebooks.php" class="btn btn-primary">Ver Todos</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Vantagens -->
<div class="modal fade" id="featuresModal" tabindex="-1" aria-labelledby="featuresModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="featuresModalLabel">Vantagens</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Descubra as vantagens de comprar conosco:</p>
                <ul>
                    <li>Entrega Rápida</li>
                    <li>Preços Acessíveis</li>
                    <li>Suporte 24/7</li>
                    <!-- Adicione mais vantagens conforme necessário -->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>