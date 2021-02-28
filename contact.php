<?php /* Template Name: contat */ ?>

<?php

get_header(); ?>

<div class="offset"></div>
<div class="light-wrapper">
    <div class="container inner">
        <div class="map">
            <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msid=207252500814404613616.0004dbcb6e23f7b275953&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=51.504255,-0.101452&amp;spn=0.026713,0.100336&amp;z=14&amp;output=embed"></iframe>
        </div>
        <div class="divide50"></div>
        <div class="row">
            <div class="col-sm-8">
                <div class="divide20"></div>
                <div class="form-container">
                    <div class="response alert alert-success"></div>
                    <form class="forms" action="mailto(it.davoodi@gmail.com)" method="post">
                        <fieldset>
                            <ol>
                                <li class="form-row text-input-row name-field">
                                    <input type="text" name="name" class="text-input defaultText required" title="Name (Required)"/>
                                </li>
                                <li class="form-row text-input-row email-field">
                                    <input type="text" name="email" class="text-input defaultText required email" title="Email (Required)"/>
                                </li>
                                <li class="form-row text-input-row subject-field">
                                    <input type="text" name="subject" class="text-input defaultText" title="Subject"/>
                                </li>
                                <li class="form-row text-area-row">
                                    <textarea name="message" class="text-area required"></textarea>
                                </li>
                                <li class="form-row hidden-row">
                                    <input type="hidden" name="hidden" value="" />
                                </li>
                                <li class="nocomment">
                                    <label for="nocomment">Leave This Field Empty</label>
                                    <input id="nocomment" value="" name="nocomment" />
                                </li>
                                <li class="button-row">
                                    <input type="submit" value="Submit" name="submit" class="btn btn-submit bm0" />
                                </li>
                            </ol>
                            <input type="hidden" name="v_error" id="v-error" value="Required" />
                            <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
                        </fieldset>
                    </form>
                </div>
                <!-- /.form-container -->
            </div>
            <!-- /.col -->
            <aside class="col-sm-4 sidebar lp20">
                <div class="sidebox widget">
                    <h3>آدرس :</h3>

                    <address>

                        تهران <br>

                        <abbr title="Phone">تلفن</abbr> (123) 456-7890 <br>
                        <abbr title="Email">تلفکس:</abbr> <a href="mailto:#">first.last@email.com</a>
                    </address>
                </div>
                <!-- /.widget -->
            </aside>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
</div>
<?php  get_footer(); ?>
</body>
</html>