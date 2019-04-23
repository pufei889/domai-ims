<!DOCTYPE HTML>
<html lang="<?php echo $this->lang; ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?php echo $this->title; ?></title>
<style>
*{margin:0;padding:0;}body{font-size:12px;font-family:Arial,Verdana;width:100%;height:100%;overflow:hidden}.exetime{position:absolute;bottom:2px;width:100%;text-align:center}.note{width:40%;font-size:20px;text-align:center;padding:20px;margin:auto;margin-top:10%;border:1px solid #ccc;}
</style>
</head>
<body>
<div class="note"><?php echo $this->body; ?></div>
<div class="exetime">Total <?php echo $this->exetime; ?> (ms)</div>
<script>setTimeout(function(){window.history.go(-1)},2000);</script>
</body>
</html>
