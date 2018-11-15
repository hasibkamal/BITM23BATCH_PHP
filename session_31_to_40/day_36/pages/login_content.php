<?php
    if(isset($_POST['btn'])) {
        $obj_app->customer_registration_info($_POST);
    }
    

    
    
    
    

    
?>

<script>
    var xmlhttp = new XMLHttpRequest();
 function ajax_email_check(given_email,objID){
//     alert(objID);
//     alert(given_email);
    var server_page = 'email_check.php?email='+given_email;
    xmlhttp.open('GET',server_page);
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200 ){
            document.getElementById(objID).innerHTML = xmlhttp.responseText;
        }
        if(xmlhttp.responseText === 'Email Exist'){
            document.getElementById('reg_btn').disabled = true;
        }else{
            document.getElementById('reg_btn').disabled = false;
        }
    }
    xmlhttp.send(null);
 }
</script>




<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <div class="well">
                                <h3 class="text-center text-success">Registration Point Here.</h3>
                                <hr/>
                                <form role="form" class="form-horizontal" action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">First Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Email Address</label>
                                        <div class="col-lg-9">
                                            <input onblur="ajax_email_check(this.value, 'msg')" type="email" name="email_address" class="form-control">
                                            <span id="msg"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" name="address" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Phone Number</label>
                                        <div class="col-lg-9">
                                            <input type="number" name="phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">District Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="district" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <input id="reg_btn" type="submit" name="btn" class="btn btn-primary btn-block" value="Registration"> 
                                        </div>
                                    </div>
                                </form>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="well">
                                <h3 class="text-center text-success">Login Point Here.</h3>
                                <hr/>
                                <form role="form" class="form-horizontal" action="" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Email Address</label>
                                        <div class="col-lg-9">
                                            <input type="email" name="email_address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Login"> 
                                        </div>
                                    </div>
                                </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
