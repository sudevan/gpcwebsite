
var obj, dbParam, xmlhttp;

xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText,false);
    
        $form = $("<form></form>");
        
        console.log("starting....");
        var objectKeys = Object.keys(myObj);
        console.log(objectKeys);
        for( var element in myObj)
        {
            if (myObj.hasOwnProperty(element)) {

                question=myObj[element];
                if( question['type'] == 'input' )
                {
                    inputname=question['name'] ;
                    label="<label>"+inputname+"</label>";
                    field="<input name='"+inputname+"'>";
                    $form.append(label)
                    $form.append(field);
                }
            }
        }
        $('#questions').append($form);
       
 }
};

$(function () {
        $("#complaint").click(function () {
           alert("clicked");
        });
    });

$(window).load(function(){  
        querystring="http://127.0.0.1/gptcsite/survey.php?surveyid=sample";         
        xmlhttp.open("GET", querystring, true);
        xmlhttp.send();
});


var form =` <div class="col-md-5">
                <div class="widget-item">
                    <div class="request-information">
                        <h4 class="widget-title">Grievance Redressal Form </h4>
                    <form action="contact.php" method="post">
                            <div class="full-row">
                                <label for="cat">Student Name:</label>                
                                <div class="input-select">
                                    <input name="name" type="text" id="name" class="postform" required/>
                                </div> <!-- /.input-select -->  
                            </div> <!-- /.full-row -->
                                <div class="full-row">
                                <label for="cat">Register Number:</label>                
                                <div class="input-select">
                                    <input name="name" type="text" id="name" class="postform" required/>
                                </div> <!-- /.input-select -->  
                            </div> <!-- /.full-row -->
                            <div class="full-row">
                                <label for="cat2">Mobile:</label>                                               
                                <div class="input-select">
                                    <input type="text" name="surname" id="mobile" class="postform" required/>
                                      
                                </div> <!-- /.input-select -->
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="yourname">Email</label>
                                <input type="email" id="email" name="email" />
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="email-id">Brief explanation about grievance to be addressed(Not more than 400 words) *</label>
                                <textarea type="text" id="message" name="message" class="postform"> </textarea>
                                
                            </div> <!-- /.full-row -->
                            <div class="full-row" style="height: 4px"></div>
                            <div class="full-row">
                                <div class="submit_field">
                                    <span class="small-text pull-left">Submit Your Grievance</span>
                                    <input class="mainBtn pull-right" type="submit" name="submit" value="Submit">
                                </div> <!-- /.submit-field -->
                            </div> <!-- /.full-row -->


                        </form> <!-- /.request-info -->
                    </div> <!-- /.request-information -->
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->`;