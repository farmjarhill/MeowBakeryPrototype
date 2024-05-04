<footer class="footer pt-5">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-heart"></i> by
                    <a href="#" class="font-weight-bold" target="_blank">Team t di vao het</a>
                    for a better web.
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">Cake</a>
                    </li>
                    <li class="nav-item">
                        <a href="#/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#/blog" class="nav-link text-muted" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Sweet Alert -->
<script src="assets/js/sweettalert.js"></script>
<!-- Alertify JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</main>

<!-- <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        ?>
    <script>
        swal({
            title: '<?php echo $_SESSION['status']; ?>',
            icon: '<?php echo $_SESSION['status_code']; ?>',
            button: "Okay!",
        });
    </script>
    <?php
            //unset($_SESSION['status']);
        }
    ?> -->

    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
        <script>
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('<?php echo $_SESSION['status']; ?>');
        </script>
    <?php
        unset($_SESSION['status']);
    }
    ?>



</body>

</html>