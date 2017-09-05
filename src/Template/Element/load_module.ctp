<?php
if (isset($javascriptModule)) {

	// Criação de variáveis javascript em tempo de execução
	$this->Html->scriptStart(['block' => true]);

	if ( isset($vars)) {
		foreach ($vars as $varName => $varValue) {
			$varValue = is_array($varValue) ? json_encode($varValue) : $varValue;
			echo sprintf('var %s = %s;', $varName, $varValue);
		}
	}

	$this->Html->scriptEnd();

	// Carregamento do módulo
	if (is_array($javascriptModule))
		foreach($javascriptModule as $javascriptModule)
			echo $this->Html->script('/js/app/modules/' . $javascriptModule );
	else
		echo $this->Html->script('/js/app/modules/' . $javascriptModule );
}