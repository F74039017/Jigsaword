const default_bg = "#9587FF";
const pressed_bg = "red";
var track = [];
$(function() {
    var leftButtonDown = false;

    var used = new Array(16);
    $(".square").mousedown(function(e){
        // Left mouse button was pressed, set flag
        if(e.which === 1) leftButtonDown = true;

        /* You can track the index of 2D array with var x, y */
        // Notice: this method require id format = s11, s12...
        var this_id = $(this).attr("id"); 
        var x = this_id.charAt(1);
        var y = this_id.charAt(2);
        x -= '0', y -= '0';
        // alert("You click s" +x+y);

        /* set used */
        used[x*4+y] = true;

        /* create word tracker */
        track = []; // clear array
        track.push({
            letter: $(this).children().html(),
            id: $(this).attr('id'),
            x: x,
            y: y
        });

        /* Change bg-color when pressed */
        $(this).css("backgroundColor", pressed_bg);

	});
    $(".square").mouseover(function(){
        if(leftButtonDown) {
            if($(this).attr('id')==track[track.length-1].id) {    // prevent multi press

            }
            else if(isValid($(this))) { // Prevent cheating out side || backmove
                /* Change bg-color when pressed */
                $(this).css("backgroundColor", pressed_bg);
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
                if($(this).attr('id')==track[track.length-2].id) {  // backmove
                    var last = track[track.length-1];
                    $("#"+last.id).css("backgroundColor", default_bg);
                    used[last.x*4+last.y] = false;
                    track.pop();
                }
                // leftButtonDown = false;
            }
        }
    });
    $(document).mouseup(function(e){
        // Left mouse button was released, clear flag
        if(e.which === 1) leftButtonDown = false;
        e.which = 0;

        var word = "";
        for(var i in track) {
            word += track[i].letter;
        }
        $("#select_word").html(word);

        cleanSelect();
    });
    
    function tweakMouseMoveEvent(e){
        
        // If left button is not set, set which to 0
        // This indicates no buttons pressed
        if(e.which === 1 && !leftButtonDown) e.which = 0;
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

        if(Math.abs(cx-lx)>1||Math.abs(cy-ly)>1)
            return false;
        
        cx -= '0', cy -= '0';
        /* check used */
        if(used[cx*4+cy]==true)
            return false;
        else
            return true;
    }

    function cleanSelect () {
        /* reset all color */
        $(".square").css("backgroundColor", default_bg);

        /* init used[][] and set */
        for(var i=0; i<4; i++)
            for(var j=0; j<4; j++)
                used[i*4+j] = false;
    }
});

/* return select word */
function getSelectWord () {
    var str = "";
    for(var i=0; i<track.length; i++)
        str += track[i].letter;
    return str;
}