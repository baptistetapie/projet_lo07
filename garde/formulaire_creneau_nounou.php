<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>NOUVEAU CRENEAU NOUNOU</title>
</head>
<body>
<div id="DivCalendar" style="z-index:2; display:none; width:200px;height:235px; overflow:hidden;position:absolute;Top:1px; left:1px;" ></div>
<form name="calendar"  onsubmit="return comparedate()" method="post">


<!--    <p><label for="hd">Heure de début : </label><input type="number" name="hd" id="hd" min="0" max="23" required></p>-->
<!--    <p> <label for="hf">Heure de fin : </label><input type="number" name="hf" id="hf" min="0" max="23" onblur="verifheure2(this)" required></p>-->

    <tr>
        <td> Heure de début :
            <select name='hd' id="hd">
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
            </select>
        </td>
    </tr>

    <tr>
        <td> Heure de fin :
            <select name='hf' id ="hf" onblur="verifheure2(this)" >
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
            </select>
        </td>
    </tr>

    <p><label for="da">Date de la disponibilté : </label> <input type='text' name='da' id='da' onfocus="show_calendar('da','jj,mm,aaaa')" style='text-align:right' readonly/></p>

    <p> <input type='submit' value='envoyer' id="bouton"/></p>
</form>

<script src="../JavaScript/calendrier.js"></script>
<script src="../JavaScript/heure.js"></script>
</body>
</html>


<!--action="javascript:alert('ok')"-->

