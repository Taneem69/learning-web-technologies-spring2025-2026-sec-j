let title=document.createElement("h2");
title.innerText="Tic Tac Toe";
document.body.appendChild(title);

let status=document.createElement("p");
status.innerText="Player X Turn";
document.body.appendChild(status);

let board=document.createElement("div");
board.style.display="grid";
board.style.gridTemplateColumns="repeat(3,100px)";
board.style.width="300px";
document.body.appendChild(board);

let reset=document.createElement("button");
reset.innerText="Reset Game";
document.body.appendChild(reset);

let currentPlayer="X";
let gameOver=false;
let cells=[];
let state=["","","","","","","","",""];

// winning patterns
let win=[
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];

// creating 9 cells
for(let i=0;i<9;i++){

    let cell=document.createElement("div");
    cell.style.border="1px solid black";
    cell.style.height="100px";
    cell.style.fontSize="40px";
    cell.style.textAlign="center";
    cell.style.lineHeight="100px";

    cell.onclick=function(){
        play(i);
    };

    board.appendChild(cell);
    cells.push(cell);
}

function play(i){

    if(state[i]!="" || gameOver){
        return;
    }

    state[i]=currentPlayer;
    if(currentPlayer=="X"){
        cells[i].style.color="red";
    } else {
        cells[i].style.color="blue";
    }
    
    cells[i].innerText=currentPlayer;

    checkWin();


    if(currentPlayer=="X"){
        currentPlayer="O";
    } else {
        currentPlayer="X";
    }

    if(!gameOver){
        status.innerText="Player " + currentPlayer + " Turn";
    }
}    

function checkWin(){

    for(let w of win){

        let a=state[w[0]];
        let b=state[w[1]];
        let c=state[w[2]];

        if(a!="" && a==b && b==c){

            status.innerText="Player " + a + " Wins!";
            gameOver=true;
            return;
        }
    }

    if(!state.includes("")){
        status.innerText="It's a Draw!";
        gameOver=true;
    }
}

reset.onclick=function(){

    state=["","","","","","","","",""];
    gameOver=false;
    currentPlayer="X";

    status.innerText="Player X Turn";

    for(let c of cells){
        c.innerText="";
    }
};