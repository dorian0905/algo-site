// start javascript
function fonction_javascript() {
    let board = [];
    for(let i = 0; i < 10; i++) {
        board[i] = [];
        for(let j = 0; j < 10; j++) {
            board[i][j] = 'O';
        }
    }
    let row = parseInt(document.getElementById('row').value);
    let column = parseInt(document.getElementById('column').value);
    const move = parseInt(document.getElementById('move').value);
    const rowOk = (row > 0 && row <= 10);
    const columnOk = (column > 0 && column <= 10);
    const moveOk = (move >= 0 && move <= 3);
    if(!rowOk || !columnOk || !moveOk) {
        return 'Les entrées ne sont pas valides.';
    }
    switch(move) {
        case 0:
            row++;
            column--;
            break;
        case 1:
            row++;
            column++;
            break;
        case 2:
            row--;
            column++;
            break;
        case 3:
            row--;
            column--;
            break;
    }
    if(row < 1 || row > 10 || column < 1 || column > 10) {
        return 'Le pion est sorti du plateau.';
    }
    board[row-1][column-1] = '⬤';
    let display = `- - - - - - - - - - - - - - - - - - - - - - -
`;
    for(i = board.length-1; i >= 0; i--) {
        for(j = 0; j < board[i].length; j++) {
            display = `${display} | ${board[i][j]}`;
        }
        display = `${display} | 
- - - - - - - - - - - - - - - - - - - - - - -
`;
    }
    return display;
}
// end javascript


// start jquery
function fonction_jquery() {
    let board = [];
    for(let i = 0; i < 10; i++) {
        board[i] = [];
        for(let j = 0; j < 10; j++) {
            board[i][j] = 'O';
        }
    }
    let row = parseInt($('#row').val());
    let column = parseInt($('#column').val());
    const move = parseInt($('#move').val());
    const rowOk = (row > 0 && row <= 10);
    const columnOk = (column > 0 && column <= 10);
    const moveOk = (move >= 0 && move <= 3);
    if(!rowOk || !columnOk || !moveOk) {
        return 'Les entrées ne sont pas valides.';
    }
    switch(move) {
        case 0:
            row++;
            column--;
            break;
        case 1:
            row++;
            column++;
            break;
        case 2:
            row--;
            column++;
            break;
        case 3:
            row--;
            column--;
            break;
    }
    if(row < 1 || row > 10 || column < 1 || column > 10) {
        return 'Le pion est sorti du plateau.';
    }
    board[row-1][column-1] = '⬤';
    let display = `- - - - - - - - - - - - - - - - - - - - - - -
`;
    for(i = board.length-1; i >= 0; i--) {
        for(j = 0; j < board[i].length; j++) {
            display = `${display} | ${board[i][j]}`;
        }
        display = `${display} | 
- - - - - - - - - - - - - - - - - - - - - - -
`;
    }
    return display;
}
// end jquery