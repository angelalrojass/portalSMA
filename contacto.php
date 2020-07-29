<?php
 $menu = '4';
?>
<?php include("header.php");?>
   <!-- ============================================
        =================== Content =====================
        ============================================= -->

        <section id="content">


          


            <div class="content-wrap">

                <!-- ============ Contact section ============ -->
                <div class="container clearfix">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="heading-block mb-60">
                                <h2 class="text-uppercase"><span class="text-theme">Ponte en </span> contacto</h2>
                            </div>

                            <form id="contactForm">


                                <div class="row">

                                    <div class="form-group col-sm-4">
                                        <label for="name">Nombre <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="name" type="text" class="form-control myInput" id="name" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="email">Email <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="email" type="email" class="form-control myInput" id="email" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="phone">Teléfono</label>
                                        <input name="phone" type="text" class="form-control myInput" id="phone">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-sm-12">
                                        <label for="subject">Asunto <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="subject" type="text" class="form-control myInput" id="subject" required>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-sm-12">
                                        <label for="message">Mensaje<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <textarea name="message" class="form-control myInput" id="message" rows="8" required></textarea>
                                    </div>

                                </div>

                                <button type="submit" class="myBtn myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10">Enviar mensaje</button>


                            </form>

                           

                            

                        </div>

                        <div class="col-md-4">

                            <div>

                                <address>
                                    <strong class="text-theme">Avenida Juárez No. 302<BR>Barrio de San Miguel<BR>CP. 52100<BR>San Mateo Atenco, Estado de México</strong>
                                    

                                    <strong class="block mt-20">Teléfono:</strong>
                                            <br> Tel (722) 69 0 40 60
                                                           <br>69 0 40 61

                                    

                                    <div class="social mt-40 mb-60">
                                        <a class="social-icon social-facebook" href="https://www.facebook.com/AyuntamientoDeSanMateoAtenco/">
                                            <div class="front">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                        </a>

                                        <a class="social-icon social-twitter" href="https://twitter.com/HSanMateoAtenc">
                                            <div class="front">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                        </a>

                                        
                                    </div>
                                </address>

                                
                            </div>

                        </div>

                    </div>

                </div>
                <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
        <?php include("footer.php");?>
</body>
</html>
