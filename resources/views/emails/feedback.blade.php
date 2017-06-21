<div style="font-family:Arial;line-height:30px;font-size:15px;margin:0 auto;width:90%;">
	<div style="background-color:#3B5998;color:#fff;padding:15px 0;text-align:center;margin:15px 0;">
		CONTACT PAGE FEEDBACK
	</div>
	<div style="color:#4b4b4b;padding:0 20px 15px 20px;">
		Sender: <a href="mailto:{{ $sender_email }}" style="color:#3b5998;text-decoration:none;">{{ $sender_email }}</a><br>
		Subject: {{ $sender_subject }}
	</div>
	<div style="border:solid #c2cad8;border-width:1px 0;padding:25px 20px;color:#252525;">
		{{ $sender_msg }}
	</div>
	<div style="font-size:12px;text-align:center;padding:10px 0;color:#626262;background-color:#E9EAED">
		This message was sent from the contact page on CTL website
	</div>
</div>