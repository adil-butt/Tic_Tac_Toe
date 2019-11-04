$(document).ready(function(){
    var value = 'X';
    $("#gameTable").on("click", "td", function() {
        if($(this).text() === '') {
            $(this).text(value);
            value = (value === 'X') ? 'O' : 'X';
        }
        // Horizontally
        for (let i = 0; i < 3; i++) {
            let k = 3 * i;
            if($("#td"+k).text() === $("#td"+(k+1)).text() && $("#td"+k).text() === $("#td"+(k+2)).text() && $("#td"+k).text() !== '') {
                alert('win');
            }
        }
        // Vertically
        for (let i = 0; i < 3; i++) {
            if($("#td"+i).text() === $("#td"+(i+3)).text() && $("#td"+i).text() === $("#td"+(i+6)).text() && $("#td"+i).text() !== '') {
                alert('win');
            }
        }
        // Diagonally
        if($("#td0").text() === $("#td4").text() && $("#td0").text() === $("#td8").text() && $("#td0").text() !== '') {
            alert('win');
        }
        // Diagonally
        if($("#td2").text() === $("#td4").text() && $("#td2").text() === $("#td6").text() && $("#td2").text() !== '') {
            alert('win');
        }

        $(document).on("click", "#restart", function() {
            $('#gameTable td').text('');

        });

    });

});