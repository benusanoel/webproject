<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello Noel</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <meta name="author" content="Team Bah" />
    <meta name="description" content="The description of the website" />

    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css');  ?>" />
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap-theme.css');  ?>" />
    <!-- <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/custom.css');  ?>" /> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/design1.css');  ?>" />

    <script src= "<?php echo base_url('bootstrap/js/jquery.min.js') ?>"></script>
    <script src= "<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>

    </script>
  </head>
<body>
<?php
for($ctr=1;$ctr<=6;$ctr++)
	{
		echo "<h$ctr>Hello Github IS me! </h$ctr>";
	}

?>
</body>
</html>
