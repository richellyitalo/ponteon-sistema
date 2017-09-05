<?php

$this->layout = false;

?>
<!DOCTYPE html>
<html>

<head>

	<?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
		<?= isset($title) ? strip_tags($title) : $this->fetch('title') ?>
        | Ponteon
    </title>

	<?php

	echo $this->Html->meta('icon');

	echo $this->Html->css([
		'/css/bootstrap.min.css',
		'/font-awesome/css/font-awesome.css',

		'/css/animate.css',
		'/css/style.css',
		'/css/custom.css'
	]);
	?>

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">
    <div class="row">

        <div class="col-md-6">
            <h2 class="font-bold">Bem vindo ao sistema Ponteon.</h2>

            <p>
                Sistema desenvolvido para gerenciamento de seus contatos.
            </p>

            <p>
                Envio direto para seus contatos via Whatsapp.
            </p>

        </div>
        <div class="col-md-6">
            <div class="ibox-content">

				<?= $this->Flash->render('auth') ?>
                <button type="button" class="btn btn-primary block full-width m-b" data-toggle="modal" data-target="#myModal">
                    Login
                </button>
                <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content animated fadeInDown">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-laptop modal-icon"></i>
                                <h4 class="modal-title">Login</h4>
                                <small class="font-bold">Preencha com e-mail e senha</small>
                            </div>
                            <div class="modal-body">

                                <div id="response"><!-- resposta callback ajax --></div>

								<?= $this->Form->create(null, ['id' => 'formLogin', 'class' => 'm-t', 'role' => 'form', 'novalidate']) ?>
                                <div class="form-group">
									<?= $this->Form->input('email', ['type' => 'email', 'label' => false, 'placeholder' => 'E-mail', 'class' => 'form-control', 'required']) ?>
                                </div>
                                <div class="form-group">
									<?= $this->Form->input('password', ['label' => false, 'placeholder' => 'Senha', 'class' => 'form-control', 'required']) ?>
                                </div>
								<?= $this->Form->button('Logar', ['class' => 'btn btn-primary block full-width m-b']); ?>

                                <!--<a href="#">
									<small>Forgot password?</small>
								</a>-->
								<?= $this->Form->end(); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-muted text-center">
                    <small>Não possui uma conta?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="<?= $this->Url->build(['_name' => 'create']) ?>">Crie uma conta grátis</a>


                <p class="m-t">

                </p>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Ponteon
        </div>
        <div class="col-md-6 text-right">
            <small>©<?= date('Y') ?></small>
        </div>
    </div>
</div>

<?php
echo $this->element('vars');

echo $this->Html->script([
	'/js/jquery-2.1.1.js',
	'/js/bootstrap.min.js',
	'/js/plugins/jquery-validator/jquery.validate.min.js',
	'/js/plugins/jquery-validator/additional-methods.min.js',
	'/js/plugins/jquery-validator/localization/messages_pt_BR.min.js',
]);

$this->append('script', $this->element('load_module'));
echo $this->fetch('script');
?>
</body>

</html>
