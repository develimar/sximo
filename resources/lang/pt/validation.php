<?php

return array(

	"accepted"         => "O :attribute deve ser aceito.",
	"active_url"       => "O :attribute não é um URL válido.",
	"after"            => "O :attribute deve ser uma data posterior a :date.",
	"alpha"            => "O :attribute pode conter apenas letras.",
	"alpha_dash"       => "O :attribute pode conter apenas letras, números e traços.",
	"alpha_num"        => "O :attribute pode conter apenas letras e números.",
	"array"            => "O :attribute deve ser um array.",
	"before"           => "O :attribute deve ser uma data anterior a :date.",
	"between"          => array(
		"numeric" => "O :attribute deve estar entre :min e :max.",
		"file"    => "O :attribute deve estar entre :min e :max kilobytes.",
		"string"  => "O :attribute deve estar entre os caracteres :min e :max.",
		"array"   => "O :attribute deve ter entre :min e :max itens.",
	),
	"confirmed"        => "A confirmação de :attribute não corresponde.",
	"date"             => "O :attribute não é uma data válida.",
	"date_format"      => "O :attribute não corresponde ao formato :format.",
	"different"        => "O :attribute e :other devem ser diferentes.",
	"digits"           => "O :attribute deve ser :digits dígitos.",
	"digits_between"   => "O :attribute deve estar entre :min e :max dígitos.",
	"email"            => "O formato :attribute é inválido.",
	"exists"           => "O :attribute selecionado é inválido.",
	"image"            => "O :attribute deve ser uma imagem.",
	"in"               => "O :attribute selecionado é inválido.",
	"integer"          => "O :attribute deve ser um número inteiro.",
	"ip"               => "O :attribute deve ser um endereço IP válido.",
	"max"              => array(
		"numeric" => "O :attribute não pode ser maior que :max.",
		"file"    => "O :attribute não pode ser maior que :max kilobytes.",
		"string"  => "O :attribute não pode ser maior que :max caracteres.",
		"array"   => "O :attribute não pode ter mais que :max itens.",
	),
	"mimes"            => "O :attribute deve ser um arquivo do tipo: :values.",
	"min"              => array(
		"numeric" => "O :attribute deve ser pelo menos :min.",
		"file"    => "O :attribute deve ter pelo menos :min kilobytes.",
		"string"  => "O :attribute deve ter pelo menos :min caracteres.",
		"array"   => "O :attribute deve ter pelo menos :min itens.",
	),
	"not_in"           => "O :attribute selecionado é inválido.",
	"numeric"          => "O :attribute deve ser um número.",
	"regex"            => "O formato :attribute é inválido.",
	"required"         => "O campo :attribute é obrigatório.",
	"required_if"      => "O campo :attribute é obrigatório quando :other é :value.",
	"required_with"    => "O campo :attribute é obrigatório quando :values ​​está presente.",
	"required_without" => "O campo :attribute é obrigatório quando :values ​​não está presente.",
	"same"             => "O :attribute e :other devem corresponder.",
	"size"             => array(
		"numeric" => "O :attribute deve ser :size.",
		"file"    => "O :attribute deve ser :size kilobytes.",
		"string"  => "O :attribute deve ser :size caracteres.",
		"array"   => "O :attribute deve conter :size itens.",
	),
	"unique"           => "O :attribute já foi usado.",
	"url"              => "O formato :attribute é inválido.",
	"recaptcha" => 'O campo :attribute não está correto.',
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
