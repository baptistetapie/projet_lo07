<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Calendrier SpaceFrog</title>
</head>
<body>
<div id="DivCalendar" style="z-index:2; display:none; width:200px;height:235px; overflow:hidden;position:absolute;Top:1px; left:1px;" ></div>
<form name="calendar" action="javascript:alert('ok')" onsubmit="return comparedate()" method="post">
    <input type='text' name='da' id='da' onfocus="show_calendar('da','jj,mm,aaaa')" style='text-align:right' readonly/><br/>
    <!--    <input type='text' name='dd' id='dd' onfocus="show_calendar('dd')" readonly style='text-align:right' />-->
    <input type='submit' value='envoyer'/>
</form>

<script src="../JavaScript/calendrier.js"></script>

</body>
</html>