let toppers = [
  {
    name: "why so sad",
    imageSrc: "./MI.jpg",
    pos: 1,
    score: 10,
  },
  {
    name: "Bahubali",
    imageSrc: "./MI.jpg",
    pos: 2,
    score: 10,
  },
  {
    name: "Devasena",
    imageSrc: "./MI.jpg",
    pos: 3,
    score: 10,
  },
  {
    name: "Kattappa",
    imageSrc: "",
    pos: 4,
    score: 10,
  },
  {
    name: "MuhdHisham",
    imageSrc: "./MI.jpg",
    pos: 5,
    score: 10,
  },
];
$cnt = 1;
const setPlayers = () => {
  playersList = toppers.reduce((leaderBoard, topper) => {
    $cnt = $cnt + 1;
    leaderBoard += `<div class = "list p-0" style = "width:80vmin;">
            <div class = "item p-4">
            
            <div class="pos" style = "font-weight:510;">
            
            </div>
          <div class="name col-7 mx-auto" style = "font-weight:510;">
        ${topper.name}
          </div>
         <div class="score col-5" style = "">
        <strong>${topper.score}</strong>
        </div>
            </div>
            </div>`;

    return leaderBoard;
  }, "");

  playersElement = document.getElementById("toppers");
  playersElement.innerHTML = playersList;
};

setPlayers();
