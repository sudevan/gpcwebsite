$(document).ready(function(){

    $('#complaint').click(function () {
        $('#complaintform').html(formdata)
        // body...
    });
    $('#complaintstatus').click(function () {
        $('#complaintform').html(statusform)
        // body...
    });
});

var formdata=`<div class="col-md-3 col-md-offset-3">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf1c2By15o7n-CdSY_ahIlIcexE8dUWGRdVTcEQQPAQ4yHo7A/viewform?embedded=true" width="640" height="1118" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>`

var statusform=`<div class="col-md-3 col-md-offset-3">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSflfSPwyt7uo5uwUM7XDC77lgy-PrSzRishg48XbSudaSgRTQ/viewform?embedded=true" width="640" height="465" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>`