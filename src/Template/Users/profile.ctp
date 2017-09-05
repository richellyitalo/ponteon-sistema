<div class="row">
	<div class="col-lg-6">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Dados do Perfil<small></small></h5>
				<div class="ibox-tools">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
				</div>
			</div>
			<div class="ibox-content">

				<?php $this->loadHelper('Form', ['templates' => 'app_form_horizontal']) ?>

				<?= $this->Form->create($user, ['id' => 'form-main', 'class' => 'form-horizontal']) ?>

				<?= $this->Form->input('name', ['label' => ['text' => 'Nome'], 'class' => 'form-control']) ?>

				<div class="hr-line-dashed"></div>

				<?= $this->Form->input('email', ['label' => ['text' => 'E-mail'], 'class' => 'form-control']) ?>

				<div class="hr-line-dashed"></div>

				<?= $this->Form->input('new_password', ['label' => ['text' => 'Nova senha'], 'type' => 'password', 'class' => 'form-control']) ?>

				<div class="hr-line-dashed"></div>

				<?= $this->Form->input('phone', ['label' => ['text' => 'Celular'], 'class' => 'form-control', 'data-mask-type' => 'phone']); ?>

				<div class="hr-line-dashed"></div>

				<div class="form-group">
					<div class="col-sm-4 col-sm-offset-2">
						<!--<button class="btn btn-white" type="submit">Cancel</button>-->
						<?= $this->Form->button('Atualizar perfil', ['class' => 'btn btn-primary']) ?>
					</div>
				</div>

				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>

<?php $this->append('script', $this->element('load_module')); ?>
