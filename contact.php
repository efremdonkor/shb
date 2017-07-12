<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'includes/header.php';

?>

<div class="container">
    <div class="col-md-7">
        <div class="form-area">
            <form role="form">
                <br style="clear: both">
                <h2 style="margin-bottom: 25px; text-align: center; text-decoration: #262626 wavy;" class="pull-left">Hit me hard, but Short</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Your Message Here" maxlength="600" rows="8"></textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block">You have reached the limit</p></span>
                </div>
                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
            </form>
        </div>
    </div>
    <div class="col-md-5">
        <img src="images/IMG_9915.png" class="img-responsive">
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#characterLeft').text('600 characters left');
        $('#message').keydown(function(){
            var max = 600;
            var len = $(this).val().length;
            if(len >= max){
                $('#characterLeft').text('You have reached the limit');
                $('characterLeft').addClass('red');
                $('#btnSubmit').addClass('disabled');
            }
            else {
                var ch = max - len;
                $('#characterLeft').text(ch + ' charcaters left');
                $('#btnSubmit').removeClass('disabled');
                $('#characterLeft').removeClass('red');
            }
        });
    });
    </script>


<?php
include 'includes/footer.php';
?>