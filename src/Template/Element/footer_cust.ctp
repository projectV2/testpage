<?php
$file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'footer.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 0.1
    </div>
    <strong> <a href="#">DiscussME!</a>.</strong> Check it out!
</footer>
<?php } ?>
