<?php
$file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside-main-sidebar.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <?php echo $this->element('aside/user-panel_cust'); ?>

        <!-- search form -->
        <?php echo $this->element('aside/form_cust'); ?>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php echo $this->element('aside/sidebar-menu_custom'); ?>

    </section>
    <!-- /.sidebar -->
</aside>
<?php } ?>
