<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/calendar.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/moment.min.js"></script>
    </head>
    <body>
        <div id="cal">
            <div class="header">
                <span class="left button" id="prev"> &lang;</span>
                <span class="left hook"></span>
                <span class="month-year" id="label">June 2010</span>
                <span class="right hook"></span>
                <span class="right button" id="next">&rang;</span>
            </div>
            <table id="days">
                <td>Lunes</td>
                <td>Martes</td>
                <td>Miercoles</td>
                <td>Jueves</td>
                <td>Viernes</td>
                <td>Sabado</td>
                <td>Domingo</td>
            </table>
            <div id="cal-frame">
                <table class="curr"> 
    <tbody> 
        <tr><td class="nil"></td><td class="nil"></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr> 
        <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td class="today">11</td><td>12</td></tr> 
        <tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr> 
        <tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr> 
        <tr><td>27</td><td>28</td><td>29</td><td>30</td><td class="nil"></td><td class="nil"></td><td class="nil"></td></tr> 
    </tbody> 
</table>
            </div>
        </div>
    </body>
</html>
