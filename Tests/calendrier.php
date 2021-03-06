<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Calendrier SpaceFrog</title>
    <script type='text/javascript'>
        function show_calendar(str_target, str_datetime) {
            var arr_months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
            var week_days = ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"];
            var n_weekstart = 1; // day week starts from (normally 0 or 1)

// Si la date est invalide : Initialisation avec la date du jour
            var test_date = /^(\d+)\/(\d+)\/(\d+)$/;
            if (!test_date.exec(str_datetime))
            {
                var d = new Date();

                var str_datetime = d.getDate()+ "/" +(d.getMonth() + 1) + "/"+  d.getYear();

            }

            var dt_datetime = (str_datetime == null || str_datetime =="" ?  new Date() : str2dt(str_datetime));

            var dt_prev_month = new Date(dt_datetime);
            dt_prev_month.setMonth(dt_datetime.getMonth()-1);
            var dt_next_month = new Date(dt_datetime);
            dt_next_month.setMonth(dt_datetime.getMonth()+1);

            var dt_prev_year = new Date(dt_datetime);
            dt_prev_year.setFullYear(dt_datetime.getFullYear()-1);
            var dt_next_year = new Date(dt_datetime);
            dt_next_year.setFullYear(dt_datetime.getFullYear()+1);

            var dt_firstday = new Date(dt_datetime);
            dt_firstday.setDate(1);
            dt_firstday.setDate(1-(7+dt_firstday.getDay()-n_weekstart)%7);
            var dt_lastday = new Date(dt_next_month);
            dt_lastday.setDate(0);
            var title_calendar=(str_target=='dd')?'DATE D\'ARRIVEE':'DATE DE DEPART';

            // html generation (feel free to tune it for your particular application)
            // print calendar header
            var StringYear=dt_datetime.getFullYear().toString().substring(dt_datetime.getFullYear().toString().length-2,dt_datetime.getFullYear().toString().length)
            var str_buffer = new String (
                "<table class=\"clsOTable\" cellspacing=\"0\" border=\"0\" width=\"100%\">\n"+
                "<tr>\n<td bgcolor=\"#4682B4\">"+
                "<table cellspacing=\"1\" cellpadding=\"3\" border=\"0\" width=\"100%\">\n"+

                //ENTETE TABLEAU
                "<tr>\n   <td bgcolor=\"blue\" style='text-align:center;color:white;font-family:verdana;font-weight:bold;font-size:11px;' colspan=\"6\">"+title_calendar+"<\/td>\n"+
                "<td bgcolor=\"blue\" style=\"text-align:center;color:navy;font-family:verdana;font-weight:bold;font-size:10px;background-color:silver;border:outset 2px white;cursor:pointer;\" onclick=\"document.getElementById('DivCalendar').style.display='none';\">X<\/td>\n "+
                "<\/tr>\n"+



                // Ligne Année précédente / suivante
                "<tr>\n   <td bgcolor=\"blue\"><a href=\"javascript:show_calendar('"+
                str_target+"', '"+ dt2dtstr(dt_prev_year)+"');\">"+
                "<img src=\"images/prev.gif\" width=\"16\" height=\"16\" border=\"0\""+
                " alt=\"Année précédente\"></a></td>\n"+
                "   <td align=\"center\" bgcolor=\"blue\" colspan=\"5\">"+
                "<font color=\"white\" face=\"tahoma, verdana\" size=\"2\">"
                +" 20"+StringYear+"</font></td>\n"+
                "   <td bgcolor=\"blue\" align=\"right\"><a href=\"javascript:show_calendar('"
                +str_target+"', '"+dt2dtstr(dt_next_year)+"');\">"+
                "<img src=\"images/next.gif\" width=\"16\" height=\"16\" border=\"0\""+

                " alt=\"Année suivante\"></a></td>\n</tr>\n"+

                // Ligne Mois précédent / suivant
                "<tr>\n   <td bgcolor=\"#4682B4\"><a href=\"javascript:show_calendar('"+
                str_target+"', '"+ dt2dtstr(dt_prev_month)+"');\">"+
                "<img src=\"images/prev.gif\" width=\"16\" height=\"16\" border=\"0\""+
                " alt=\"Mois précédent\"></a></td>\n"+
                "   <td align=\"center\" bgcolor=\"#4682B4\" colspan=\"5\">"+
                "<font color=\"white\" face=\"tahoma, verdana\" size=\"2\">"
                +arr_months[dt_datetime.getMonth()]+" 20"+StringYear+"</font></td>\n"+
                "   <td bgcolor=\"#4682B4\" align=\"right\"><a href=\"javascript:show_calendar('"
                +str_target+"', '"+dt2dtstr(dt_next_month)+"');\">"+
                "<img src=\"images/next.gif\" width=\"16\" height=\"16\" border=\"0\""+
                " alt=\"Mois suivant\"></a></td>\n</tr>\n"

            ); //end newstring

            var dt_current_day = new Date(dt_firstday);

            // print weekdays titles
            str_buffer += "<tr>\n";
            for (var n=0; n<7; n++)
                str_buffer += "   <td bgcolor=\"#87CEFA\">"+
                    "<font color=\"white\" face=\"tahoma, verdana\" size=\"2\">"+
                    week_days[(n_weekstart+n)%7]+"</font></td>\n";
            // print calendar table
            str_buffer += "</tr>\n";
            while (dt_current_day.getMonth() == dt_datetime.getMonth() ||
            dt_current_day.getMonth() == dt_firstday.getMonth()) {
                // print row header
                str_buffer += "<tr>\n";
                for (var n_current_wday=0; n_current_wday<7; n_current_wday++) {
                    if (dt_current_day.getDate() == dt_datetime.getDate() &&
                        dt_current_day.getMonth() == dt_datetime.getMonth())
                    // print current date
                        str_buffer += "   <td bgcolor=\"#FFB6C1\" align=\"right\">";
                    else if (dt_current_day.getDay() == 0 || dt_current_day.getDay() == 6)
                    // weekend days
                        str_buffer += "   <td bgcolor=\"#DBEAF5\" align=\"right\">";
                    else
                    // print working days of current month
                        str_buffer += "   <td bgcolor=\"white\" align=\"right\">";

                    if (dt_current_day.getMonth() == dt_datetime.getMonth())
                    // print days of current month
                        str_buffer += "<a style=\"cursor:pointer;\" onclick=\"document.getElementById('"+str_target+"').value='"+dt2dtstr(dt_current_day)+"'; document.getElementById('DivCalendar').style.display='none';\">"+

                            "<font color=\"black\" face=\"tahoma, verdana\" size=\"2\">";
                    else
                    // print days of other months


                        str_buffer += "<font color=\"gray\" face=\"tahoma, verdana\" size=\"2\">";
                    str_buffer += dt_current_day.getDate()+"</font></a></td>\n";

                    dt_current_day.setDate(dt_current_day.getDate()+1);
                }
                // print row footer
                str_buffer += "</tr>\n";
            }
            // print calendar footer
            str_buffer +=  "</tr>\n</td>\n</table>\n" ;



            fenCalendrier=document.getElementById('DivCalendar');
            fenCalendrier.innerHTML=str_buffer;
            fenCalendrier.style.top=document.getElementById(str_target).offsetTop+"px";
            fenCalendrier.style.left=Number(document.getElementById(str_target).offsetLeft)+Number(document.getElementById(str_target).offsetWidth)+"px";
            fenCalendrier.style.display="block"

        }
        // datetime parsing and formatting routimes. modify them if you wish other datetime format
        function str2dt (str_datetime) {
            var re_date = /^(\d+)\/(\d+)\/(\d+)$/;
            if (!re_date.exec(str_datetime))
                return alert("Invalid Datetime format: "+ str_datetime);
            return (new Date (RegExp.$3, RegExp.$2-1, RegExp.$1, RegExp.$4, RegExp.$5, RegExp.$6));
        }



        /***********************************
         * Formatage de date pour affichage *
         ***********************************/

        function dt2dtstr (dt_datetime) {
            var FormatedDate=""

            FormatedDate+=(dt_datetime.getDate().toString().length==1)?"0"+dt_datetime.getDate().toString():dt_datetime.getDate().toString();
            FormatedDate+="/";
            FormatedDate+=((dt_datetime.getMonth()+1).toString().length==1)?"0"+(dt_datetime.getMonth()+1).toString():(dt_datetime.getMonth()+1).toString();
            FormatedDate+="/";
            FormatedDate+="20"+dt_datetime.getFullYear().toString().substring(dt_datetime.getFullYear().toString().length-2,dt_datetime.getFullYear()).toString()
            return FormatedDate;
        }

        function dt2tmstr (dt_datetime) {
            return (new String (
                dt_datetime.getHours()+":"+dt_datetime.getMinutes()+":"+dt_datetime.getSeconds()));
        }



        /*************************
         * comparaison des dates  *
         *************************/
        function comparedate(){

            var maintenant=new Date()
            maintenant=dt2dtstr(maintenant).split('\/').reverse().join('')



            if(document.getElementById('da').value.length<1){
                alert("Entrez une date d\'arrivee");
                return false;
            }

            var date_arrivee=document.getElementById('da').value.split('\/').reverse().join('');
            if(date_arrivee<maintenant){
                alert('vous ne pourrez pas arriver avant aujourd\'hui');
                return false;
            }

            if(document.getElementById('da').value.length<1){
                alert("Entrez une date de départ");
                return false;
            }

            var date_depart=document.getElementById('dd').value.split('\/').reverse().join('');
            if(date_arrivee>date_depart){
                alert("Vous devez arriver avant de repartir!");
                return false;
            }


            else {
                return true;}

        }
        ('votre nom')
    </script>
</head>

<body >
<div id="DivCalendar" style="z-index:2; display:none; width:200px;height:235px; overflow:hidden;position:absolute;Top:1px; left:1px;" ></div>
<form name="calendar" action="javascript:alert('ok')" onsubmit="return comparedate()" method="post">
    <input type='text' name='da' id='da' onfocus="show_calendar('da','jj,mm,aaaa')" style='text-align:right' readonly/><br/>
<!--    <input type='text' name='dd' id='dd' onfocus="show_calendar('dd')" readonly style='text-align:right' />-->
    <input type='submit' value='envoyer'/>
</form>
</body>

</html>