<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
 <style>
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.container { width:100% ;
height: 800px;
background-color: maroon;
background-position: center;
position: relative;
background-size: cover;
padding-top: 30px;
box-sizing: border-box;
}

.msg {
    width: 600px;
    height: 280px;
    position: absolute;
    left: 14%;
    top: 57%;
    transform: translateY(-50%);
    overflow: hidden;
} 

#slider { 
    display: inline-flex;
    transition: 0.4s;
} 

.msgcol {
    width: 600px;
    height: 280px;
}

.msgcol h2 {
    color: white;
    font-size: 80px;
    font-weight: 100;
    margin: 10px 0;

}

.msgcol p{ color: grey;
    font-size: 15px;
    line-height: 25px;

}

 .controller {
    width: 1px;
    height: 320px;
    display: block;
    background: #c0c0c0;
    position: absolute;
    top: 55%;
    right: 50px;
    transform: translateY(-50%);
 }

 #lin1 ,#lin2 ,#lin3 ,#lin4 {
height: 80px;
width: 10px;
cursor: pointer;
transform: translateX(-50%);
background: grey;
 }

 #active {
    width: 5px;
    height: 80px;
    border-radius: 10px;
    background: #fff;
    position: absolute;
    top: 0;
    transform: translateX(-50%);
    transition: 0.4s;
 }

 </style>



</head>
<body>
    <div class="container">

<div class="msg">
<div id="slider">
<div class="msgcol">
    <h2>Chiller Truck</h2>
    <p>A refrigerator truck or chiller lorry (also called a Reefer), is a van or truck designed to carry perishable
        freight at
        low temperatures. Most long-distance refrigerated transport by truck is done in articulated trucks pulling
        refrigerated
        semi-trailersThe first successful mechanically refrigerated trucks were made for the ice cream industry in 1925.
        African American inventor Frederick McKinley Jones later contributed to the field. There were around 4 million
        refrigerated road vehicles in use in 2010 worldwide.</p>

</div>

<div class="msgcol">
    <h2>Tipper Truck</h2>
    <p>A dump truck, known also as a dumping truck, dump trailer, dumper trailer, dump lorry or dumper lorry or a dumper
        for
        short, is used for transporting materials (such as dirt, gravel, or demolition waste) for construction as well
        as coal.
        In the UK, Australia, South Africa and India the term applies to off-road construction plants only and the road
        vehicle
        is known as a tip lorry, tipper lorry (UK, India), tipper truck, tip truck, tip trailer or tipper trailer or
        simply a
        tipper (Australia, New Zealand, South Africa).</p>

</div>

<div class="msgcol">
    <h2>Cane Truck</h2>
    <p>A truck or lorry is a motor vehicle designed to transport cargo, carry specialized payloads, or perform other
        utilitarian work. Trucks vary greatly in size, power, and configuration, but the vast majority feature
        body-on-frame
        construction, with a cabin that is independent of the payload portion of the vehicle. Smaller varieties may be
        mechanically similar to some automobiles. Commercial trucks can be very large and powerful and may be configured
        to be
        mounted with specialized equipment, such as in the case of refuse trucks, fire trucks, concrete mixers, and
        suction
        excavators.</p>

</div>

<div class="msgcol">
    <h2>Car Transporter Truck</h2>
    <p>A car carrier trailer, also known as a car-carrying trailer, car hauler, or auto transport trailer, is a type of
        trailer
        or semi-trailer designed to efficiently transport passenger vehicles via truck.
        Modern car carrier trailers can be open or enclosed. Most commercial trailers have built-in ramps for loading
        and
        off-loading cars, as well as power hydraulics to raise and lower ramps for stand-alone accessibility</p>

</div>

</div>
</div>
 </div>
    
<div class="controller">
<div id="lin1"></div>
<div id="lin2"></div>
<div id="lin3"></div>
<div id="lin4"></div>
<div id="active"></div> </div>




<script>


var slider = document.getElementById('slider');
var active = document.getElementById('active');
var lin1 = document.getElementById('lin1');
var lin2 = document.getElementById('lin2');
var lin3 = document.getElementById('lin3');
var lin4 = document.getElementById('lin4');

lin1.onclick = function() {
    slider.style.transform = 'translateX(0)';
    active.style.top = '0px';
}
lin2.onclick = function() {
    slider.style.transform = 'translateX(-25%)';
    active.style.top = '80px';
}
lin3.onclick = function() {
    slider.style.transform = 'translateX(-50%)';
    active.style.top = '160px';
}
lin4.onclick = function() {
    slider.style.transform = 'translateX(-75%)';
    active.style.top = '240px';
}




</script>


</body>
</html>