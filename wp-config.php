<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'blank');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%|qP=AB?_XNuOg{!O_zQqq^@qFD]x|+w2F~j5H~K7E$QqMm3i=r.3U-,Dh~)<u_ ');
define('SECURE_AUTH_KEY',  'VxI-YP/6}3`XT[: _[VM0i.0Zo5YVwun_51a)Ia5(ir/2cnm+p7|p}X^hivh9Sh0');
define('LOGGED_IN_KEY',    '^L?`/|+_1.T+ta!1}qN]dgy|CB4CiYianF>=/F:Ao}gr//sTbQ$I{s}* ykdNN#r');
define('NONCE_KEY',        'x-}.gRf;:fT5z{RItff6Ej96Xhw}!GVjBQ0`dWz$q2D1A@CVwwa]WaN/y85mr&k(');
define('AUTH_SALT',        'f$=C3v*mRXP_fd7T}V%P`@KCQ5mJ.W2FS6K6L56)K,vx2<,HTDou}1CP %;Ju#M,');
define('SECURE_AUTH_SALT', 'S!.4W9eBt0~.5:siE!PRq@,,eu+|c2:RT=,oMUFQ+O8qs?u={>0nBWM52!o#^i>n');
define('LOGGED_IN_SALT',   'cbQ,oqu~34p6F4O!E`Os.Wf&07%$V0)g.;4}|xt8jbK9:hTMLc`pKVXe{`V%TGEI');
define('NONCE_SALT',       'jaT}4Vz#?j12I,x~&;7L}pxBR:j*G:W(Bg#FgIP==89A*c~{3rx+xKb,4q0B5l=/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
