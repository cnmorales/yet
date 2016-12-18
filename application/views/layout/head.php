<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yet</title>

  <!-- css for calendar -->
  <link rel="stylesheet" href="<?php echo base_url("assets/calendar/fullcalendar.css"); ?>"/>

  <!-- javascript -->
   <script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/jquery-3.1.1.min.js"); ?>"></script>

   <!-- bootstrap -->
   <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" />
   <script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.js"); ?>"></script>

   <!-- Angular js for Calendar -->
   <script type="text/javascript" src="<?php echo base_url("assets/calendar/moment.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/calendar/angular.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/calendar/calendar.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/calendar/fullcalendar.js"); ?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/calendar/gcal.js"); ?>"></script>

   <!--Imports for materialize-->
   <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/materialize/css/materialize.min.css");?>" media="screen,projection"/>
   <script type="text/javascript" src="<?php echo base_url("assets/materialize/js/materialize.min.js"); ?>"></script>

   <!-- yet style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/yet-style.css"); ?>" />
  <!-- Our Angular component -->
   <script type="text/javascript" src="<?php echo base_url("application/yet-calendar.js"); ?>"></script>

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
