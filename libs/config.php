<?php


// URL DNS
define('IP','http://tv5full.xyz:25461'); 

//pink, aqua, orange or blue themes
$template = 'blue'; 

// WhatsApp Number
define("WHATSAPP", '+56976130526'); //Numero WhatsApp

// Website 
define("NOME_IPTV", 'Mastertvchile'); 

// MercadoPago Integration
// Create payment links in your account and put them here

define("LINK_PAGAR1", ''); // Link 1
define("LINK_PAGAR2", ''); // Link 2
define("LINK_PAGAR3", ''); // Link 3
define("LINK_PAGAR4", ''); // Link 4

$nome1 = "Mensual";
$valor1 = ""; // Valor Mensal
$nome2 = "Trimestral";
$valor2 = ""; // Valor Mensal
$nome3 = "Semestral";
$valor3 = ""; // Valor Mensal
$nome4 = "Anual";
$valor4 = ""; // Valor Mensal

// Settings Xtream-Codes CMS 

define("ATIVAR_TESTE", '0');  // 1 = YES / 0 = NO
define("HORAS", '3');  // Trial Duration in hours
define("XTREAM_URL", 'http://tv5full.xyz:25461/'); //URL CMS do Xtream-Codes
define("XTREAM_USER", ''); //Usuário do Xtream-Codes
define("XTREAM_PWD", ''); //Senha do Xtream-Codes
define("XTREAM_PLANO", '1'); //Número do Plano do Xtream-Codes em caso de dúvidas contate o suporte.
define("ATIVA_BLOQUEIO_TESTE", '0'); // Se Ativado (1) = Bloqueia novos cadastros apartir do computador do usuário por 30 dias, evitar testes a todo momento

// CONFIGURAÇÕES DO EMAIL SMTP ENVIO DE TESTES:
define("SMTP_HOST", 'mail.revenda.com');
define("SMTP_USER", '');
define("SMTP_SENHA", '');
define("SMTP_PORTA", '587');
define("SMTP_SEGURANCA", 'tls');
define("EMAIL_ASSUNTO", 'Bienvenido a IPTV - Mastertvchile');
define("EMAIL_REVENDA", 'contato@revenda.com');
define("NOME_REVENDA", 'Mastertvchile');

// Adults categories
define("AVISO_ADULTOS_CANAL", 'XXX: ADULTOS'); // Should be the same as XC
define("AVISO_ADULTOS_FILME", 'FILMES: ADULTOS'); // Should be the same as XC
// Você pode ver esta nome quando o sistema gerar as categorias


// ATENÇÃO AO EDITAR O CORPO DO EMAIL
// Dont change the variables
//
// %VENCIMENTO%, %NOME%, %USUARIO%, %SENHA%
//
// Ask a developer for help if needed.


define("CORPO_EMAIL", "Hola %NOME%, su prueba ha sido creada exitosamente. <br> <br>
    Puede iniciar sesión en nuestro jugador web utilizando los siguientes datos:<br>
    <br>
    Usuario: <b>%USUARIO%</b> <br>
    Contraseña: <b>%SENHA%</b> <br><br><br>
    También puede probar nuestra lista descargándola a continuación:<br><br>
    %URL_LISTA%<br><br><br>
    Disfruta tu prueba es válida hasta: %VENCIMENTO%<br><br><br>
    
    Gracias<br>
    Mastertvchile.
    
    ");
