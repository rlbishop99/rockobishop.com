<html>
<head>
<style>

    .table_div{
        margin-left: auto;
        margin-right: auto;
    }

    .table_div td{
        align: center;
        text-align: center;
    }

    .table_div img{
        align: center;
        height: 76px;
    }

</style>    
<title>Cog HP Calculator</title>
</head>

<body>
<h1>Cog HP Calculator</h1>
<table class="table_div">
    <tr>
        <td><b>Bossbots:</b></td>
        <td><img src="images/bossbots/flunky.png" onclick="enableDiv(this.src)"/><p>Flunky</p></button></td>
        <td><img src="images/bossbots/pencilpusher.png"onclick="enableDiv(this.src)"/><p class="text">Pencil Pusher</p></td>
        <td><img src="images/bossbots/yesman.png"onclick="enableDiv(this.src)"/><p class="text">Yesman</p></td>
        <td><img src="images/bossbots/micromanager.png"onclick="enableDiv(this.src)"/><p class="text">Micromanager</p></td>
        <td><img src="images/bossbots/downsizer.png"onclick="enableDiv(this.src)"/><p class="text">Downsizer</p></td>
        <td><img src="images/bossbots/headhunter.png"onclick="enableDiv(this.src)"/><p class="text">Head Hunter</p></td>
        <td><img src="images/bossbots/raider.png"onclick="enableDiv(this.src)"/><p class="text">Corporate Raider</p></td>
        <td><img src="images/bossbots/bigcheese.png"onclick="enableDiv(this.src)"/><p class="text">The Big Cheese</p></td>
    </tr>
    <tr>
        <td><b>Lawbots:</b></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/bottomfeeder.png"/><p class="text">Bottom Feeder</p></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/bloodsucker.png"/><p class="text">Bloodsucker</p></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/doubletalker.png"/><p class="text">Double Talker</p></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/ambulancechaser.png"/><p class="text">Ambulance Chaser</p></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/backstabber.png"/><p class="text">Back Stabber</p></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/spindoctor.png"/><p class="text">Spin Doctor</p></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/legaleagle.png"/><p class="text">Legal Eagle</p></td>
        <td><button onclick=enableDiv()><img src="images/lawbots/bigwig.png"/><p class="text">BigWig</p></td>
    </tr>
    <tr>
        <td><b>Cashbots:</b></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/shortchange.png"/><p class="text">Short Change</p></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/pennypincher.png"/><p class="text">Penny Pincher</p></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/tightwad.png"/><p class="text">Tightwad</p></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/beancounter.png"/><p class="text">Bean Counter</p></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/numbercruncher.png"/><p class="text">Number Cruncher</p></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/moneybags.png"/><p class="text">Money Bags</p></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/loanshark.png"/><p class="text">Loan Shark</p></td>
        <td><button onclick=enableDiv()><img src="images/cashbots/robberbaron.png"/><p class="text">Robber Baron</p></td>
    </tr>
    <tr>
        <td><b>Sellbots:</b></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/coldcaller.png"/><p class="text">Cold Caller</p></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/telemarketer.png"/><p class="text">Telemarketer</p></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/namedropper.png"/><p class="text">Name Dropper</p></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/gladhander.png"/><p class="text">Glad Hander</p></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/movershaker.png"/><p class="text">Mover & Shaker</p></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/twoface.png"/><p class="text">Two-Face</p></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/mingler.png"/><p class="text">The Mingler</p></td>
        <td><button onclick=enableDiv()><img src="images/sellbots/hollywood.png"/><p class="text">Mr. Hollywood</p></td>
    </tr>
</table>

<div style="display: none" id="testDiv">
    This is a test div.
</div>

<script>
    function enableDiv(imgSrc){

        var x = document.getElementById("testDiv");
        var img = document.createElement("img");
        img.src = imgSrc;

        document.getElementById('testDiv').appendChild(img);

        if(x.style.display === "none"){
            x.style.display = "block";
            console.log("showing image");
        } else{
            x.style.display = "none";
            document.getElementById('testDiv').removeChild(img);
        }
    }
</script>

</body>
</html>