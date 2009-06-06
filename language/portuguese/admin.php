<?php
// $Id: admin.php,v 1.2 2009/06/06 03:28:04 nobu Exp $
// Traduzido para o Portugues do Brasil por: Miraldo Antoninho Ohse (m_ohse@hotmail.com).



define('_AM_FORM_EDIT', 'Editar o formul�rio de contato');
define('_AM_FORM_NEW', 'Criar novo formul�rio de contato');
define('_AM_FORM_TITLE', 'Nome do formul�rio');
define('_AM_FORM_MTIME', 'Atualiza��o');
define('_AM_FORM_DESCRIPTION', 'Descri��o');
define('_AM_INS_TEMPLATE', 'Adi��o de modelo');
define('_AM_FORM_ACCEPT_GROUPS', 'Grupos permitidos');
define('_AM_FORM_ACCEPT_GROUPS_DESC', 'Este formul�rio de contato possibilita a configura��o dos grupos');
define('_AM_FORM_DEFS', 'Defini��es do formul�rio');
define('_AM_FORM_DEFS_DESC', '<a href="help.php#form" target="_blank">Defini��es</a> <small>Tipos: text checkbox radio textarea selecione a constante escondendo o arquivo de mail</small>');
define('_AM_FORM_PRIM_CONTACT', 'Contato pessoal');
define('_AM_FORM_PRIM_NONE', 'Nenhum');
define('_AM_FORM_PRIM_DESC', 'Selecione o membro do grupo. O contato pessoal necessita ser selecionado pelo argumento uid do grupo');
define('_AM_FORM_CONTACT_GROUP', 'Grupo de contato');
define('_AM_FORM_CGROUP_NONE', 'Nenhum');
define('_AM_FORM_STORE', 'Armazenar no banco de dados');
define('_AM_FORM_CUSTOM', 'Digite a descri��o');
define('_AM_FORM_WEIGHT', 'Peso');
define('_AM_FORM_REDIRECT', 'P�gina que ser� mostrada ap�s o envio');
define('_AM_FORM_OPTIONS', 'Op��o vari�veis');
define("_MI_FORM_OPTIONS_DESC","Configura��o das defini��es do formul�rio e o valor de outros <a href='help.php#attr'>op��o padr�o valores</a>. Exemplo: <tt>size=60,rows=5,cols=50</tt>");
define('_AM_FORM_ACTIVE', 'Formu�rio ativo');
define('_AM_DELETE_FORM', 'Deletar formul�rio');
define('_AM_FORM_LAB', 'Nome do item');
define('_AM_FORM_LABREQ', 'Por favor, informe o nome do item');
define('_AM_FORM_REQ','Requerido');
define('_AM_FORM_ADD', 'Adicionar');
define('_AM_FORM_OPTREQ', 'Necess�rio a op��o do argumento');
define('_AM_CUSTOM_DESCRIPTION', '0=Normal[bb],4=Descri��o do Html[bb],1=Parte do modelo,2=Todo o modelo');
define('_AM_CHECK_NOEXIST', 'As vari�ves n�o existem');
define('_AM_CHECK_DUPLICATE', 'Vari�veis duplicadas');
define('_AM_DETAIL', 'Detalhe');
define('_AM_OPERATION', 'Opera��es');
define('_AM_CHANGE','Mudan�a');
define('_AM_SEARCH_USER', 'Buscar usu�rio');

define('_AM_MSG_ADMIN', 'Administrar contato');
define('_AM_MSG_CHANGESTATUS', 'Mudar status');
define('_AM_SUBMIT', 'Atualiza��o');

define('_AM_MSG_COUNT', 'Contagem');
define('_AM_MSG_STATUS', 'Status');
define('_AM_MSG_CHARGE', 'Mudar');
define('_AM_MSG_FROM', 'De');
define('_AM_MSG_COMMS', 'Coment�rios');

define('_AM_MSG_WAIT', 'Aguardar');
define('_AM_MSG_WORK', 'Trabalhar');
define('_AM_MSG_REPLY', 'Responder');
define('_AM_MSG_CLOSE', 'Fechar');
define('_AM_MSG_DEL', 'Deletar');

define('_AM_MSG_CTIME', 'Registrada');
define('_AM_MSG_MTIME', 'Atualizada');

define('_AM_MSG_UPDATED', 'Status mudado');
define('_AM_MSG_UPDATE_FAIL', 'Atualiza��o falhou');

define('_AM_LOGGING','Hist�rico');

define('_AM_FORM_UPDATED', 'O formul�rio foi armazenado no banco de dados');
define('_AM_FORM_DELETED', 'O formul�rio foi deletado');
define('_AM_FORM_UPDATE_FAIL', 'A atualiza��o do formul�rio falhou');
define('_AM_TIME_UNIT', '%dmin,%dhour,%ddays,past %s');
define('_AM_NODATA', 'N�o existe dados');
define('_AM_SUBMIT_VIEW','Atualizar');

include_once dirname(__FILE__)."/common.php";
?>
