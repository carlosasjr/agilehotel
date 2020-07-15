<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agille Hoteis</title>
    <!-- Plugins CSS -->


    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/plugins/bootstrap-4.3.1/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/plugins/fancybox-master/jquery.fancybox.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/plugins/aos-animation/aos.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/fonts/ep-icon-fonts/css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/fonts/fontawesome-5/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/fonts/typography-font/typo-fonts.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/css/settings.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/landpage/css/style.css')); ?>">


</head>

<body>
<div class="site-wrapper">
    <div class="preloader-wrap">
        <div class="berlin-cube-grid">
            <div class="berlin-cube berlin-cube1"></div>
            <div class="berlin-cube berlin-cube2"></div>
            <div class="berlin-cube berlin-cube3"></div>
            <div class="berlin-cube berlin-cube4"></div>
            <div class="berlin-cube berlin-cube5"></div>
            <div class="berlin-cube berlin-cube6"></div>
            <div class="berlin-cube berlin-cube7"></div>
            <div class="berlin-cube berlin-cube8"></div>
            <div class="berlin-cube berlin-cube9"></div>
        </div>
    </div>

    <!-- Header Starts -->
    <header class="site-header d-none d-lg-block">
        <div class="container-fluid pl-lg--35 pr-lg--35">
            <div class="row justify-content-between align-items-center position-relative">
                <div class="col">
                    <!-- Brand Logo -->
                    <div class="brand-logo">
                        <a href=""><img src="<?php echo e(asset('assets/landpage/image/Agille-hotel.png')); ?>" alt=""/></a>
                    </div>
                </div>
                <!-- Menu Block -->
                <div class="col">
                    <div id="home" class="main-navigation ">
                        <ul class="main-menu">
                            <li class="menu-item has-dropdown">
                                <a href="#home">Home</a>

                            </li>
                            <li class="menu-item"><a href="#dashboard">Sistema</a></li>
                            <li class="menu-item"><a href="#video">Sobre</a></li>

                        </ul>
                    </div>
                    <div class="mobile-menu"></div>
                </div>

                <!-- Button Block -->
                <div class="col">
                    <div class="header-btns">

                        <a href="#price-section" class="btn btn--primary hvr-shine">Iniciar teste gratuito</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu Header Starts -->
    <header class="mobile-header d-lg-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-7">
                    <a href="index.html" class="site-brand">
                        <img src="<?php echo e(asset('assets/landpage/image/agille-Systems-logo.png')); ?>" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-5 text-right">
                    <div class="header-top-widget">
                        <ul class="header-links">
                            <li class="single-link">
                                <a href="#" class="link-icon hamburger-icon off-canvas-btn"><i
                                        class="icon icon-menu-34"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Off Canvas Navigation Start-->
    <aside class="off-canvas-wrapper">
        <div class="btn-close-off-canvas">
            <i class="icon icon-simple-remove"></i>
        </div>
        <div class="off-canvas-inner">
            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <!-- mobile menu navigation start -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Demos <i class="icon icon-minimal-down"></i></a>

                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->

            <!-- Header buttons start -->
            <div class="header-btns offcanvas">
                <div class="header-btns">
                    <a href="#" class="btn btn-primary--opacity hvr-bounce-to-right">Sign in</a>
                    <a href="#" class="btn btn--primary hvr-shine">Start free trial</a>
                </div>
            </div>
            <!-- Header buttons end -->
        </div>
    </aside>
    <!--Off Canvas Navigation End-->

    <!-- Banner Section -->
    <section class="hero-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="hero-content">
                        <h1 class="title h2">Quer ter a gestão do seu hotel na palma da sua mão?
                            Conheça a AGILLE HOTEIS!</h1>
                        <p>Planejamento e controle dos hospedes, administração de recursos,
                            gestão financeira e muito mais em uma única plataforma!</p>

                    </div>
                </div>
                <div class="col-12" id="dashboard">
                    <div class="dashboard-img" data-aos="fade-up" data-aos-duration='1500' data-aos-once="true">
                        <img src="<?php echo e(asset('assets/landpage/image/dashboard-agille.png')); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="hero-shape"><img src="image/hero-shape.png" alt=""></div> -->
    </section>

    <!-- Feature Section -->
    <div class="feature-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration='1500' data-aos-once="true"
                     data-aos-delay="300">
                    <div class="widget01 feature--widget">
                        <div class="widget__icon">
                            <span class="inner-circle circle-bg-1"></span>
                            <span class="outer-circle circle-bg-1"></span>
                        </div>
                        <div class="widget__body divider--right">
                            <h3 class="widget__heading h6">Sistema Online</h3>
                            <p>Faça a gestão da sua empresa de onde estiver, sistema em nuvem sem necessidade de
                                estrutura física.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration='1500' data-aos-once="true"
                     data-aos-delay='800'>
                    <div class="widget01 feature--widget">
                        <div class="widget__icon">
                            <span class="inner-circle circle-bg-2"></span>
                            <span class="outer-circle circle-bg-2"></span>
                        </div>
                        <div class="widget__body divider--right">
                            <h3 class="widget__heading h6">Grid de Disponibilidade</h3>
                            <p>Tenha acesso a todos os quartos separados por andar, ocupados e vagos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration='1500' data-aos-once="true"
                     data-aos-delay='1300'>
                    <div class="widget01 feature--widget">
                        <div class="widget__icon">
                            <span class="inner-circle circle-bg-3"></span>
                            <span class="outer-circle circle-bg-3"></span>
                        </div>
                        <div class="widget__body">
                            <h3 class="widget__heading h6">Gestão Financeira</h3>
                            <p>Tenha em mãos todas as informações para uma Gestão Financeira completa, rápida e
                                estratégica..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section -->
    <div class="content-section bg-light-white section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="content-img content-img-group-1">
                        <div class="image-1 d-none d-md-block " data-aos="fade-left" data-aos-duration='1500'
                             data-aos-once="true">
                            <img src="<?php echo e(asset('assets/landpage/image/laptop-agillepng.png')); ?>" alt="">
                        </div>
                        <div class="image-2 image-overlay d-none d-md-block" data-aos="fade-right" dat
                             data-aos-duration="1500" data-aos-once="true">

                        </div>
                        <div class="image-mobile d-md-none">

                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6">
                    <div class="content-section-text">
                        <h2 class="title">Tenha acesso a todo <br class="d-none d-xs-block">seu hotel em apenas uma
                            tela.</h2>
                        <p>Grid de disponibilidade simples, interativo e com toda informação que seu hotel precisa, para
                            uma gestão
                            rápida e eficaz.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section 2 -->
    <
    <!-- Video Section -->
    <div class="section-padding video-bg" id="video">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="video-content">
                        <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-btn"
                           data-aos="zoom-in" data-aos-duration='1000' data-aos-once="true"><i
                                class="icon icon-triangle-right-17-2"></i></a>
                        <h2 class="title">Conheça nós da Agille Hoteis</h2>
                        <p>Nossos sistemas são desenvolvidos por analistas de negócios, designers em experiencia do
                            usuário e desenvolvedores experientes.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Pricing Section -->
    <div id="price-section" class="pricing-section section-padding-top mb--60 mb-md--80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8 mb--35">
                    <div class="section-title">
                        <h2 class="title h3">Crie sua conta</h2>
                    </div>
                </div>


                <div class="col-12">
                    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::open(['route' => 'register.company', 'class' => 'form', 'id' => 'formRegister']); ?>


                    <div class="form-group">
                        <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome Completo']); ?>

                    </div>

                    <div class="form-group">
                        <?php echo Form::text('cellphone', null, ['id' => 'cellphone', 'class' => 'form-control', 'placeholder' => '(DDD) Celular']); ?>

                    </div>


                    <div class="form-group">
                        <?php echo Form::text('cpf', null, ['id' => 'cpf', 'class' => 'form-control', 'placeholder' => 'CPF (apenas numeros)']); ?>

                    </div>


                    <div class="form-group">
                        <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']); ?>

                    </div>

                    <div class="form-group">
                        <?php echo Form::text('email_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Repita o email']); ?>

                    </div>

                    <div class="form-group">
                        <?php echo Form::label('subdomain', 'Crie um endereço exclusivo para sua empresa acessar o Agille Hotel', ['class' => 'control-label']);; ?>

                        <div class="input-group">
                            <?php echo Form::text('subdomain', null, ['class' => 'form-control', 'placeholder' => 'SubDomínio']); ?>


                            <div class="input-group-append">
                                <span class="input-group-text"><?php echo e(env('APP_SUBDOMAIN')); ?></span>
                            </div>
                        </div>

                        <div class="form_load" style="display:none;">
                            <img src="<?php echo e(url('assets/images/load.gif')); ?>" alt="[CARREGANDO...]" title="CARREGANDO..."/>
                        </div>
                        <span id="domainexists"></span>
                    </div>


                    <input type="checkbox" id="create_database" name="create_database" checked="checked"
                           style="display: none"
                           class="checkbox">

                    <div class="col-md-12 form-group checkbox">
                        <input type="checkbox" id="concordo" checked="" class="checkbox">
                        <span class="checkbox tl strong" for="concordo">
							Concordo com os <a href="<?php echo e(url('assets/protecao/termo.pdf')); ?>" target="_blank">termos de uso </a>
						</span>
                    </div>

                    <?php echo Form::submit('CRIAR MINHA CONTA', ['class' => 'btn btn-primary']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>

        </div>
    </div>

    <!-- Brand Section -->


    <!-- Testimonial Section -->
    <div class="pb--60 pb-md--70">
        <div class="container">
            <div class="card-group berlin-card-group">
                <div class="card testimonial-card-1">
                    <div class="card-body">
                        <span class="quote-icon">”</span>
                        <p class="card-text">“Meu novo sistema é muito mais rápido e fácil de trabalhar do que meu
                            sistema antigo. Muito satisfeito com a escolha”</p>
                    </div>
                    <div class="card-footer">
                        <div class="client-card">
                            <div class="image">
                                <img src="<?php echo e(asset('assets/landpage/image/testimonial1.png')); ?>" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Anderson Silva</h5>
                                <span>Gerente Dafiti Hotel</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card testimonial-card-1">
                    <div class="card-body">
                        <span class="quote-icon">”</span>
                        <p class="card-text">“Simplesmente o melhor. Melhor que todo o resto. Eu recomendaria este
                            produto para usuários iniciantes e avançados.”</p>
                    </div>
                    <div class="card-footer">
                        <div class="client-card">
                            <div class="image">
                                <img src="<?php echo e(asset('assets/landpage/image/testimonial2.png')); ?>" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Cristine Cardoso</h5>
                                <span>Analista de Sistema Kahoot Hotel</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card testimonial-card-1">
                    <div class="card-body">
                        <span class="quote-icon">”</span>
                        <p class="card-text">“Este é um produto de alta qualidade. Não há necessidade de pensar duas
                            vezes antes de comprar.”</p>
                    </div>
                    <div class="card-footer">
                        <div class="client-card">
                            <div class="image">
                                <img src="<?php echo e(asset('assets/landpage/image/testimonial3.png')); ?>" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Carlos Bruno</h5>
                                <span>Supervisor Jr Sereia Hoteis</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="pb--60 pb-md--165">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="cta-wrapper">
                        <h3 class="title mt--20" data-aos="fade-right" data-aos-duration='1500' data-aos-once="true">
                            Transforme seu hotel!</h3>
                        <div class="button" data-aos="fade-left" data-aos-duration='1500' data-aos-once="true">
                            <a href="#price-section" class="btn btn--primary mt--20  hvr-shine">Iniciar teste gratuito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="section-padding-top footer-bg shape-holder" id="footer">
        <div class="container">
            <div class="col">
                <div class="main-navigation ">
                    <ul class="main-menu">
                        <li class="menu-item has-dropdown">
                            <a href="#home">Home</a>

                        </li>
                        <li class="menu-item"><a href="#dashboard">Sistema</a></li>
                        <li class="menu-item"><a href="#video">Sobre</a></li>

                    </ul>
                </div>
                <div class="mobile-menu"></div>
            </div>


            <div class="copyright-area pt--60 pt-md--80 pb--40">
                <div class="row align-items-center space-db--10">
                    <div class="col-lg-2 offset-lg-2 col-md-3 order-md-3 mb--10">
                        <ul class="footer-list social-list">
                            <li><a href=""><i class="icon icon-logo-twitter"></i></a></li>
                            <li><a href=""><i class="icon icon-logo-fb-simple"></i></a></li>
                            <li><a href=""><i class="icon icon-google"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-5 col-sm-7 order-md-2 mb--10">
                        <ul class="footer-list list-inline">
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="">Site map</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 order-md-1  mb--10">
                        <p class="mb-0">© 2020 Agille Systems. All rights reserved</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-shapes">
            <div class="shape-1">
                <img src="<?php echo e(asset('assets/landpage/image/footer-shape.svg')); ?>" alt="">
            </div>
            <div class="shape-2">
                <!-- <img src="./image/footer-shape-white.svg" alt=""> -->
            </div>
        </div>
    </footer>

</div>


<script src="<?php echo e(asset('assets/landpage/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/landpage/plugins/jquery/jquery-migrate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/landpage/plugins/jquery/bootstrap.bundle.js')); ?>"></script>


<script src="<?php echo e(asset('assets/landpage/plugins/fancybox-master/jquery.fancybox.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/landpage/plugins/aos-animation/aos.js')); ?>"></script>


<script src="<?php echo e(asset('assets/landpage/js/active.js')); ?>"></script>


<script src="<?php echo e(url('vendor/jquery/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(url('vendor/jquery/additional-methods.js')); ?>"></script>
<script src="<?php echo e(url('vendor/jquery/messages_pt_BR.min.js')); ?>"></script>
<script src="<?php echo e(url('vendor/jquery/jquery.mask.min.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(url('assets/js/register.js')); ?>"></script>


</body>

</html>
<?php /**PATH /var/www/projects/agile/resources/views/welcome.blade.php ENDPATH**/ ?>