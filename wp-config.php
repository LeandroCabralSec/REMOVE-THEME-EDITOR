Se você estiver gerenciando um site com vários administradores, poderá bloquear o editor do Tema do painel de administração do WordPress para evitar erros 
e problemas de configuração.


If you’re managing a site with multiple administrators, you can lock the WordPress admin panel Theme editor to avoid errors and configuration issues.

/** # DESABILITAR O EDITOR DO TEMA NO WP-CONFIG.PHP # */
/** # DISABLE THE THEME EDITOR IN WP-CONFIG.PHP # */
define('DISALLOW_FILE_EDIT', true);
