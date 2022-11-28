var intervalID = window.setInterval(updateScreen, 200);
var c = document.getElementById("console");

var txt = [
  "FORCE: XX0022. ENCYPT://192.168.1.1",
  "TRYPASS: ********* fg0d -oos mendchilj baina: 1___ PRIORITY 1",
  "RETRY: REINDEER FLOTILLA",
  "Z:> /FALKEN/GAMES/TICTACTOE/ EXECUTE -PLAYERS 0",
  "================================================",
  "Priority 1 // local / scanning...",
  "scanning ports...",
  "BACKDOOR FOUND (192.168.1.1.00000000)",
  "BACKDOOR FOUND (13.66.23.12.00110000)",
  "BACKDOOR FOUND (13.66.23.12.00110044)",
  "...",
  "...",
  "BRUTE FORCE DEPLOYED -r -z",
  "...locating vulnerabilities...",
  "...vulnerabilities found...",
  "MCP/> DEPLOY CLU",
  "SCAN: __ fg0d -oos mendchilj baina:",
  "SCAN: __ fg0d -oos mendchilj baina:",
  "SCAN: __ Oroltsson buh humuustee:",
  "SCAN: __ Oroltsson buh humuustee:",
  "SCAN: __ Bayrlalaa:",
  "SCAN: __ Bayrlalaa:",
  "SCAN: __ username:admin",
  "SCAN: __password:admin"
]

var docfrag = document.createDocumentFragment();

function updateScreen() {
  //Shuffle the "txt" array
  txt.push(txt.shift());
  //Rebuild document fragment
  txt.forEach(function(e) {
    var p = document.createElement("p");
    p.textContent = e;
    docfrag.appendChild(p);
  });
  //Clear DOM body
  while (c.firstChild) {
    c.removeChild(c.firstChild);
  }
  c.appendChild(docfrag);
}