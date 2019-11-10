<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {_meta}

  <title><?php echo $this->config->item('website_name'); ?> | {title}</title>


  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/favicon.png" />

  <!-- Fakrullah Maulana CSS -->

  {_styles}


</head>

<body>
  <div class="container-scroller">

    <?php $this->load->view($menuatas); ?>

    <div class="container-fluid page-body-wrapper">

      <?php $this->load->view($panel); ?>

      {header}

      <div class="main-panel">
        <div class="content-wrapper">

            {content}

        </div>

        {footer}

      </div>
    </div>
  </div>

  <script src="<?php echo base_url('assets/'); ?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/off-canvas.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/template.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/settings.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/todolist.js"></script>

  <!-- Fakrullah Maulana javascript -->

  {_scripts}

</body>

</html>
