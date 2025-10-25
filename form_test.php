<!DOCTYPE html>
<html>
<head>
    <title>Form with Sticky Select</title>
</head>
<body>

<form action="" method="post">
    <label for="gender">Select Gender:</label>
    <select name="gender" id="gender">
        <?php
        // Check if the form has been submitted
        if (isset($_POST['gender'])) {
            // If submitted, get the selected value
            $selected_gender = $_POST['gender'];
        } else {
            // If not submitted, set a default value (or leave it empty)
            $selected_gender = '';
        }
        ?>
        <option value="male" <?php if ($selected_gender == 'male') echo 'selected="selected"'; ?>>Male</option>
        <option value="female" <?php if ($selected_gender == 'female') echo 'selected="selected"'; ?>>Female</option>
    </select>
    <input type="submit" value="Submit">
</form>

</body>
</html>
