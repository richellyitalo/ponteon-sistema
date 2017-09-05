<div class="row">
    <div class="col-lg-3">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'add']) ?>" class="btn btn-primary btn-block btn-lg">
                    <i class="fa fa-plus"></i>
                    Adicionar um novo contato
                </a>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-lg-12">
                <a href="<?= $this->Url->build(['controller' => 'Contacts']) ?>" class="btn btn-primary btn-block btn-lg">
                    <i class="fa fa-list"></i> Listar contatos
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Todos os contatos</span>
                <h5>Contatos</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= $contacts->count() ?></h1>
                <div class="stat-percent font-bold text-info"><i class="fa fa-level-up" style="display: none;"></i></div>
                <small>Contatos cadastrados</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Do Dia</span>
                <h5>Aniversariantes</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= $aniversariantesDia->count() ?></h1>
                <div class="stat-percent font-bold text-navy"><i class="fa fa-level-up" style="display: none;"></i></div>
                <small>Aniversariantes do Dia</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Do Mês</span>
                <h5>Aniversariantes</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins"><?= $aniversariantesMes->count() ?></h1>
                <div class="stat-percent font-bold text-danger"><i class="fa fa-level-down" style="display: none;"></i></div>
                <small>Aniversariantes do mês</small>
            </div>
        </div>
    </div>
</div>


<?php

$session = $this->request->session();

if ($authUser['message']):

	$authUser = $session->read('Auth.User');
	$authUser['message'] = 0;
	$session->write('Auth.User', $authUser);

    ?>
    <div class="modal inmodal fade autoOpen" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Olá, seja bem vindo!</h4>
                    <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>
                <div class="modal-body">
                    <p>
                        Material confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses. Oh resolution he dissimilar precaution to comparison an. Matters engaged between he of pursuit manners we moments. Merit gay end sight front. Manor equal it on again ye folly by match. In so melancholy as an sentiments simplicity connection. Far supply depart branch agreed old get our.
                    </p>
                    <p>
                        Ye to misery wisdom plenty polite to as. Prepared interest proposal it he exercise. My wishing an in attempt ferrars. Visited eat you why service looking engaged. At place no walls hopes rooms fully in. Roof hope shy tore leaf joy paid boy. Noisier out brought entered detract because sitting sir. Fat put occasion rendered off humanity has.
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                    <button id="notShowMore" type="button" class="btn btn-primary" data-dismiss="modal">Não ver esta mensagem novamente</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>