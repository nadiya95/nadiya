<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - Vows and Values</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/search.css"> <!-- Link to the external CSS file -->
</head>
<body>
    <?php include 'header.php'; ?> <!-- Include your header file -->

    <div class="search-container">
        <h2>Search Profiles</h2>
        <form action="../users/search_handler.php" method="POST">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="age_range">Age Range:</label>
            <input type="text" name="age_range" id="age_range" placeholder="e.g., 20-30" required>

            <label for="state">State:</label>
            <input type="text" name="state" id="state" placeholder="Enter State" required>

            <label for="district">District:</label>
            <input type="text" name="district" id="district" placeholder="Enter District" required>

            <label for="religion">Religion:</label>
            <select name="religion" id="religion" required>
                <option value="">Select Religion</option>
                <option value="hinduism">Hindu</option>
                <option value="islam">Muslim</option>
                <option value="christianity">Christian</option>
                <option value="other">Other</option>
            </select>

            <button type="submit" name="search">
            <i class="fas fa-search"></i>
            </button>

        </form>
    </div>
</body>
</html>
