
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <div class="main">
        <form action="list.php" method="post">
            <div class="box">
                <div class="innerBox">
                    <div class="radioBox">
                        <label for="tcp">
                            <input type="radio" id="tcp" value="tcp" name="radio" checked />
                            <span>TCP</span>
                        </label>
                        <label for="udp">
                            <input type="radio" id="udp" value="udp" name="radio" />
                            <span>UDP</span>
                        </label>
                        <label for="arp">
                            <input type="radio" id="arp" value="arp" name="radio" />
                            <span>ARP</span>
                        </label>
                    </div>
                    <div class="selectBox">
                        <label class="select" for="slct">
                            <select id="slct" required="required" name="list">
                                <option value="" disabled="disabled" selected="selected">Select option</option>
                                <option value="timestamp">Time Stamp</option>
                                <option value="IPsrc">Source IP</option>
                                <option value="IPdesti">Destination IP</option>
                                <option value="MACsrc">Source MAC</option>
                                <option value="MACdesti">Destination Mac</option>
                                <option value="SrcPort">Source Port</option>
                                <option value="DstPort">Destination Port</option>
                                <option value="packetlength">Packet Length</option>
				<option value="All">All</option>
                            </select>
                        </label>
                    </div>

                </div>
                <button class="btn2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>

