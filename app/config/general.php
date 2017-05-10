<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Config
 * @author Florian Dahlitz
 *
 * includes basic settings
 */
$config['title'] = "Venture Dahlitz | Fotoblog";
$config['charset'] = "UTF-8";

$config['name'] = "Christoph Dahlitz";
$config['main_authors'] = ['Christoph Dahlitz', 'Florian Dahlitz'];
$config['current_year'] = date("Y");

$config['emails'] = [
    'Christoph Dahlitz' => 'dahlitz.christoph@venturedahlitz.com',
    'Webmaster' => 'webmaster@venturedahlitz.com'
];

/**
 * admin panel config stuff
 */
$config['admin_title'] = 'Venture Dahlitz | Fotoblog | Admin-Panel';
