<?php

return [
    'custom_fields'		        => 'Campos Personalizados',
    'manage'                    => 'Administrar',
    'field'		                => 'Campo',
    'about_fieldsets_title'		=> 'Sobre conjuntos de campos',
    'about_fieldsets_text'		=> 'Conjuntos de campos permitem criar grupos de campos personalizados que são frequentemente reutilizados para modelos de ativos específicos.',
    'custom_format'             => 'Formato Regex personalizado...',
    'encrypt_field'      	        => 'Criptografar o valor deste campo na base de dados',
    'encrypt_field_help'      => 'AVISO: Criptografar um campo torna-o não pesquisável.',
    'encrypted'      	        => 'Criptografado',
    'fieldset'      	        => 'Conjunto de campos',
    'qty_fields'      	      => 'Qtd de campos',
    'fieldsets'      	        => 'Conjuntos de campos',
    'fieldset_name'           => 'Nome do conjunto de campos',
    'field_name'              => 'Nome do campo',
    'field_values'            => 'Valores do campo',
    'field_values_help'       => 'Adicione opções selecionáveis, uma por linha. Linhas em branco que não sejam a primeira linha, serão ignoradas.',
    'field_element'           => 'Elemento do formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Formato personalizado',
    'field_custom_format_help'     => 'Este campo permite que você use uma expressão regex para validação. Deve começar com "regex:" - por exemplo, para validar que um valor de campo personalizado contém um IMEI válido (15 dígitos numéricos), você usaria <code>regex: / ^ [0-9]{15} $ / </code>.',
    'required'   		          => 'Requerido',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Usado por modelos',
    'order'   		            => 'Ordem',
    'create_fieldset'         => 'Novo conjunto de campos',
    'update_fieldset'         => 'Atualizar Conjunto de Campos',
    'fieldset_does_not_exist'   => 'O Conjunto de Campos :id não existe',
    'fieldset_updated'         => 'Conjunto de Campos atualizado',
    'create_fieldset_title' => 'Criar um novo conjunto de campos',
    'create_field'            => 'Novo conjunto de campos personalizado',
    'create_field_title' => 'Criar um novo campo personalizado',
    'value_encrypted'      	        => 'O valor deste campo é encriptado no banco de dados. Somente usuários administradores podem ver o valor descriptografado',
    'show_in_email'     => 'Incluir o valor desse campo nos e-mails enviados para o usuário? Campos criptografados não podem ser incluídos em e-mails',
    'show_in_email_short'     => 'Incluir nos e-mails.',
    'help_text' => 'Texto de ajuda',
    'help_text_description' => 'Este é um texto opcional que irá aparecer abaixo dos elementos de formulário ao editar um ativo para fornecer o contexto no campo.',
    'about_custom_fields_title' => 'Sobre os campos personalizados',
    'about_custom_fields_text' => 'Campos personalizados permitem que você adicione atributos arbitrários a ativos.',
    'add_field_to_fieldset' => 'Adicionar campo ao Fieldset',
    'make_optional' => 'Obrigatório - clique para tornar opcional',
    'make_required' => 'Opcional - clique para tornar obrigatório',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo DB',
    'db_convert_warning' => 'AVISO. Este campo está na tabela de campos personalizados como <code>:db_column</code> mas deve ser <code>:expected</code>.',
    'is_unique' => 'Este valor deve ser único em todos os arquivos',
    'unique' => 'Único',
    'display_in_user_view' => 'Permitir que o usuário selecionado veja estes valores em sua página de Ativos Atribuídos',
    'display_in_user_view_table' => 'Visível para o Usuário',
    'auto_add_to_fieldsets' => 'Adicionar automaticamente para cada novo conjunto de campos',
    'add_to_preexisting_fieldsets' => 'Adicionar para qualquer conjunto de campos existente',
    'show_in_listview' => 'Mostrar na lista visualizações por padrão. Usuários autorizados ainda serão capazes de mostrar/ocultar através do seletor de coluna',
    'show_in_listview_short' => 'Mostrar nas listas',
    'show_in_requestable_list_short' => 'Mostrar na lista de ativos solicitáveis',
    'show_in_requestable_list' => 'Mostrar valor na lista de ativos solicitáveis. Campos criptografados não serão exibidos',
    'encrypted_options' => 'Este campo está criptografado, então algumas opções de exibição não estarão disponíveis.',

];