<?php
    require_once ("includes/db_connect.php");
    include_once ("templates/heading.php"); 
    include_once ("templates/nav.php");
?>
        <div class="banner">
            <h1>Messages</h1> 
        </div>
        <div class="row">
            <div class="content">
                <h1>Messages</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Sender Name</th>
                    <th>Sender Email</td>
                    <th>Subject Line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
        $select_msg = "SELECT * FROM `messages` ORDER BY datecreated DESC";
        $sel_msg_res = $conn->query($select_msg);
        $en = 0;
        if ($sel_msg_res->num_rows > 0) {
            // output data of each row
            while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
                $en++;
                ?>
        <tr>
            <td><?php print $en; ?>.</td>
            <td><?php print $sel_msg_row["sender_name"]; ?></td>
            <td><?php print $sel_msg_row["sender_email"]; ?></td>
            <td><?php print "<strong>" . $sel_msg_row["subject_line"] .'</strong> - ' . substr($sel_msg_row["text_message"], 0, 20) . '...' ; ?></td>
            <td><?php print date("d-M-Y H:i", strtotime($sel_msg_row["datecreated"])); ?></td>
            <td>[ <a href="edit_msg.php?messageId=<?php print $sel_msg_row["messageId"]; ?>">Edit</a> ] [ Del ]</td>
        </tr>
<?php
        }
        } else {
        echo "0 results";
        }
?>
            </tbody>
            <thead>
                <tr>
                    <th colspan="2">Sender Name</th>
                    <th>Sender Email</td>
                    <th>Subject Line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
         </table>
            </div>
<?php include_once ("templates/side_bar.php"); ?>
        </div>
<?php include_once ("templates/footer.php"); ?>