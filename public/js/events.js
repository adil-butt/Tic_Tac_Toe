$(document).ready(function(){
    var value = 'X';
    var win = false;
    var winner = '';
    $("#gameTable").on("click", "td", function() {
        if($(this).text() === '' && win === false) {
            $(this).text(value);
            value = (value === 'X') ? 'O' : 'X';
        }
        // Horizontally
        for (let i = 0; i < 3; i++) {
            let k = 3 * i;
            if($("#td"+k).text() === $("#td"+(k+1)).text() && $("#td"+k).text() === $("#td"+(k+2)).text() && $("#td"+k).text() !== '') {
                win = true;
                if($("#td"+k).text() === 'X') {
                    winner = 'Player 1';
                } else if($("#td"+k).text() === 'O') {
                    winner = 'Player 2';
                }
            }
        }
        // Vertically
        for (let i = 0; i < 3; i++) {
            if($("#td"+i).text() === $("#td"+(i+3)).text() && $("#td"+i).text() === $("#td"+(i+6)).text() && $("#td"+i).text() !== '') {
                win = true;
                if($("#td"+i).text() === 'X') {
                    winner = 'Player 1';
                } else if($("#td"+i).text() === 'O') {
                    winner = 'Player 2';
                }
            }
        }
        // Diagonally
        if($("#td0").text() === $("#td4").text() && $("#td0").text() === $("#td8").text() && $("#td0").text() !== '') {
            win = true;
            if($("#td0").text() === 'X') {
                winner = 'Player 1';
            } else if($("#td0").text() === 'O') {
                winner = 'Player 2';
            }
        }
        // Diagonally
        if($("#td2").text() === $("#td4").text() && $("#td2").text() === $("#td6").text() && $("#td2").text() !== '') {
            win = true;
            if($("#td2").text() === 'X') {
                winner = 'Player 1';
            } else if($("#td2").text() === 'O') {
                winner = 'Player 2';
            }
        }
        for(let j = 0; j <= 8; j++) {
            var isCorrect = true;
            if($("#td"+j).text() === '') {
                isCorrect = false;
                break;
            }
        }
        if(isCorrect) {
            $.alert({
                title: 'Game Over',
                content: 'The Game is Over!',
            });
        }
        if(win) {
            $.alert({
                title: 'Winner!',
                content: winner+' Wins',
            });
        }
        $(document).on("click", "#restart", function() {
            $('#gameTable td').text('');
            value = 'X';
            win = false;
            winner = '';
        });
    });
});