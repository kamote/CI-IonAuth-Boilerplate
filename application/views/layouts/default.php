<!DOCTYPE html><html lang="en">  <head>    <meta charset="utf-8">    <title><?php echo $this->title; ?></title>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="description" content="">    <meta name="author" content="">    <link rel="stylesheet" href="<?php echo site_url('/assets/css/bootstrap.css'); ?>" type="text/css" media="screen">    <link rel="stylesheet" href="<?php echo site_url('/assets/css/main.css'); ?>" type="text/css" media="screen">      </head>  <body>    <?php $this->load->view('layouts/header'); ?>    <div class="container">        <?php echo $content; ?>    </div>    <div class="container">      <?php $this->load->view('layouts/footer'); ?>    </div>  </body></html>