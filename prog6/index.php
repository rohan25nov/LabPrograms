<html>
<head>
    <title>Visitors Count</title>
    <style type="text/css">
        h1,h2 {text-align: center}
    </style>
</head>
<body>
    <h1>Welcome to MY WEB PAGE</h1>
    <?php
    $file="count.txt";
    $handle=fopen($file,'r') or die("Cannot Open File : $file");
    $count=fread($handle,10);
    fclose($handle);
    $count++;
    echo "<h2>No of visitors who visited this page : $count </h2>";
    $handle=fopen($file,'w') or die("Cannot Open File : $file");
    fwrite($handle,$count);
    fclose($handle);
    ?>
</body>
</html>
