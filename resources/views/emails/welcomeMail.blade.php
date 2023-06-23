<!DOCTYPE html>
<html>
<head>
    <title>MYSCHOOL.com</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
  
    <p>You have been successfully Registered to Zenzone. <br>

       Kindly use your email to log into the system. <br> {{$mailData['password']}} <br>
       <br>

       Remember to change your password after logging in so as to enhance security of your data. <br>
    
     <br>
     <br>
    
       
</body>
</html>