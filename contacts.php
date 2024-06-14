<?php require_once ("includes/db_connect.php"); ?>

<?php include_once ("templates/heading.php"); ?>
<?php include_once ("templates/nav.php"); ?>
<div class="banner">
    <h1>Banner</h1> 
</div>

<div class="row">
    <div class="content">
    <h1>Forms</h1>
    <form action="" method="post" class="contacts_form">

        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fn"><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="em"><br><br>
            

        
        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="eLearning Support">eLearning Support</option>
            <option value="AMS Support">AMS Support</option>
        </select>

        <br><br>
        
        <label for="sb">Message:</label><br>
            <textarea name="" id="" cols="30" rows="5"></textarea>

            <br><br>

            <input type="submit" value="Send Message">

                </div>
<?php include_once ("templates/side_bar.php"); ?>
        </div>
<?php include_once ("templates/footer.php"); ?>