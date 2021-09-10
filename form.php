<body>
<div class="container">  
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="ticket.php"> 
<div class="form-group"> 
  <label for="exampleInputUsername" class="control-label col-sm-2">Username</label>
  <div class="col-sm-10">
  <input class="form-control form-control-lg" type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  </div>
  
</div>
  <div class="form-group">
  <label for="exampleInputEmail" class="control-label col-sm-2">Email</label>
  <div class="col-sm-10">
  <input class="form-control form-control-lg" type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </div>
  </div>
  
  <div class="form-group">
  <label for="exampleInputComment" class="control-label col-sm-2">Comment</label>
  <div class="col-sm-10">
  <textarea class="form-control" name="comment" rows="3"><?php echo $comment;?></textarea>
  <span class="error">* <?php echo $commentErr;?></span>
  </div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="issue">User Issue:</label>
  <select class="form-control form-control-lg" name="issue" id="issue">
	<option value="">--- What is your issue ---</option>
	<option value="query">Query</option>
	<option value="Feedback">Feedback</option>
	<option value="Complaint">Complaint</option>
  <option value="Other">Other</option>
  </select>
  <span class="error">* <?php echo $issueErr;?></span>
  </div>

  <input type="submit" name="submit" value="Submit" class="btn btn-primary">  
</form>
 </div>