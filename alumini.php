<?php 


$to = " mail@techcloudinnovations.com";

$headers = 'From: site@gptcpalakkad.in' . "\r\n";
$headers .="CC: mail@.techcloud.com" . "\r\n";
$headers .="Subject: Alumini Registration" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$errors = array();

    if(!empty($_POST['name']))
        $sender_name  = stripslashes(strip_tags(trim($_POST['name'])));
        
   
    if(!empty($_POST['surname']))
        $sender_mob = stripslashes(strip_tags(trim($_POST['surname'])));
        
    if(!empty($_POST['email']))
        $sender_email  = stripslashes(strip_tags(trim($_POST['email'])));
        
   
    
         if(!empty($_POST['message']))
        $sender_add  = stripslashes(strip_tags(trim($_POST['message'])));
    
    
   
           

    if(empty($errors)) {               
$msg_contact ='<div style="width:75%; 
                height:auto; 
                font-family:Sans-serif; 
                padding-left:5%; 
                padding-right:5%;
                margin-left: auto;
                margin-right: auto;">
				<div style="min-height: 70px;
                color:#fff;
                background-color: #808080;
                text-align: center;
                font-size: 1.5em;
                line-height: 70px; ">'.$subject.'</div>
				<div style="height: 10px;
                background-color: #808080;"></div>
				<div style="border:1px solid #b2b2b2;
                padding:15px; overflow:hidden; background: #E2E2E2;">
                <h3 style="color:#5A5A5A;">Student Details</h3>'.
				'<div style="width:10%;
                display: inline-block;
               
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;     color: #3D3636;">First Name:</div> ' .'<div style="width:20%;
                display: inline-block;
                
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;
                color:#808080;
                font-size:11pt;">'. $sender_name.'</div><div style="width:100%; height:30px"></div>'.
				'<div style="width:10%;
                display: inline-block;
               
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;     color: #3D3636;">Last Name:</div> ' .'<div style="width:30%;
                display: inline-block;
                
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;
                color:#808080;
                font-size:11pt;">'. $sender_mob.'</div><div style="width:100%; height:30px"></div>'.
				'<div style="width:10%;
                display: inline-block;
                
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;     color: #3D3636;">Email:</div> ' .'<div style="width:20%;
                display: inline-block;
               
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;
                color:#808080;
                font-size:11pt;">'. $sender_email.'</div><div style="width:100%; height:30px"></div>'.
				'<div style="width:10%;
                display: inline-block;
          
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;     color: #3D3636;">Message:</div> ' .'<div style="width:20%;
                display: inline-block;
            
                float: left;
                margin-top: 5px;
                margin-bottom: 5px;
                color:#808080;
                font-size:11pt;">'. $sender_add.'</div><div style="width:100%; height:30px"></div>'.
				
				'<div style="width:100%; height:2px"></div></div>' . '<div style="width:100%;
                display: block;
                clear: both;"></div>';
        $content = $msg_contact;
        $content = wordwrap($content, 70);
       //echo $content;
       mail($to,$subject,$content,$headers);
 header('location:contact.html'); 
       }
       else { echo implode('<br>', $errors );  }
?>
