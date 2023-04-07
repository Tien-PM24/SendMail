<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
    <div class="form">
        <form>
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name" placeholder="Your name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" placeholder="Your email" required></td>
                </tr>
                <tr>
                    <td><label for="subject">Subject:</label></td>
                    <td><input type="text" id="subject" name="subject" placeholder="Subject" required></td>
                </tr>
                <tr>
                    <td><label for="message">Message:</label></td>
                    <td><textarea id="message" name="message" placeholder="Write your message here" required></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Send"></td>
                </tr>               
                
            </table>
        </form>
    </div>
</body>
</html>-->

<link rel="stylesheet" href="../public/Style/style_form.css">
<style>
    #submit-email-user{
        background-color: #008080;
        border-radius: 20px;
        color: whitesmoke;
    }
    #email-modal{
        background-color: #FFCC99;
    }
</style>
<div id="email-modal" class="modal-email-user">
        <div class="modal-content-email-user">
          <span class="close" id="close-btn">&times;</span>
          <form action="../BackEnd/Email.php" method="post">
            <label for="to">To: </label> <br>
            <input type="email" id="to-email-user" name="to-email" required><br><br>
            <label for="subject">Subject:</label><br><br>
            <input type="text" id="subject-email-user" name="subject-email" required> <br><br>
            <label for="message">Message:</label><br><br>
            <textarea id="message-email-user" name="message-email" required></textarea> <br><br>
            <button type="submit" id="submit-email-user" name="submit-email">Send</button>
          </form>
        </div>
      </div>