<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav metismenu" id="side-menu">
			<li class="nav-header">
				<div class="dropdown profile-element"> <span>
                        <?= $this->Html->image('/img/user_profile_small.png', ['class' => 'img-circle']) ?>
                             </span>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= $authUser['name'] ?></PP></strong>
                             </span> <span class="text-muted text-xs block"><b class="caret"></b></span> </span> </a>
					<ul class="dropdown-menu animated fadeIn m-t-xs">
                        <li>
							<?= $this->Html->link('Editar perfil', ['controller' => 'Users', 'action' => 'profile']) ?>
                        </li>
						<li class="divider"></li>
						<li>
							<?= $this->Html->link('Sair', ['controller' => 'Users', 'action' => 'logout']) ?>
						</li>
					</ul>
				</div>
				<div class="logo-element">
					Ponteon
				</div>
			</li>
			<li
				class="<?= $this->request->param('controller') == 'Pages' && $this->request->param('action') == 'dashboard' ? 'active' : '' ?>">
				<a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'dashboard']) ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>

			</li>
			<li
				class="<?= $this->request->param('controller') == 'Contacts' ? 'active' : '' ?>">
				<a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'index']) ?>"><i class="fa fa-user"></i> <span class="nav-label">Contatos</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li
						class="<?=
						$this->request->param('controller') == 'Contacts' &&
						$this->request->param('action') == 'index' ? 'active' : ''
						?>">
						<?= $this->Html->link('Listar', ['controller' => 'Contacts', 'action' => 'index']) ?>
					</li>
					<li
						class="<?=
						$this->request->param('controller') == 'Contacts' &&
						$this->request->param('action') == 'add' ? 'active' : ''
						?>">
						<?= $this->Html->link('Cadastrar contato', ['controller' => 'Contacts', 'action' => 'add']) ?>
					</li>
				</ul>
			</li>
		</ul>

	</div>
</nav>
