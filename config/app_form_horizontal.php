<?php
return [
	'input' => '<input type="{{type}}" name="{{name}}"{{attrs}}/>',
	'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
	'inputContainerError' => '<div class="form-group {{type}}{{required}} error">{{content}}{{error}}</div>',
	'label' => '<label{{attrs}} class="control-label">{{text}}</label>',
	'textarea' => '<textarea class="form-control" name="{{name}}"{{attrs}}>{{value}}</textarea>',
	'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
	'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}> ',
	'radioWrapper' => '<div class="i-checks"> {{label}}</div>',
	'formGroup' => '<div class="col-sm-2">{{label}}</div><div class="col-sm-10 {{containerclass}}">{{input}}</div>',
	'error' => '<div class="col-sm-10 col-sm-offset-2"><div class="label label-danger">{{content}}</div></div>',
];