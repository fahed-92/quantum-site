<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'yascente_sp19';
$sitepad['db_user'] = 'yascente_sp19';
$sitepad['db_pass'] = '2[Sow6pq3)';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'spge_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'yascenterllc.com/sp';// URL without protocol but with directory as well
$sitepad['url'] = 'https://yascenterllc.com/sp';
$sitepad['relativeurl'] = '/sp';
$sitepad['.sitepad'] = '/home/yascenter';
$sitepad['sitepad_plugin_path'] = '/var/softaculous/sitepad';
$sitepad['editor_path'] = '/var/softaculous/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'wxe9pyhpew5ja6qwecr36kcgoiatpb7jjw6473ifgjclwceeu3hcllbhoeqtgrjf';
$sitepad['SECURE_AUTH_KEY'] = 'wjtrajucmdsrcwycye3xlhoai9agalyhhsqotlu6yime0mwlgq6yrravuoohmexe';
$sitepad['LOGGED_IN_KEY'] = 'iwaognij7hjjigpousowt04l2m1kcjguecolmbiwzidhvj6ebrrlwmao5mjppnpm';
$sitepad['NONCE_KEY'] = '7t4grv9lo85hkgawasorm38ookibqgw2rp78huiutmkmgh5n6kwbw6rtse0xymev';
$sitepad['AUTH_SALT'] = 'tffqgonxfx21bno7ttpizibsizi6ydqklr5md5l2oasfpnjaxke6e6vs5c64oipn';
$sitepad['SECURE_AUTH_SALT'] = 'k6fjdh5h5n4us4gkppkdgujmescrvmrs82sdljc5iecrqed9ivttjqghaq7muqxv';
$sitepad['LOGGED_IN_SALT'] = 'ytng28blqlaivw9j50khjrmd6fx89nevbvsmqnkgsubqz2nw01pokolpsbqsfwwm';
$sitepad['NONCE_SALT'] = '4dzdph0qvfo0akfetu9pewhse8ogfbca5gph5yfnw4itxh6f2nbuaeumpyfpysus';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

