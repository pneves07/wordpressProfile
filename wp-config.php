<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'Test_wordpress' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'pedro' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '2510_Neve$_2001' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'PAV-T@c<aV|=]E#.*wfhxR0jNT;d)]8kU8~_71M_(!?VZj<OMFY_l&3qF(!Fl@tQ' );
define( 'SECURE_AUTH_KEY', '1|`[x-GWBF^i_}T#1x4*7Um!nLP8RqUT 03(zX3itO+>dJ51YMCalTD+2`~oh8X$' );
define( 'LOGGED_IN_KEY', 'K_uaKpVcJuMydJb3%@f/gxbo!Jc>p$geFdj*zowpJNW^eXrLBh=Eqc9Zu<t?}x5)' );
define( 'NONCE_KEY', 'AkIZj9>E=[Jk-}eU9wp([~DGGC98Sf_,k}9jIfWN>&PedTxvT*<P%4=+|u0aOl}O' );
define( 'AUTH_SALT', 'Cb-LdP#@ AgIow*V|oS`TA=7/:o4;Q2@%w +cy :RhPR7l,E=tG;H^Mu6tK+V}-G' );
define( 'SECURE_AUTH_SALT', '-ej^|aOKl%IrGyh:r6(y|7L+4K)u?#=Ky.6vU0{Maxe3c+i)dGRO}/i/H/R/wXx6' );
define( 'LOGGED_IN_SALT', 'sn!GNjh~{Vyy(gjVpIR%5K%wJ`j2K![2@+?<: d!uD:TDv6xrTW$s)0de.*g3..;' );
define( 'NONCE_SALT', '@C0+E}92N+O] &]d(Y<1-<FFhk=s]vX2K@eou$wRvu# #7^Q{5;xGD8wv7(L+jmU' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'testWp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
