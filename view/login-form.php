
<div class="input-group ">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   <h1>Login</h1> <br> 
    <label class="fonts"> User Name</label>
    <input type="text" name="uname" ><br>
    <label class="fonts">Email</label>
    <input type="email" name="email"><br>
    <label class="fonts">Password</label>
    <input type="password" name="password"><br>
    <button type="submit" name="submit" class="fonts">Log in</button>  
</form>
 </div>

