<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- INCLUDE FOR CSS FILE -->
    <link rel="stylesheet" href="./css/app.css">
    <title> Chat </title>
</head>
<body>

  <div class="app">
  <header id="head">
      <h1> Lets Talk</h1>
      <input type="text" name="username" id="username" placeholder=" please entrer a username....">
  </header>
  <div id="message"></div>

  <form action="" id="message_form">

    <input type="text" name="message" id="message_input" placeholder="write the message "/>
     <button type="submit" id="message_send"> Send Message</button>
</form>

  </div>
  <script src="./js/app.js"></script>
</body>
</html>
