<!-- ========================================= Start Footer -->

        <footer class="text-center bg-gray">
            <div class="container">

                <!-- Logo -->
                <a class="logo" href="#">
                    <img src="assets/img/logo-dark.png" alt="logo">          
                </a>
                
                <div class="social">
                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                    <a href="#0"><i class="icofont icofont-social-instagram"></i></a>
                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                    <a href="#0"><i class="icofont icofont-social-behance"></i></a>
                </div>

                <p>&copy; <?=date('Y');?> All Rights Reserved.</p>
            </div>
        </footer>

        <!-- End Footer =========================================== -->

        <!-- jQuery -->
        <script src="assets/js/jquery-3.0.0.min.js"></script>
        <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>

        <!-- popper.min -->
        <script src="assets/js/popper.min.js"></script>

        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- scrollIt -->
        <script src="assets/js/scrollIt.min.js"></script>

        <!-- animated.headline -->
        <script src="assets/js/animated.headline.js"></script>

        <!-- jquery.magnific-popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>

        <!-- stellar js -->
        <script src="assets/js/jquery.stellar.min.js"></script>

        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>

        <!-- validator js -->
        <script src="assets/js/validator.js"></script>

        <!-- custom scripts -->
        <script src="assets/js/scripts.js"></script>
        <script type="text/javascript">
            function contactUsBtn(id){
                var name=$("#form_name").val();
                var email=$("#form_email").val();
                var mobile=$("#form_mobile").val();
                var subject=$("#form_subject").val();
                var message=$("#form_message").val();
                //alert(mobile);
                if(email!="" && mobile!=""){
                    $.ajax({
                        url:'https://docs.google.com/forms/u/0/d/e/1FAIpQLSeVgj6_TCpWtKl-vPjzcSpM16_DdPPyaHkbI4cJeIchqYwBrw/formResponse',
                        type:'post',
                        data:{"entry.1278549473":name,"entry.1505590015":email,"entry.146594383":mobile,"entry.2136291015":subject,"entry.1382707863":message},
                        success:function(response){
                            $("#successMsg").html(response);
                            if(response==true){
                                alert("You have successfully submitted your details kindly wait for response...");    
                            }
                            console.log(response);
                            //window.location.reload();
                        }
                    });
                }
                        event.preventDefault();
            }

             function SubmitInDatabase(id){
                var name=$("#form_name").val();
                var email=$("#form_email").val();
                var mobile=$("#form_mobile").val();
                var subject=$("#form_subject").val();
                var message=$("#form_message").val();
                 alert(messages);
                $.ajax({
                    url:'contact_us.php',
                    type:'post',
                    data:{name:name,email:email,mobile:mobile,subject:subject,meassage:meassage},
                    success:function(sucessresponse){
                        $("#showsuccessMsg").html(sucessresponse);
                        console.log(sucessresponse);
                });
                //event.preventDefault();
            }
        </script>
    </body>
</html>