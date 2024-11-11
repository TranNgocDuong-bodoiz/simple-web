<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Store</title>
</head>
<body>
    <h1>Phone List</h1>
    <?php foreach ($phones as $phone): ?>
        <div>
            <img src="<?php echo $phone->imageUrl; ?>" alt="<?php echo $phone->name; ?>" width="100">
            <h3><?php echo $phone->name . " (" . $phone->brand . ")"; ?></h3>
            <p>Price: $<?php echo $phone->price; ?></p>
            <a href="index.php?action=details&id=<?php echo $phone->id; ?>">View Details</a>
        </div>
    <?php endforeach; ?>
</body>
</html>