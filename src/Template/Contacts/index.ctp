<div class="row">
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>
					Sua lista de contatos
				</h5>
				<div class="ibox-tools">


					<a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'add']) ?>" class="btn btn-primary">
						<i class="fa fa-plus"></i>
						Adicionar um novo contato
					</a>
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
				</div>
			</div>
			<div class="ibox-content">

                <input type="text" class="form-control input-sm m-b-xs" id="filter"
                       placeholder="Filtrar contatos">
				<!--<div class="row">
					<div class="col-sm-5 m-b-xs"><select class="input-sm form-control input-s-sm inline">
							<option value="0">Option 1</option>
							<option value="1">Option 2</option>
							<option value="2">Option 3</option>
							<option value="3">Option 4</option>
						</select>
					</div>
					<div class="col-sm-4 m-b-xs">
						<div data-toggle="buttons" class="btn-group">
							<label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> Day </label>
							<label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> Week </label>
							<label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Month </label>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
										<button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
					</div>
				</div>-->
				<div class="table-responsive">

					<?php if ($contacts->isEmpty()): ?>
						<div class="text-center">
							<h3>Nenhum contato em sua lista</h3>

							<br/><a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'add']) ?>" class="btn btn-primary">

								Adicione seu primeiro contato
							</a>
						</div>
					<?php else: ?>

						<table class="table table-striped table-hover footable" data-page-size="8" data-filter="#filter">
							<thead>
								<tr>

									<!--<th></th>-->
									<th><?= $this->Paginator->sort('id') ?></th>
									<th><?= $this->Paginator->sort('name', 'Nome') ?></th>
									<th><?= $this->Paginator->sort('phone', 'Celular') ?></th>
									<th><?= $this->Paginator->sort('birthday', 'Data de Nasc.') ?></th>
									<th><?= $this->Paginator->sort('modified', 'Última modificação') ?></th>
									<th><?= $this->Paginator->sort('created', 'Registrado em') ?></th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($contacts as $contact): ?>
								<tr>
									<!--<td><?/*= $this->Form->checkbox('inputs[]', ['class' => 'i-checks', 'value' => $product->id]) */?></td>-->
									<td><?= $this->Number->format($contact->id) ?></td>
									<td>
										<?= h($contact->name) ?><br/>
										<small><?= h($contact->email) ?></small>
									</td>
									<td><?= h($contact->phone_readable) ?></td>
									<td>
										<?= h($contact->birthdate) ?>
									</td>
									<td><?= h($contact->modified) ?></td>
									<td><?= h($contact->created) ?></td>
									<td class="actions">

										<?= $this->Html->link('<i class="fa fa-pencil text-blue"></i>',
											['action' => 'edit', $contact->id],
											['escape' => false, 'data-toggle' => 'tooltip', 'data-placement' => 'top',  'title' => 'Alterar Contato'])
										?>
                                        <a href="" class="confirmDanger"
                                           data-title="Exclusão de Contato"
                                           data-text="Tem certeza que deseja excluir este contato?"
                                           data-target="#delete<?= $contact->id ?>"
                                           data-toggle="tooltip"
                                           data-placement="top"
                                           title="Excluir Contato">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>

										<?php echo $this->Form->postLink('',
											['action' => 'delete', $contact->id],
											[
                                                'id' => 'delete' . $contact->id,
                                                'data-title' => '',
                                                'escape' => false,
                                                'data-toggle' => 'tooltip',
                                                'data-placement' => 'top',
                                                'title' => 'Excluir Contato'
                                            ]
										) ?>

									</td>
								</tr>
							<?php endforeach; ?>
                                <tfoot>
                                    <tr>
                                        <td colspan="100%">
                                            <ul class="pagination pull-right"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
							</tbody>
						</table>

						<div class="paginator text-center collapse">
							<ul class="pagination">
								<?= $this->Paginator->prev('< ' . __('anterior')) ?>
								<?= $this->Paginator->numbers() ?>
								<?= $this->Paginator->next(__('próximo') . ' >') ?>
							</ul>
							<p><?= $this->Paginator->counter() ?></p>
						</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>

</div>