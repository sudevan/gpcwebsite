<?php
session_start();
include("include.php");

?>

<!DOCTYPE html>
<?php include("head.php") ?>
<div class="container">
        <div class="row">
            <div class="page-header col-md-7">
                    <h2>Grievance Redressal Cell</h2>
                    <p>Grievances Redressal cell deals with all types of grievances, complaints and malpractices including those received from Students, Faculty and other Stakeholders. </p>
                    <button id="complaint"> Register grievance online </button>
                    <button id="complaintstatus"> Check grievance status online </button>
            </div>

        </div>
        <div id= "complaintform" name="complaintform" class="complaintform">
        </div>

        </div>
    <?php include("tail.php"); ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.webticker.min.js"></script>
    <script>
        $(function(){
           // $('#popUp').delay(1500).show(400);
            })
        $("#webticker-update-example").webTicker({
            height:'50px'
            });
        $('#close-btn').click(function(){
            $('#popUp').hide(400);
            });
    </script>

<script src="./js/complaint.js"></script>
</body>
</html>