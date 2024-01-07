<!DOCTYPE html>
<html lang="fr">
<head>
   <link rel="stylesheet" href="contact.css">
   <style>input[type=text], select, textarea {
    width: 100%; 
    padding: 12px; 
    border: 1px solid #ccc; 
    border-radius: 4px; 
    box-sizing: border-box; 
    margin-top: 6px;
    margin-bottom: 16px; 
    resize: vertical 
    
  }
  
  
  input[type=submit] {
    background-color: #3cca69;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  
  input[type=submit]:hover {
    background-color: #508154;
  }
  
 
  .container {
    border-radius: 5px;
    background-color: #508154;
    padding: 20px;
  }
  </style>
    <title>CONTACT US</title>
</head>

<body>
    <div class="container">
        <form style="font-family: Verdana, Geneva, Tahoma, sans-serif  ;" >
      
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname" >Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">MOROCCO</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div>
    
</body>
