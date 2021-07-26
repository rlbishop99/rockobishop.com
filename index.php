<html>
<head>
<style>

    @font-face {
        font-family: CogText;
        src: url('vtRemingtonPortable.tff');
    }

    p{
        font-family: CogText;
    }

    .table_div{
        margin-left: auto;
        margin-right: auto;
    }

    .table_div td{
        align: center;
        text-align: center;
    }

    .table_div img{
        cursor: pointer;
        align: center;
        height: 76px;
    }

    .select{
        padding-bottom: 25em;
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
        <td><img src="images/lawbots/bottomfeeder.png"onclick="enableDiv(this.src)"/><p class="text">Bottom Feeder</p></td>
        <td><img src="images/lawbots/bloodsucker.png"onclick="enableDiv(this.src)"/><p class="text">Bloodsucker</p></td>
        <td><img src="images/lawbots/doubletalker.png"onclick="enableDiv(this.src)"/><p class="text">Double Talker</p></td>
        <td><img src="images/lawbots/ambulancechaser.png"onclick="enableDiv(this.src)"/><p class="text">Ambulance Chaser</p></td>
        <td><img src="images/lawbots/backstabber.png"onclick="enableDiv(this.src)"/><p class="text">Back Stabber</p></td>
        <td><img src="images/lawbots/spindoctor.png"onclick="enableDiv(this.src)"/><p class="text">Spin Doctor</p></td>
        <td><img src="images/lawbots/legaleagle.png"onclick="enableDiv(this.src)"/><p class="text">Legal Eagle</p></td>
        <td><img src="images/lawbots/bigwig.png"onclick="enableDiv(this.src)"/><p class="text">BigWig</p></td>
    </tr>
    <tr>
        <td><b>Cashbots:</b></td>
        <td><img src="images/cashbots/shortchange.png"onclick="enableDiv(this.src)"/><p class="text">Short Change</p></td>
        <td><img src="images/cashbots/pennypincher.png"onclick="enableDiv(this.src)"/><p class="text">Penny Pincher</p></td>
        <td><img src="images/cashbots/tightwad.png"onclick="enableDiv(this.src)"/><p class="text">Tightwad</p></td>
        <td><img src="images/cashbots/beancounter.png"onclick="enableDiv(this.src)"/><p class="text">Bean Counter</p></td>
        <td><img src="images/cashbots/numbercruncher.png"onclick="enableDiv(this.src)"/><p class="text">Number Cruncher</p></td>
        <td><img src="images/cashbots/moneybags.png"onclick="enableDiv(this.src)"/><p class="text">Money Bags</p></td>
        <td><img src="images/cashbots/loanshark.png"onclick="enableDiv(this.src)"/><p class="text">Loan Shark</p></td>
        <td><img src="images/cashbots/robberbaron.png"onclick="enableDiv(this.src)"/><p class="text">Robber Baron</p></td>
    </tr>
    <tr>
        <td><b>Sellbots:</b></td>
        <td><img src="images/sellbots/coldcaller.png"onclick="enableDiv(this.src)"/><p class="text">Cold Caller</p></td>
        <td><img src="images/sellbots/telemarketer.png"onclick="enableDiv(this.src)"/><p class="text">Telemarketer</p></td>
        <td><img src="images/sellbots/namedropper.png"onclick="enableDiv(this.src)"/><p class="text">Name Dropper</p></td>
        <td><img src="images/sellbots/gladhander.png"onclick="enableDiv(this.src)"/><p class="text">Glad Hander</p></td>
        <td><img src="images/sellbots/movershaker.png"onclick="enableDiv(this.src)"/><p class="text">Mover & Shaker</p></td>
        <td><img src="images/sellbots/twoface.png"onclick="enableDiv(this.src)"/><p class="text">Two-Face</p></td>
        <td><img src="images/sellbots/mingler.png"onclick="enableDiv(this.src)"/><p class="text">The Mingler</p></td>
        <td><img src="images/sellbots/hollywood.png"onclick="enableDiv(this.src)"/><p class="text">Mr. Hollywood</p></td>
    </tr>
</table>

<div id="testDiv" style="display: none; align-items: center; justify-content: center; margin-top: 50px;">
        <select id="hpValues" onclick="calculateHP(value); this.previousElementSibling.value=this.value; this.previousElementSibling.focus()" style="margin-left: 200px;">
            <option selected> Select Cog Level</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
</div>

<script>
    function enableDiv(imgSrc){

        var x = document.getElementById("testDiv");
        var img = document.createElement("img");
        img.setAttribute('height', '350px');

        if(x.style.display === "none"){
            x.style.display = "flex";
            img.src = imgSrc;
            x.insertBefore(img, x.firstChild);
        } else{
            x.removeChild(x.firstChild);
            var img = document.createElement("img");
            img.setAttribute('height', '350px');
            img.src = imgSrc;
            x.insertBefore(img, x.firstChild);
        }
    }
</script>

<script>
    function calculateHP(hp){

        $maxHP = (hp + 1) * (hp + 2);
    }

    <?php echo "This cog has " + $maxHP + " maximum HP." ?>
</script>

</body>
</html>