<!DOCTYPE HTML> 
<html> 
  <head> 
    <meta charset="utf-8"> 
    <title>Send a Free SMS to UK</title> 
	<meta name="Description" content="Send Free SMS To any UK number">
	<meta name="Keywords" content="SMS,FREE SMS,FREE TXT,FREE TEXT,SMS FREE,send a free sms to mobile without registration">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" /> 
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script> 
 </script>
    <style type="text/css"> 
      div {text-align: center}
      #result { margin-top: 15px; }
	  table.center {
    margin-left:auto; 
    margin-right:auto;
  }
    </style> 
  </head>

<body>

    <div data-role="page" id="newsms" data-theme="b"> 
      <div id="SMSinput"> 
        <form action="submit.php" method="post" id="newSMSForm"> 
          <h2><label>Send a Free SMS</label></h2>
		  <br>
		  <script type="text/javascript"><!--
google_ad_client = "ca-pub-3163241987876213";
/* SMS */
google_ad_slot = "8625256384";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

		  <br>
		  To: <input name="number" type="text" maxlength="12" data-mini="true" value="07" />
		  <br>
		  <div>Only UK mobile numbers will work </div>
		  <br>
		  Message:  <input name="message" type="text" maxlength="160" data-mini="true" value="Your Message" />
		  <br>
		  Flash: <input type="checkbox" name="flash" value="yes"> 
		  <br>
		  <div>
         <input name="submit" data-role="button" data-inline="true" type="submit" value="submit" /></form><a href="#admin" class="back"><button data-inline="true">back</button></a><br>
		  </div></div>
		  <div id="result"></div><script type="text/javascript"><!--
google_ad_client = "ca-pub-3163241987876213";
/* SMS */
google_ad_slot = "8625256384";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div></div>
		  </body>
		  <script>
$("#newSMSForm").on("submit", function(e){
        
        var $inputs = $('#newSMSForm :input'), 
            values = {};
        $inputs.each(function() {
          values[this.name] = this.value;
        });
        
        $.ajax({
          type : "POST",
          url : "submit.php",
          data: values,
          success : function(res) {
            $("#result").html(res);
            $("input[type=text]").val("");
          }
        });
        
        return false;
      });
      
      $(".back").on("click", function(){
        $("#result").html("");
      });
	  </script>

    <!--End SMS Page -->
