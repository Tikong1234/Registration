<?php
include "connect.php";
$id = $_GET['deleteid'];
$sql = "DELETE FROM `student_info` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Create the alert message
            var alertBox = document.createElement("div");
            alertBox.style.backgroundColor = "red";
            alertBox.style.color = "white";
            alertBox.style.padding = "10px";
            alertBox.style.marginTop = "10px";
            alertBox.innerText = "New record created successfully. Redirecting in 3 seconds...";
            
            // Add the alert message to the body
            document.body.appendChild(alertBox);

            // Redirect to the index page after 3 seconds
            setTimeout(function() {
                window.location.href = "index.php?msg=New record created successfully";
            }, 3000); // 3000 milliseconds = 3 seconds
        });
    </script>';
}
else{
    echo "Failed:" . mysqli_error($conn);
}

?>
