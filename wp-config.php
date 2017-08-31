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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'teste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'p(<TCE!J%-Hpy] *5J29zz+Nlz0c,89Dp1ZxJbLugy.jw@4u^Vt2;/OefLL*e#$9');
define('SECURE_AUTH_KEY',  '5?qD|Rp?:+t^J#e<uK+uS{MSi)#sGH)+3>PIuJEE-Vhg3}f87-:J`PK~vF+>K^)(');
define('LOGGED_IN_KEY',    'w C%S+xL*fn/rmV;5Guh>05q~wxK3x?6vIe.Ck^wn MPn= B(WWO%S<,AW#_cX+S');
define('NONCE_KEY',        'JK0BIg>b/)U)S75xf[?_5d|Y;8`Ec[z-~13`)1@S/UkUt;23ITQR}Je)VDJRUb&K');
define('AUTH_SALT',        'r=Nl>Ok6Vr]dZUnPE_-C>[hwh,lzoy~~{xI~z?e1O-_cB/b9<8bZ+7Ph Qd)s>VC');
define('SECURE_AUTH_SALT', '~+PE!B;{1VmhNHJxF[ck1s{{J bK(14z6pRU(z6XRv~ B^wdV%9AqC@0v04pP+G$');
define('LOGGED_IN_SALT',   'U{8@&E$~N#Wx5[I@|I>Bp*oDBEA/4CU@Z&#/g/oazH:O0b[ZJo}mN/* +DAn|0P2');
define('NONCE_SALT',       'Rz(O:?,k@4uQ*.`)^6@q)5gVQu ?Mw.$?f#9%RduZS3728}~-]L=+l5I;3CqR>cW');


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
