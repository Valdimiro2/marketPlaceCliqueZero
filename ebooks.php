<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebooks - CliqueZero</title>
    <!-- Link do CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> <!-- Seu CSS personalizado, se houver -->
</head>

<body>

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
    <section class="hero-section">
        <h1>Transforme Seus Conhecimentos com CliqueZero</h1>
        <p>Os melhores eBooks sobre saúde, negócios e desenvolvimento pessoal estão aqui.</p>
    </section>

    <!-- Conteúdo da Página (Ebooks) -->
    <div class="container mt-5">
        <p class="text-center mb-4" style="font-size: 1.2rem; line-height: 1.6; color: #555; background-color: #fff; padding: 1rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            Descubra nossa seleção exclusiva de eBooks e produtos afiliados! Cada item foi escolhido com cuidado, garantindo qualidade e valor para transformar sua experiência. Aproveite o que preparamos para você!
        </p>


        <div class="row">
            <!-- Exemplo de Ebook 1 -->
            <div class="col-md-2 mb-4">
                <div class="card ebook-card shadow-sm">
                    <div class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/emagrecer.jpg" class="img-fluid" alt="Ebook Emagrecer">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Emagreça Rápido:</h5>
                        <p class="card-text">Descrição curta sobre o conteúdo do eBook.</p>
                        <center><span class="fw-bold">1.930,00kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/15f47f8b-8c2a-4962-be52-ec8926a5a3fc" class="btn btn-primary">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exemplo de Ebook 2 -->
            <div class="col-md-2 mb-4">
                <div class="card ebook-card shadow-sm">
                    <div class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/invasores.png" class="img-fluid" alt="Ebook Invasores">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Invasores Digitais:</h5>
                        <p class="card-text">Descrição curta sobre o conteúdo do eBook.</p>
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
                        <img src="img/self.webp" class="img-fluid" alt="Ebook Invasores">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Autocuidado e Cosméticos:</h5>
                        <p class="card-text">Guia Prático para Jovens,cabeleireiros e comércio local</p>
                        <center><span class="fw-bold">3.500,00 Kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/14eb03aa-6726-4c4d-97bf-9b75b934b9f0?p=7310fe7d-7d26-4d67-b213-5455741e82d0" class="btn btn-primary">Comprar Agora</a>
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
            <div class="col-md-2 mb-4">
                <div class="card ebook-card shadow-sm">
                    <div class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/forex.jpg" class="img-fluid" alt="Ebook Invasores">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">A Bíblia do Forex:</h5>
                        <p class="card-text">Guia Completo para Investidores."educação, oportunidades, diversificação, sucesso."</p>
                        <center><span class="fw-bold">2.500,00 Kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/9d7c854d-2d33-4c4f-b855-eed31f51e71d?p=7310fe7d-7d26-4d67-b213-5455741e82d0" class="btn btn-primary">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card ebook-card shadow-sm">
                    <div class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/24-horas.png" class="img-fluid" alt="Ebook Invasores">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Primeira venda em 24h</h5>
                        <p class="card-text">Estratégias rápidas para resultados imediatos.</p>
                        <center><span class="fw-bold">3.500,00 Kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/cac30d83-f336-4fec-926b-9ec83da0a93b?p=7310fe7d-7d26-4d67-b213-5455741e82d0" class="btn btn-primary">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="card ebook-card shadow-sm">
                    <div class="card-img-top img-container d-flex align-items-center justify-content-center">
                        <img src="img/comp.png" class="img-fluid" alt="Ebook Invasores">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">comprovante residência</h5>
                        <p class="card-text">
                        Como criar comprovante residência de Portugal.</p>
                        <center><span class="fw-bold">5.000,00 Kz</span></center>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="https://pay.kuenha.com/52b7450a-55ad-45d2-87c7-0127409b1e86?p=7310fe7d-7d26-4d67-b213-5455741e82d0" class="btn btn-primary">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adicione mais ebooks conforme necessário -->
        </div>
    </div>

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