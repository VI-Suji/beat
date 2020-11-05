// calculate score ......... all teams

// players = [
//     {
//         id:4,
//         name: "Virat Kohli" ,
//         img:'RCB' ,
//         skill:"bat" ,
//         credit: 9 ,
//         team: 'RCB' ,
//         score:'15'
//     },
//     {
//         id:5,
//         name: "Cris Morris" ,
//         img:'RCB' ,
//         skill:"bowl" ,
//         credit: 9 ,
//         team: 'RCB' ,
//         score:'10'
//     }
// ]

// myTeams =[
//     {
//         id:8,
//         useremail: "test@gmail.com",
//         p1: "Virat Kohli",
//         p2: "Cris Morris",
//         p3: "Cris Morris",
//         p4: "Cris Morris",
//         p5: "Cris Morris",
//         p6: "Cris Morris",
//         p7: "Cris Morris",
//         p8: "Cris Morris",
//         p9: "Cris Morris",
//         p10:"Cris Morris",
//         p11:"Cris Morris",
//         tscore: 0
//     },
//     {
//         id:9,
//         useremail: "test@gmail.com",
//         p1: "Virat Kohli",
//         p2: "Virat Kohli",
//         p3: "Virat Kohli",
//         p4: "Virat Kohli",
//         p5: "Virat Kohli",
//         p6: "Virat Kohli",
//         p7: "Virat Kohli",
//         p8: "Virat Kohli",
//         p9: "Virat Kohli",
//         p10: "Virat Kohli",
//         p11: "Virat Kohli",
//         tscore: 0
//     },
//         {
//         id:10,
//         useremail: "test@gmail.com",
//         p1: "Virat Kohli",
//         p2: "Virat Kohli",
//         p3: "Virat Kohli",
//         p4: "Virat Kohli",
//         p5: "Virat Kohli",
//         p6: "Virat Kohli",
//         p7: "Virat Kohli",
//         p8: "Virat Kohli",
//         p9: "Virat Kohli",
//         p10: "Virat Kohli",
//         p11: "Cris Morris",
//         tscore: 0
//     }
// ]

//......................................................................

const getPlayerScore = (p) => {
  console.log(p);
  return parseInt(players.find((player) => player.name === p).score);
};

myTeams.forEach((myTeam) => {
  const { p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11 } = myTeam;
  const normalPlayers = [p3, p4, p5, p6, p7, p8, p9, p10, p11];

  const capScore = getPlayerScore(p1);
  const vCapScore = getPlayerScore(p2);
  let normalPlayersScore = 0;
  normalPlayers.forEach((normalPlayer) => {
    normalPlayersScore += getPlayerScore(normalPlayer);
  });

  //total score  (adding weightage )
  //setting tscore to myteams
  myTeam.tscore = 2 * capScore + 1.5 * vCapScore + normalPlayersScore;
});

console.log(myTeams);
