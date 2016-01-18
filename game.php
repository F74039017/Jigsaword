
    <link href="css/block.css" rel="stylesheet">

    <!-- Block table -->
    <script type="text/javascript">
        $(function() {
            const default_bg = "#18bc9c";
            const pressed_bg = "#fff";

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
                    
            $(document).mouseup(function(e){
                // Left mouse button was released, clear flag
                if (e.which === 1) leftButtonDown = false;
                   e.which = 0;

                var word = "";
                for (var i in track) {
                    word += track[i].letter;
                }
                
                $("#select_word").html(word);

                cleanSelect();
            });
                    
            function tweakMouseMoveEvent(e){
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
    </script>

    <div id="main">

    <h1>Countdown Clock</h1>
    <div id="clockdiv">
        <div>
            <span class="minutes"></span>
            <div class="smalltext">Minutes</div>
        </div>
        <div>
            <span class="seconds"></span>
            <div class="smalltext">Seconds</div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container game-container">
            <div class="row">
                <div class="game-title">
                    <h1>Word is power!</h1>
                    <hr class="star-light">
                </div>

                <div class="game-table">
                    <div class="block1 block" id="s00">
                        <h1>A</h1>
                    </div>
                    <div class="block1 block" id="s01">
                        <h1>B</h1>
                    </div>
                    <div class="block1 block" id="s02">
                        <h1>C</h1>
                    </div>
                    <div class="block1 block" id="s03">
                        <h1>D</h1>
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
                <p>Which = <span id="which_flag">0</span></p>
                <p>Your Word = <span id="select_word"></span></p>
            </div>
        </div>
    </header>