<!-- Custom CSS -->
<link href="css/block.css" rel="stylesheet">
<link href="css/game.css" rel="stylesheet">

<!-- Custom JavaScript -->
<link rel="stylesheet" href="css/plugin/animsition.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/gamestart.js"></script>

<!-- Block table -->
<script type="text/javascript">

$(function() {
    const default_bg = "#18bc9c";
    const pressed_bg = "#fff";

    var word_history = [];
    var leftButtonDown = false;

    var used = new Array(16);
    var track = [];

    $(".block").mousedown(function(e) {
        // Left mouse button was pressed, set flag
        if (e.which === 1) 
            leftButtonDown = true;

        /* You can track the index of 2D array with var x, y */
        // Notice: this method require id format = s11, s12...
        var this_id = $(this).attr("id"); 
        var x = this_id.charAt(1);
        var y = this_id.charAt(2);
        x -= '0', y -= '0';
        // alert("You click s" +x+y);

        /* set used */
        used[x * 4 + y] = true;

        /* create word tracker */
        track = []; // clear array
        track.push({
            letter: $(this).children().html(),
            id: $(this).attr('id'),
            x: x,
            y: y
        });

        /* Change bg-color when pressed */
        $(this).css("color", default_bg);
        $(this).css("background", pressed_bg);

    });
                    
    $(".block").mouseover(function() {
        if (leftButtonDown) {
            if ($(this).attr('id') == track[track.length-1].id) {    
                // prevent multi press
            }
            else if (isValid($(this))) { 
                // Prevent cheating out side || backmove
                        
                /* Change bg-color when pressed */
                $(this).css("color", default_bg);
                $(this).css("background", pressed_bg);
                var this_id = $(this).attr("id"); 
                var x = this_id.charAt(1);
                var y = this_id.charAt(2);
                x -= '0', y -= '0';
                        
                used[x*4+y] = true;
                track.push({
                    letter: $(this).children().html(),
                    id: $(this).attr('id'),
                    x: x,
                    y: y
                });
            }
            else {  //  cancel last
                if ($(this).attr('id') == track[track.length-2].id) {  // backmove
                    var last = track[track.length-1];
                    $("#"+last.id).css("color", pressed_bg);
                    $("#"+last.id).css("background", default_bg);
                    used[last.x*4+last.y] = false;
                    track.pop();
                }
            }
        }
    });
                    
    $(document).mouseup(function(e) {
        // Left mouse button was released, clear flag
        if (e.which === 1) 
            leftButtonDown = false;
        
        e.which = 0;

        var word = "";
        for (var i in track) {
            word += track[i].letter;
        }
                
        if (word.length < 3) {
            $("#select_word").html(word);
            $("#select_word").css("color", "red");
        }
        else {
            $.get( "dictionary.php", {
                command: "exist",
                word: word
            }, function(data, status) {
                if(data=="true") {
                    $("#select_word").css("color", "green");
                    word_history.push(word);
                }
                else
                    $("#select_word").css("color", "red");
                
                $("#select_word").html(word);
            });
        }

        cleanSelect();
    });
                    
    function tweakMouseMoveEvent(e) {
        // If left button is not set, set which to 0
        // This indicates no buttons pressed
        if (e.which === 1 && !leftButtonDown) 
            e.which = 0;
    }

    $(document).mousemove(function(e) {
        tweakMouseMoveEvent(e);
        $('#which_flag').text(e.which);
    });

    /* Help function */        
    function isValid (cur) {
        var id_str = cur.attr("id"); 
        var cx = id_str.charAt(1);
        var cy = id_str.charAt(2);

        id_str = track[track.length-1].id;
        var lx = id_str.charAt(1);
        var ly = id_str.charAt(2);

        if (Math.abs(cx-lx) > 1 || Math.abs(cy-ly) > 1)
            return false;
                        
        cx -= '0', cy -= '0';
                
        /* check used */
        if (used[cx * 4 + cy] == true)
            return false;
        else
            return true;
    }

    function cleanSelect () {
        /* reset all color */
        $(".block").css("color", pressed_bg);
        $(".block").css("background", default_bg);

        /* init used[][] and set */
        for (var i = 0; i < 4; i++)
            for (var j = 0; j < 4; j++)
                used[i * 4 + j] = false;
    }
});

function countdown(minutes) {
    var seconds = 60;
    var mins = minutes;

    function tick() {
        var counter = document.getElementById("clock");
        var current_minutes = mins - 1;

        seconds--;
        counter.innerHTML = (mins < 10 ? "0" : "") + current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        
        if (seconds > 0) 
            setTimeout(tick, 1000);
        else {
            if (mins > 1) 
               setTimeout(function () { countdown(mins - 1); }, 1000);
        }
    }

    tick();
}

countdown(2);

</script>

<!-- Header -->
<header>
    <div class="container game-container" display="none">
        <div class="row">
            <div class="game-title">
                <h1>Word is power!</h1>
                <hr class="star-light">
            </div>

            <br>

            <table id="other-table">
                <tr>
                    <td id="clock_tab">Left time</td>
                    <td id="clock_pill"><span id="clock">02:00</span></td>

                    <td id="score_tab">Score</td>
                    <td id="score_pill">0</td>
                </tr>
            </table>

            <table id="game-table">
                <tr>
                    <td class="game-panel" rowspan="2">
                         <div class="game-table">
                            <div class="block1 block" id="s00">
                                <h1>N</h1>
                            </div>

                            <div class="block1 block" id="s01">
                                <h1>A</h1>
                            </div>

                            <div class="block1 block" id="s02">
                                <h1>M</h1>
                            </div>

                            <div class="block1 block" id="s03">
                                <h1>E</h1>
                            </div><br>

                            <div class="block2 block" id="s10">
                                <h1>E</h1>
                            </div>

                            <div class="block2 block" id="s11">
                                <h1>F</h1>
                            </div>

                            <div class="block2 block" id="s12">
                                <h1>G</h1>
                            </div>

                            <div class="block2 block" id="s13">
                                <h1>H</h1>
                            </div><br>

                            <div class="block3 block" id="s20">
                                <h1>I</h1>
                            </div>

                            <div class="block3 block" id="s21">
                                <h1>J</h1>
                            </div>
                
                            <div class="block3 block" id="s22">
                                <h1>K</h1>
                            </div>

                            <div class="block3 block" id="s23">
                                <h1>L</h1>
                            </div><br>

                            <div class="block4 block" id="s30">
                                    <h1>M</h1>
                            </div>

                            <div class="block4 block" id="s31">
                                <h1>N</h1>
                            </div>

                            <div class="block4 block" id="s32">
                                <h1>O</h1>
                            </div>
                
                            <div class="block4 block" id="s33">
                                <h1>P</h1>
                            </div>
                        </div>
                    </td>

                    <td class="list-panel">
                        <form role="form">
                            <div class="panel">
                                <div class="panel-heading">History list</div>
                                <textarea class="form-control" rows="9" id="word-list"></textarea>
                            </div>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td class="find-panel">
                        <div class="panel">
                            <div class="panel-heading">Your word</div>
                            <div class="panel-body"><span id="select_word"></span></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</header>