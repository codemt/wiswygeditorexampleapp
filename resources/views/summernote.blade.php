<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    

<script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
</script>

    <title>Document</title>
</head>
<body>
    <div class="container">


            <form action="{{route('summernotePersist')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <label for="exampleSelect1">Example select</label>
                            <select class="form-control" id="options">
                              <option>NA</option>
                            </select>
                          </div>
                    <textarea name="summernoteInput"  id="textarea" class="summernote"></textarea>
                    <br>
                    <button type="submit">Submit</button>
                </form>
                <br>
                <h4> Form 2 </h4>

                <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
                <button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
                <div class="click2edit">click2edit</div>




    </div>

   

<script>



        $(document).ready(function(){

$("#options").append( '<option value="new_user_mail"> New User Mail </option>');
$("#options").append( '<option value="purchase_order_approval"> Purchase Order Approval </option>');
$("#options").append( '<option value="sales_order_approval"> Sales Order Approval </option>');
$("#options").append( '<option value="sales_order_create"> Sales Order Create </option>');
$("#options").append( '<option value="sales_order_customer_approval"> Sales Order Customer Approval </option>');
$("#options").append( '<option value="sales_order_accountant_approval"> Sales Order Accountant Approval </option>');


$("#options").change(function(e){


        let optionvalue = $('#options').val();
        console.log(optionvalue);


});

$("#options").change(function(e){

                let optionvalue = $('#options').val();
                if(optionvalue == 'new_user_mail')
                {
                    
                       // $('#textarea').val('Hello User , Welcome to iTransparity').summernote('code');
                        $('#textarea').summernote('code', 'Hello User , Welcome to iTransparity');

                }
                if(optionvalue == 'purchase_order_approval')
                {
                        
                        // $('#textarea').val('Hello User , Your Purchase Order is this ABP223-E');
                        $('#textarea').summernote('pasteHTML','<!DOCTYPE html><html> <head></head> <body> <div style="text-align: center;width: 100%;font-family: open sans;max-width: 580px;float: none;margin: 0 auto;border: 1px solid #686868 ;padding-top: 30px;display: inline-block;"> <div style="padding: 0px;text-align: center;display: inline-block;float: left;width:calc(100% - 40px);padding: 0 20px;border-box: box-sizing;"> <!-- <div style="margin-bottom: 20px;"><img src="http://wowffers.com/backend/images/wowffersLogo.png" alt="logo"></div> --> <div> <div style="padding: 0 20px;margin-bottom: 20px;"> <div> <h2 style="margin: 0 auto;font-size: 18px;margin-bottom: 10px;font-weight: normal;text-align: left;"><b>Dear </b></h2> </div> </div> <div style="padding: 0 20px;"> <div> <div style="font-size: 20px;margin-bottom: 10px;">Your registration for ERP access is successful!</div> </div> </div> <div style="padding: 0 20px;"> <div> <div style="font-size: 16px;margin-bottom: 10px;">Your login credentials are. </div> </div> </div> <div style="background-color: #0d4a83;color: #ffffff;font-size: 18px;padding: 20px;width: 100%;display: inline-block;box-sizing: border-box;"> <div style="margin-bottom: 4px;"><strong>Name: </strong></div> <div style="margin-bottom: 4px;"><strong>Email: </strong></div> <div style="margin-bottom: 4px;"><strong>Password: </strong></div> </div> <div style="padding: 0 20px 20px;"> <div> <div style="font-size: 18px;margin: 25px auto 0 ;line-height: 26px;">There is link to login: <a href="">Click here</a></div> </div> </div> <div style="padding: 0 20px 20px;"> <div> <div style="font-size: 18px;margin: 25px auto 0 ;line-height: 26px;"> Please write to us on email <a href="mailto:marketing@wowffers.com" style="text-decoration:none;color: #e52534;">admin@gmail.com</a><br/>or call us on <a href="tel:1234567890" style="text-decoration:none;color: #e52534;">1234567890 / </a><a href="tel:1234567890" style="text-decoration:none;color: #e52534;">1234567890</a>for your login issues.</div> </div> </div> <div style="padding: 0 20px;margin-bottom: 20px;"> <div> <h2 style="margin: 0 auto;font-size: 18px;margin-bottom: 10px;font-weight: normal;text-align: left;"><b>Regards </b><br><br> Triton Process Automation Pvt Limited<br> Swastik Disha Corporate Park, 613-615, 6th Floor<br> L.B.S. Marg, Opposite shreyas Cinema<br> Ghatkopar(W), Mumbai – 400086<br> Tel. : 022 2500 1900<br> nirav@tritonprocess.com <br> www.tritonprocess.com</h2> </div> </div> </div> </div> </div> </body></html>');
                }



    });

            $('#edit').click(function(e){


                    e.preventDefault();


                    
                    $('.click2edit').summernote({focus: true});
                

                    
                 

        });

        $('#save').click(function(e){



                    var markup = $('.click2edit').summernote('code');
                    $('.click2edit').summernote('destroy');

        });
});








</script>

</body>
</html>