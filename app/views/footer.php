            <footer id="footer">
                <p>&copy; <?php echo $this->config->item('current_year');?> <?php echo $this->config->item('name'); ?>. Alle Rechte vorbehalten. <span id="footer-links"><a href="<?php echo base_url('contact'); ?>">Kontakt.</a> <a href="<?php echo base_url('article/show/imprint'); ?>">Impressum.</a> <a href="<?php echo base_url('admin/login'); ?>">Login.</a></span></p>
            </footer>
        </div>
    </div>
    
     <!-- Other Scripts -->
    <script src="<?php echo js_file_url('jquery.min'); ?>"></script>
    <script src="<?php echo js_file_url('jquery.poptrox.min'); ?>"></script>
    <script src="<?php echo js_file_url('skel.min'); ?>"></script>
    <script src="<?php echo js_file_url('main'); ?>"></script>
    <script src="<?php echo js_file_url('modernizr-custom'); ?>"></script>
    
    <!-- Own Scripts -->
    <script src="<?php echo js_file_url('extended'); ?>"></script> 
    
    <?php if(isset($fancy)): ?>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php echo css_file_url('jquery.fancybox'); ?>" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo js_file_url('jquery.fancybox.pack'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
    <?php endif; ?>
</body>
</html>
