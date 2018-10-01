<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ce_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'clA4!pQ0]b*CJu71%L0~>lg&Xj-crPdOP5YXV<=X-<qrUT CDo<]b:lP;|)Xn+uV');
define('SECURE_AUTH_KEY',  'mA72TwdFpBBQh:W=|m@&uGpM.c1t~ J~(Cm Rk)w=>YiN=xnAkqVz68!CAzB{MwU');
define('LOGGED_IN_KEY',    'K^WV`}gL8^Kuos;$D;);Y+,{60c.pe/`!)K7=,XgsBx)uW6XpK</ Krrqbfc$De&');
define('NONCE_KEY',        '0B])dH:{$>j;/|0)~Y?|ZB5GbS*.2&gb2{ux>kqy?Uj)Fd]`ZaZaa V1N Xh*P~y');
define('AUTH_SALT',        '*w5vAg!:$M{w)i9@h}))jy1^<t_plNLKtfqz[N54E,>[{Wu|~iL^6k3u1]=yP*aW');
define('SECURE_AUTH_SALT', 'r dJ@i2S7I!DqtWD:#Zq&-/eyfkw&8(`g`hNG/(=oh0eb _t^(u$_6Yy;V&VE -x');
define('LOGGED_IN_SALT',   'jJvrs;*VvH`l(qt-UM|oDRWF:ziaAEGZOv=}1xO%MZ6pxMP@1XCZoJI=PTTKl4Wi');
define('NONCE_SALT',       'ltLTeLC.$Q:G{h&2XyL8CR*W&9u;_EM=/f70dc>`c1R;PG[HJh;U(G^$e%I4| YU');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
