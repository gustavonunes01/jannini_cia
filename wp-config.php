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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jancas' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '^vLSEwQ/93,t=.p(=>f=.$(<1B2#rug|`U9o<j~.ga.}:0w(_frei0,3W~Q<)ij:' );
define( 'SECURE_AUTH_KEY',  '->+|b**$vwf(NNb*eY&cX5kvh@eBVx(k@B}$Q9[(:[{}|bPa{P)!p+d(5;g#=q(!' );
define( 'LOGGED_IN_KEY',    '#6.sK^BT vY/ndSqY.?)kmOPQAKK[HTH+sAvr]1l,?!NBrQD8S*pO {qt:^9a3Ad' );
define( 'NONCE_KEY',        'JK-30(h}]3e_[oHF/L1t84>JsQ:7wS]9G*Sq9eR#~u0j,,p,m|VxKTt?fEsrnEcc' );
define( 'AUTH_SALT',        'v )iT,dZ7Nfr*9sJ{NSW)o2]s|cfAII^03yhm;%|oA&IsS&e,&!o[zJqcOslqyOo' );
define( 'SECURE_AUTH_SALT', 'qtS,?bkAS`mEoQ;)YF&26W<o^?N6xo-r3lF?ndA|@s#W]zKS9A~J4bWg8$eNezw&' );
define( 'LOGGED_IN_SALT',   '!~X6A.#dL]Rp.OFI&<pvzD`?K`0AsU|EvD_35A.WwT__#e%8JXrbo%WIvilpa!ni' );
define( 'NONCE_SALT',       '/ -M`)N 11f}4jL74[ndX)iRlmKj.wQ?Fw!=l=rfcZY@+=/i7(<V8vA,tMdH#wq4' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
