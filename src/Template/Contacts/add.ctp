<div class="row">
	<div class="col-lg-6">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Cadastro de novo Contato <small></small></h5>

				<div class="ibox-tools">


					<a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'index']) ?>" class="btn btn-white btn-sm">

						Voltar para lista de contatos
					</a>

					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
				</div>
			</div>
			<div class="ibox-content">

				<?php $this->loadHelper('Form', ['templates' => 'app_form_horizontal']) ?>

				<?= $this->Form->create($contact, ['id' => 'form-main', 'class' => 'form-horizontal formValidate', 'novalidate']) ?>

				<?= $this->Form->input('name', ['label' => ['text' => 'Nome'], 'class' => 'form-control']) ?>

				<div class="hr-line-dashed"></div>

				<?= $this->Form->input('phone', ['label' => ['text' => 'Celular'], 'class' => 'form-control', 'data-mask-type' => 'phone']) ?>

				<div class="hr-line-dashed"></div>

				<?= $this->Form->input('note', ['type' => 'textarea', 'label' => ['text' => 'Observações']]) ?>

				<div class="hr-line-dashed"></div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Aniversário</label>

					<div class="col-sm-10">
						<div class="row">
							<div class="col-md-3">
								<?= $this->Form->day('birthdate', ['class' => 'form-control', 'empty' => 'Dia', 'required']) ?>
							</div>
							<div class="col-md-3">
								<?= $this->Form->month('birthdate', ['class' => 'form-control', 'empty' => 'Mês', 'required']) ?>
							</div>
							<div class="col-md-3">

								<?= $this->Form->hidden('birthdate[year]', ['value' => '2017']) ?>

							</div>
						</div>
					</div>
				</div>

				<div class="hr-line-dashed"></div>

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<p>
							<strong>Notificar-me via Whatsapp no dia do aniversário deste contato</strong>
						</p>
						<?= $this->Form->input('notify', ['label' => false, 'type' => 'checkbox', 'class' => 'js-switch']) ?>
					</div>
				</div>


				<div class="hr-line-dashed"></div>

				<div class="form-group">
					<div class="col-sm-4 col-sm-offset-2">
						<!--<button class="btn btn-white" type="submit">Cancel</button>-->
						<?= $this->Form->button('Cadastrar Contato', ['class' => 'btn btn-primary']) ?>
					</div>
				</div>

				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>

<?php $this->append('script', $this->element('load_module')); ?>
