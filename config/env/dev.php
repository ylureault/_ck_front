<?php

define('WP_HOME', 'http://cooknow.dev');
define('WP_SITEURL', WP_HOME . '/site/');

define('WP_CONTENT_DIR', APP_ROOT . '/public/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'cooknow.fr');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O7xTk_zf-ZAaVA.fk=j`PUkVMj9-D17V$bhs2b+RG-~@+#s6Rw;>PhgN7_}/P>o7');
define('SECURE_AUTH_KEY',  '8]-*%fMozsSz2nT^B$W?ICS-wj<z2GJ6@_rnQxw%tONnzQsI3Z-C^![GyE_{tHq{');
define('LOGGED_IN_KEY',    'rM<?V9$4C+(919%p&J+|/!YbGeU{E)e<L>cU9k8F;](V7(%-/1FbZI_;^:X>Sr+u');
define('NONCE_KEY',        '`YumKF^9tOCka=BNz8Ps;rzkX[l;D<@3OIV&9o|IvIo)!B,z(B&]cznh!u73y-z?');
define('AUTH_SALT',        '00z8|??kqy5.NWmJqryB|_FO;B[,w+W+Z<.CbzF}M+?;^{9&G`o0~4&a_7E+3v{Z');
define('SECURE_AUTH_SALT', 'APV3K`5x_[]42SPALGowe3z|HPd)7|-u7||Vl.$Q9mE2}BM>9nxh 0ma|@X6XsXt');
define('LOGGED_IN_SALT',   '&TcAZj$~o{rHBAW?+AAU!9+P~;F)+.@96zAa#rB7R@2S+}ZD&!8<^?.+B?76q4*^');
define('NONCE_SALT',       '+h(F.Ak-#oH<S~s+dt:0+Y@n5tCZd}pT^CWdcu`P*+RA#6k`7~?fzJY<uH0d]fRw');
/**#@-*/