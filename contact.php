  <?php require "univhead.php"; ?>
  
  <title>Contact | Me A Domus | Remodeling, Repair, Construction</title>
  <style type="text/css"><?php require "css/contact.min.css"; ?></style>  
</head>

<body>
  <?php require "header.html"; ?>
  
  <div class='content flex row wrap sb' id="content">
      <div class='intro'>
        <h1>Contact Me A Domus</h1>
        <p class='bold'>
          <span class="a">We want to talk with you...</span> 
          <span class="b">call us at 707-478-4342</span>
        </p>
        <p>Or if you prefer, send us email using this form.<br/> We check for new messages regularly.</p>
        <p>Need us urgently? Please dont send email. Just call us! </p>
        <h2>Mailing Address</h2>
        <p class='addr'>P.O. Box 1348, <br/>Sebastopol, CA 95472</p>
      </div> <!-- end intro -->
      
      <form action="send.php" method="post">
        <fieldset>
        <legend class='bold'>Name</legend>
          <span class='fn'>
            <label for="first_name" class="instr">First</label><br>
            <input id="first_name" type="text" name="first" required="required" maxlength="50"  autofocus><br>
          </span>
          <span class='ln'>
            <label for="last_name" class="instr">Last</label><br>
            <input id="last_name" type="text" name="last" required="required" maxlength="50"  ><br>
          </span>
        </fieldset>
        
        <p class='ph'>
          <label for="phone" class='bold'>Phone Number</label><br>
          <span class="instr">xxx-xxx-xxxx</span><br>
          <input id='phone' type="tel" pattern="^\d{3}-\d{3}-\d{4}$" name="phone" required="required" maxlength="12"><br>
        </p>
        <p class='ea'>
          <label for="email" class='bold'>E-mail Address</label><br>
          <span class='instr'>We won't share it.</span><br>
          <input id='email' type="email" name="email" size="31" placeholder="optional"><br>
        </p>
        
        <p class='m'>
          <label for="msg" class='bold'>Message</label><br>
          <span class='instr'>How can we help you?<br>If you have a project, describe it briefly. </span><br>
          <textarea id='msg' name="msg" rows="5" cols="60" maxlength="1000" required="required" placeholder="(max. 500 characters)"></textarea><br>
          Do not send credit card, bank account, or other payment information through this form.
        </p><br>
        
        <input type="submit" value="Send">
                
        <p class="honeypot">
          <label for="comment">This field is a trap for spambots. If you're a person, leave it empty.</label>
          <textarea id='comment' name="comment" rows="1" cols="1" value="" autocomplete="false"></textarea>
        </p>
      </form><br>  
      
  </div> <!-- end content -->

<?php require "footer.html"; ?>

</body>
</html>
