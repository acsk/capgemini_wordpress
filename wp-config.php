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
define( 'DB_NAME', 'wpcapgemini' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>f{snX^}fwIuF++CU|{3D`dv){sg {)|!qk6gB!)lwIO&BL@T]R0mZm;^t3VJyW(' );
define( 'SECURE_AUTH_KEY',  't:z{g.b`)M&2TyKDC7^EjFLrr@%M/04raHb`ad<j,#iS/c9E(2<4VJ#aSW+6yVMT' );
define( 'LOGGED_IN_KEY',    '0=:S&bt|_o{ P0F(^7r{.j~8#<|4=l7,cH(6xJh76+i,~b}6`z]-3+Mf-*m8Wexm' );
define( 'NONCE_KEY',        'Wh!~q*WRP~?kNsTejO+e8A FFta8eOVJZUpJ84I,e$(kA!WuuEs} *jP1-mNol>8' );
define( 'AUTH_SALT',        'D .aa$[8#u&$jt_sm~I50$%k<)z;Lpk.$H-#X#wz:2,68bm0|xf=w&/*V!MSJ4pw' );
define( 'SECURE_AUTH_SALT', 'a$Z,$s!fHzWWd*~16gK`alkkSjlm{J1=NTf{xS8w[{,:1`=}(zw,8=r^F{`I4V]_' );
define( 'LOGGED_IN_SALT',   ',}CLoI_kRI%[WRO]61Ri8@K$ma{`W@M3hm;~LbO&UtFR#eo:t;=~f9g^rocGH~R|' );
define( 'NONCE_SALT',       '-il?&Mqdq5V>E&^PYQ{UH0FFq~i/f6xNRi.*.K*(,$?^}YWt]TR`h%wV7-5`Jtp!' );

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
