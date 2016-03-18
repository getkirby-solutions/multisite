<?php

$kirby   = kirby();
$domain  = server::get('server_name');

/**
 *
 * folder structure must exist before executing
 * content/{{page}} must have content to display home
 *
 */

// accounts
$kirby->roots->accounts = __DIR__             . DS . $domain . DS . 'accounts';
$kirby->urls->accounts  = $kirby->urls->index . DS . $domain . DS . 'accounts';

// avatars
$kirby->roots->avatars  = __DIR__             . DS . $domain . DS . 'assets' . DS . 'avatars';
$kirby->urls->avatars   = $kirby->urls->index . DS . $domain . DS . 'assets' . DS . 'avatars';

// content
$kirby->roots->content  = __DIR__             . DS . $domain . DS . 'content';
$kirby->urls->content   = $kirby->urls->index . DS . $domain . DS . 'content';

// thumbs
$kirby->roots->thumbs   = __DIR__             . DS . $domain . DS . 'thumbs';
$kirby->urls->thumbs    = $kirby->urls->index . DS . $domain . DS . 'thumbs';
