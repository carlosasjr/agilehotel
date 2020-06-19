<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agille - Hotel</title>


    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style type="text/css">

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Open Sans";
        }

        .call {
            position: relative;
            background: url('assets/images/advogado.jpg') no-repeat;
            background-size: cover;
            background-position: 0 0px;
            padding: 20px 0;
        }

        .call__container {
            position: absolute;
            bottom: 80px;
            padding-left: 80px;
        }

        .call__title {
            font-size: 2rem;
            color: #ca1010;
            display: block;
            font-weight: 700;
        }

        .call__subtitle {
            font-size: 1.3rem;
            color: #e4beb8;
            font-weight: 400;
            padding: 10px 0 15px 0;
            display: block;
            text-align: right;
        }


        .logo {
            display: flex;
            align-items: center;
            justify-content: center;

            margin: 5px auto;
            padding-top: 5px;
            width: 32%;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="container" id="novo_conteiner">
                <div class="logo">
                    <!-- <img src="<?php echo e(url('assets/images/agille.jpg')); ?>" alt="Agille Hotel"> -->
                </div>
                <br>

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


<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo e(url('vendor/jquery/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(url('vendor/jquery/additional-methods.js')); ?>"></script>
<script src="<?php echo e(url('vendor/jquery/messages_pt_BR.min.js')); ?>"></script>
<script src="<?php echo e(url('vendor/jquery/jquery.mask.min.js')); ?>"></script>

<!-- BootStrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous">
</script>

<script type="text/javascript" src="<?php echo e(url('assets/js/register.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/projects/agile/resources/views/welcome.blade.php ENDPATH**/ ?>