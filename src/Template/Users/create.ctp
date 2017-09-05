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
                Receba notificações sobre seus contatos diretamente em seu Whatsapp.
            </p>

        </div>
        <div class="col-md-6">
            <div class="ibox-content">


				<h2 class="text-center">Nova conta</h2>


	            <?= $this->Flash->render() ?>

	            <?= $this->Form->create($user, ['id' => 'formCreate', 'class' => 'm-t', 'role' => 'form', 'novalidate']) ?>
                <div class="form-group">
		            <?= $this->Form->input('name', ['type' => 'text', 'label' => false, 'placeholder' => 'Nome', 'class' => 'form-control', 'required']) ?>
                </div>
                <div class="form-group">
		            <?= $this->Form->input('email', ['type' => 'email', 'label' => false, 'placeholder' => 'E-mail', 'class' => 'form-control', 'required']) ?>
                </div>
                <div class="form-group">
		            <?= $this->Form->input('password', ['label' => false, 'placeholder' => 'Senha', 'class' => 'form-control', 'required']) ?>
                </div>
                <div class="form-group">
		            <?= $this->Form->input('phone', ['label' => false, 'placeholder' => 'DD + Celular (Whatsapp)', 'class' => 'form-control', 'required', 'data-mask-type' => 'phone']) ?>
                </div>
	            <?= $this->Form->button('Criar conta', ['class' => 'btn btn-primary block full-width m-b']); ?>

                <p class="text-right">
                    <a class="btn btn-sm btn-white " href="<?= $this->Url->build(['_name' => 'home']) ?>">Voltar</a>
                </p>

	            <?= $this->Form->end(); ?>

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
	'/js/plugins/jquery-mask-plugin/dist/jquery.mask.min.js',
]);

$this->append('script', $this->element('load_module'));
echo $this->fetch('script');
?>
</body>

</html>
